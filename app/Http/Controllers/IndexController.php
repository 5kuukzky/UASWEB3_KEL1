<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $news = News::all()->take(3);
        $jobs = Job::all()->take(3);
        return view('index', [
            'title' => 'Index',
            'data' => $news,
            'job' => $jobs,
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
