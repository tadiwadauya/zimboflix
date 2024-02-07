<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Tvproduction;
use App\Models\Category;
use App\Models\Movietype;

class TvproductionController extends Controller
{
    public function index()
    {
        $all_tvproductions = Tvproduction::latest()->get();
        return view('tvproductions.index',compact('all_tvproductions'));
    }
    public function movies()
    {
        $all_tvproductions = Tvproduction::whereHas('category', function($query) {
                                             $query->where('name', '=', 'Movie');
                                         })
                                         ->paginate(16);
                                         
        return view('tvproductions.movies', compact('all_tvproductions'));
    }

    public function create()
    {
        $parentProductions = Tvproduction::all();
        $types = Movietype::latest()->get();
        $categories = Category::latest()->get();
        return view('tvproductions.create', compact('categories','types','parentProductions'));
    }


    public function ShowingAllTvproductions(){
        $tvproductions = Tvproduction::latest()->get();
        return view('tvproductions.show-all-tvproductions', compact('tvproductions'));
    }

    public function store(Request $request)
    {
        // validating tvproductions
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:tvproductions|max:255',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'required|mimes:mp4,mov,avi,wmv,ts',
            'description' => 'nullable',
            'views' => 'integer',
            'downloads' => 'integer',
            'type' => 'nullable',
            'country' => 'nullable',
            'release_date' => 'date|nullable',
            'director' => 'nullable',
            'production_company' => 'nullable',
            'cast' => 'nullable',
            'category_id' => 'required',
            'parent_id' => 'nullable',
            'subtitle' => 'nullable',
            'season' => 'nullable',
            'episode' => 'nullable',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $data = new Tvproduction;
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move('videos/', $filename);
    
            $data->file = $filename;
        }
    
        if ($request->file('cover_photo')) {
            $coverPhoto = $request->file('cover_photo');
            $coverPhotoName = time() . '.' . $coverPhoto->getClientOriginalExtension();
            $coverPhoto->move('cover_photos/', $coverPhotoName);
            $data->cover_photo = $coverPhotoName;
        }
    
        $data->title = $request->title;
        $data->description = $request->description;
        $data->views = $request->views ?? 0;
        $data->downloads = $request->downloads ?? 0;
        $data->type = $request->type;
        $data->country = $request->country;
        $data->release_date = $request->release_date;
        $data->director = $request->director;
        $data->production_company = $request->production_company;
        $data->cast = $request->cast;
        $data->category_id = $request->category_id;
        $data->parent_id = $request->parent_id;
        $data->subtitle = $request->subtitle;
        $data->season = $request->season;
        $data->episode = $request->episode;
    
        $data->save();
    
        // Redirect to the second stage to upload the second file with the best quality
        return redirect()->route('second_stage', ['id' => $data->id]);
    }

    public function secondStage($id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    return view('tvproductions/second_stage', compact('tvProduction'));
}

public function saveSecondStage(Request $request, $id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    // Save the second file with the best quality
    if ($request->file('second_file')) {
        $secondFile = $request->file('second_file');
        $secondFileName = time() . '_best_quality.' . $secondFile->getClientOriginalExtension();
        $secondFile->move('videos/', $secondFileName);

        $tvProduction->second_file = $secondFileName;
        $tvProduction->save();

        // Redirect to the third stage to upload the third file with the middle quality
        return redirect()->route('third_stage', ['id' => $tvProduction->id]);
    }

    return back()->withErrors(['error' => 'Please upload a file.']);
}

public function thirdStage($id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    return view('tvproductions/third_stage', compact('tvProduction'));
}

public function saveThirdStage(Request $request, $id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    // Save the third file with the middle quality
    if ($request->file('third_file')) {
        $thirdFile = $request->file('third_file');
        $thirdFileName = time() . '_middle_quality.' . $thirdFile->getClientOriginalExtension();
        $thirdFile->move('videos/', $thirdFileName);

        $tvProduction->third_file = $thirdFileName;
        $tvProduction->save();

        // Redirect to the fourth stage to upload the fourth file with the lowest quality
        return redirect()->route('fourth_stage', ['id' => $tvProduction->id]);
    }

    return back()->withErrors(['error' => 'Please upload a file.']);
}

public function fourthStage($id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    return view('tvproductions/fourth_stage', compact('tvProduction'));
}

public function saveFourthStage(Request $request, $id)
{
    $tvProduction = Tvproduction::findOrFail($id);

    // Save the fourth file with the lowest quality
    if ($request->file('fourth_file')) {
        $fourthFile = $request->file('fourth_file');
        $fourthFileName = time() . '_lowest_quality.' . $fourthFile->getClientOriginalExtension();
        $fourthFile->move('videos/', $fourthFileName);

        $tvProduction->fourth_file = $fourthFileName;
        $tvProduction->save();

        return redirect('tvproductions')->with('success', 'TV production has been added successfully!');
    }

    return back()->withErrors(['error' => 'Please upload a file.']);
}

    public function show($id)
    {
        $data = Tvproduction::findOrFail($id);
        return view('tvproductions.show', compact('data'));
    }


    public function showtv($id){
    
        $data = Tvproduction::findOrFail($id);
        $all_tvproductions = Tvproduction::where('parent_id', $data->id)
        ->get();
        $grouped_tvproductions = $all_tvproductions->groupBy('season');
        return view('tvproductions.showtv', compact('data','all_tvproductions','grouped_tvproductions'));
    }

    
    public function watchvideo($id){

        $data = Tvproduction::findOrFail($id);
        return view('tvproductions.watchvideo', compact('data'));
    }

    public function showTvproduction($id)
    {
        $data = Tvproduction::findOrFail($id);
        return view('tvproductions.show-my-tvproduction', compact('data'));
    }
    
    public function edit($id)
    {
        $types = Movietype::latest()->get();
        $categories = Category::latest()->get();
        $tvproduction = Tvproduction::findOrFail($id);
        return view('tvproductions.edit',compact('tvproduction','categories','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validating tvproductions
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:tvproductions,title,' . $id . '|max:255',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable|mimes:mp4,mov,avi,wmv,ts',
            'description' => 'nullable',
            'views' => 'integer',
            'downloads' => 'integer',
            'type' => 'nullable',
            'country' => 'nullable',
            'release_date' => 'date|nullable',
            'director' => 'nullable',
            'production_company' => 'nullable',
            'cast' => 'nullable',
            'category_id' => 'required',
            'parent_id' => 'nullable',
            'subtitle' => 'nullable',
            'season' => 'nullable',
            'episode' => 'nullable',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $data = Tvproduction::findOrFail($id);
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('videos/', $filename);
    
            // Delete the old file if it exists
            if ($data->file) {
                Storage::delete('videos/' . $data->file);
            }
    
            $data->file = $filename;
        }
    
        if ($request->hasFile('cover_photo')) {
            $coverPhoto = $request->file('cover_photo');
            $coverPhotoName = time() . '.' . $coverPhoto->getClientOriginalExtension();
            $coverPhoto->move('cover_photos/', $coverPhotoName);
    
            // Delete the old cover photo if it exists
            if ($data->cover_photo) {
                Storage::delete('cover_photos/' . $data->cover_photo);
            }
    
            $data->cover_photo = $coverPhotoName;
        }
    
        $data->title = $request->title;
        $data->description = $request->description;
        $data->views = $request->views ?? 0;
        $data->downloads = $request->downloads ?? 0;
        $data->type = $request->type;
        $data->country = $request->country;
        $data->release_date = $request->release_date;
        $data->director = $request->director;
        $data->production_company = $request->production_company;
        $data->cast = $request->cast;
        $data->category_id = $request->category_id;
        $data->parent_id=$request->parent_id;
        $data->subtitle=$request->subtitle;
        $data->season=$request->season;
        $data->episode=$request->episode;
    
        $data->save();
    
        return back()->with('success', 'TV production has been updated successfully');
    }

    public function destroy($id)
    {
        $tvproduction = Tvproduction::findOrFail($id);
        $tvproduction->delete();

        return back()->with('success', 'TV production has been deleted successfully');  }

    public function download($file){
        return response()->download('documents/'.$file);
    }

}
