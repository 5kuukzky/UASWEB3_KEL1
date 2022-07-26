@extends('layouts.main')
@section('content')
<div class="container">
    <h2 class="text-3xl font-bold sm:text-4xl my-12">News</h2>
    <div class="row text-center">
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                    <form class="flex items-center my-8" action="/news" method="GET" autocomplete="off">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-yellow-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 shadow-sm  "
                                placeholder="Search" required="" name="search">
                        </div>
                        <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @foreach ($data as $berita ) <div class="col-md-4 mb-">
            <div class="card" style="border-radius: 10% ">
                <img src="{{ asset('storage/image_news/'. $berita->gambar) }}" class="card-img-top" alt="News"
                    style="height:32vh; object-fit:cover">
                <div class="card-body">
                    <h5 class="card-title font-semibold text-lg">{{ $berita->judul }}</h5>
                    <p class="card-text"> {{ $berita->excerpt }}</p>
                    <small>Posted at : {{ $berita->created_at }}</small>
                    <a href="{{ url('news/'. $berita->slug) }}" class="btn btn-secondary mt-4">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $data->links()}}
</div>
@endsection