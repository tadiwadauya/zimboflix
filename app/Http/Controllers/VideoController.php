<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Video;


class VideoController extends Controller
{

    public function create()
{
    $categories = Category::all();
    return view('upload', compact('categories'));
}


    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'file' => 'required|mimes:mp4,mov,avi,wmv,ts|max:2048',
        'category' => 'required',
        'description' => 'nullable',
        'views' => 'integer',
        'downloads' => 'integer',
        'type' => 'nullable',
        'country' => 'nullable',
        'release_date' => 'date|nullable',
        'director' => 'nullable',
        'production_company' => 'nullable',
        'cast' => 'nullable',
    ]);
    
    if($validator->fails()){
        return back()->withErrors($validator)->withInput();
    }

    $video = new Video;
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->move('public/videos/', $fileName);

        $video->filename = $filePath;
    }

    $video->title = $request->title;
    $video->description = $request->description;
    $video->views = $request->views ?? 0;
    $video->downloads = $request->downloads ?? 0;
    $video->type = $request->type;
    $video->country = $request->country;
    $video->release_date = $request->release_date;
    $video->director = $request->director;
    $video->production_company = $request->production_company;
    $video->cast = $request->cast;
    $video->category_id = $request->category;
    
   
    
    $video->save();
    
    return redirect('/')->with('success', 'Video uploaded successfully!');

}

}
