@extends('layouts.main')
@section('content')
@include('partial.slider')

<section class="text-black " id="news">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto text-center">
            <h2 class="text-3xl font-bold sm:text-4xl">News</h2>
            <p class="mt-4 text-black">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
                aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
                saepe laborum.
            </p>
        </div>
        <div class="container">
            <div class="row text-center">
                @foreach ( $data as $news)
                <div class="col-md-4 mb-3">
                    <div class="card" style="border-radius: 10% ">
                        <img src="{{ asset('storage/image_news/'. $news->gambar) }}" class="card-img-top" alt="Makanan"
                            style="height:30vh; object-fit:cover">
                        <div class="card-body">
                            <h5 class="card-title font-semibold text-lg">{{ $news->judul }}</h5>
                            <p class="card-text">{{ $news->excerpt }} </p>

                            <a href="{{ url('news/'. $news->slug) }}" class="btn btn-secondary mt-4">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="max-w-lg mx-auto text-center mt-8">
            <a href="news" class="btn btn-master btn-primary me-3">
                Read More
            </a>
        </div>
    </div>
</section>
<section class="text-black bg-slate-100" id="job">
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto text-center">
            <div class="xl:w mt-12">
                <h1 role="heading" tabindex="0" class="text-8xl font-bold  text-center">Foodfest?</h1>
                <h3 role="contentinfo" tabindex="0" class="text-base font-light text-center mt-4">Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. <br>Lorem Ipsum has been the industry's
                    standard dummy
                    text Lorem Ipsum is simply dummy text of the printing</h3>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($job as $jobs)
            <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-purple-500/10 hover:border-purple-500/10"
                href="/services/digital-campaigns">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-pink-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>

                <h3 class="mt-4 text-xl font-bold text-black">{{ $jobs->nama }}</h3>

                <p class="mt-1 text-sm text-black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
                    possimus adipisci distinctio alias voluptatum blanditiis laudantium.
                </p>
            </a>
            @endforeach
        </div>
        <div class="max-w-lg mx-auto text-center mt-8">
            <a href="job" class="btn btn-master btn-primary me-3">
                Read More
            </a>
        </div>
    </div>
</section>
@include('partial.footer')
@endsection