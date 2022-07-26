<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $dataNews = News::search($request->search)->paginate(3);
        } else {
            $dataNews = News::paginate(3);
        }
        return view('news.index', [
            'data' => $dataNews,
            'title' => 'News'
        ]);
    }

    public function create()
    {
        return view('news.addnews', [
            "title" => "Add News",
        ]);
    }

    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'nama' => 'required|max:255|string',
        //     'slug' => 'required|max:255',
        //     'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'deskripsi' => 'required',
        // ]);
        $gambar = $request->gambar;
        $gambar_name = Str::random(6) . '-' . $gambar->getClientOriginalName();
        if ($gambar->move(public_path('storage/image_news/'), $gambar_name)) {
            News::create([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'excerpt' => $request->excerpt,
                'isi' => $request->body,
                'gambar' => $gambar_name,
            ]);

            return redirect('dashboard');
        }
    }

    public function detail($slug)
    {
        $show = News::where('slug', $slug)->get();
        return view('news.detail', [
            'title' => 'Detail',
            'detail' => $show,
        ]);
    }

    public function edit($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('news.editnews', [
            'data' => $news,
        ]);
    }

    public function update(Request $request, $slug)
    {
        News::where('slug', $slug)->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'isi' => $request->body,
            'gambar' => $request->gambar,
        ]);
        return redirect('dashboard');
    }
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->back();
    }
}
