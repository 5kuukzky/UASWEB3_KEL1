<?php

namespace App\Http\Controllers;

use App\Models\News;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('dashboard', [
            'news' => News::get(),
        ]);
    }

    public function redirect()
    {
        if (Auth::user()->role == 'employer') {
            return redirect()->route('dashboard-employer');
        } else if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard');
        } else if (Auth::user()->role == 'jobseeker') {
            return redirect()->route('jobseeker');
        }
    }
}
