<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Jobapllies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardEmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $id = Auth::user()->id;
        $job = Job::where('id_user', $id)->get();
        $datum = Jobapllies::where('id_perusahaan', $id)->get();
        return view('employer.dashboard', [
            'data' => $datum,
            'jobs' => $job,
        ]);
    }
}
