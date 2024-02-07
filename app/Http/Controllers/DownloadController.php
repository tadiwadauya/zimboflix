<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tvproduction;

class DownloadController extends Controller
{
    public function index()
    {
        $videos = Tvproduction::all();
        return view('downloads.index', compact('videos'));
    }
}
