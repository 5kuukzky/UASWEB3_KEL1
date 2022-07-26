<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Job;
use App\Models\Jobapllies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $dataJob = Job::search($request->search)->paginate(6);
        } else {
            $dataJob = Job::paginate(6);
        }
        return view('job.index', [
            'title' => 'Lowongan Pekerjaan',
            'jobs' => $dataJob,
        ]);
    }

    public function create()
    {
        return view('employer.addjob', [
            'title' => 'Add New Job',
        ]);
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        // $validateData = $request->validate([
        //     'nama' => 'required|max:255|string',
        //     'slug' => 'required|max:255',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'deskripsi' => 'required',
        // ]);

        $slug = Str::slug('Laravel 5 Framework', '-');
        Job::create([
            'nama' => $request->nama,
            'id_user' => $id,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'kriteria' => $request->kriteria,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('dashboard-employer');
    }

    public function showDetail($slug)
    {
        $detail =  Job::where('slug', $slug)->first();
        return view('job.detail', [
            'title' => 'Detail Job',
            'details' => $detail,
        ]);
    }

    public function apply($slug)
    {
        $job = Job::where('slug', $slug)->first();
        $id = Auth::user();
        $users = User::find($id)->first();
        return view('job.apply', [
            'title' => 'Apply',
            'user' => $users,
            'job' => $job,
        ]);
    }

    public function jobStore(Request $request)
    {

        $validateData = $request->validate([
            'ktp' => 'required|mimes:pdf|max:2048',
            'cv' => 'required|mimes:pdf|max:2048',

        ]);
        $id = Auth::id();
        $ktp = $request->ktp;
        $ktp_name = Str::random(6) . '-' . $ktp->getClientOriginalName();
        $cv = $request->cv;
        $cv_name = Str::random(6) . '-' . $cv->getClientOriginalName();
        if ($cv->move(public_path('storage/file_cv/'), $cv_name) && $ktp->move(public_path('storage/file_ktp/'), $ktp_name)) {
            Jobapllies::create([
                'id_user' => $id,
                'id_perusahaan' => $request->id_perusahaan,
                'id_job' => $request->id_job,
                'ktp' => $ktp_name,
                'cv' => $cv_name,
            ]);

            return redirect('dashboard');
        }
    }

    public function destroy($id)
    {
        $job = Jobapllies::find($id)->delete();
        return redirect()->back();
    }

    public function hapus($id)
    {
        Job::find($id)->delete();
        return redirect()->back();
    }

    public function edit($slug)
    {
        $job = Job::where('slug', $slug)->first();
        return view('job.editjob', [
            'jobs' => $job,
        ]);
    }

    public function update(Request $request, $slug)
    {
        Job::where('slug', $slug)->update([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'kriteria' => $request->kriteria,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('dashboard-employer');
    }
}
