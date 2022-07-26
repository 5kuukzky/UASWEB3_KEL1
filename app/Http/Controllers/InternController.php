<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    public function index()
    {
        $interns = Intern::get();
        return view('intern.index', [
            'title' => 'Internship Program',
            'intern' => $interns,
        ]);
    }

    public function create()
    {
        return view('employer.addintern', [
            'title' => 'Add Intern',
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
        Intern::create([
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
        $intern = Intern::where('slug', $slug)->first();
        return view('intern.detail', [
            'title' => 'Detail',
            'data' => $intern,
        ]);
    }
}
