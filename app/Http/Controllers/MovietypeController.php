<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movietype;


class MovietypeController extends Controller
{
    public function index()
    {
        $movietypes = Movietype::all();
    return view('movietypes.index', compact('movietypes'));
    }
    public function create()
{
    $movietype = new Movietype;
    return view('movietypes.create-movietype', compact('movietype'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $movietype = new Movietype;
        $movietype->name = $validatedData['name'];
        $movietype->save();

        return redirect('/')->with('success', 'movietype created successfully!');
    }
}