<?php

namespace App\Http\Controllers;

use App\Models\Jobapllies;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DownloadController extends Controller
{


    public function download($id)
    {
        $cv = Jobapllies::find($id);
        $download_path = (public_path() . '/storage/file_cv/' . $cv->cv);
        // $myFile = public_path('storage/file_cv/', $cv);
        return response()->download($download_path);
    }
}
