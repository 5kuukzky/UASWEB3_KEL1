@extends('layouts.main')
@section('content')
<section>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:gap-16 lg:grid-cols-2">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:h-full lg:order-last">
                <img class="absolute inset-0 object-cover w-full h-full" src="https://www.hyperui.dev/photos/man-1.jpeg"
                    alt="Man using a computer" />
            </div>

            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl"> {{ $details->nama }} di {{ $details->pelamar->name }}</h2>
                <h2 class="text-2xl font-bold sm:text-2xl mt-8"> Deskripsi</h2>
                <p class="mt-2 font-light">
                    {{$details->deskripsi}}
                </p>
                <h2 class="text-2xl font-bold sm:text-2xl mt-8"> Kriteria</h2>
                <p class="mt-2 font-light">
                    {{$details->kriteria}}
                </p>
                <small>Jumlah : {{ $details->jumlah }} Pelamar</small><br>
                <small>Apply Before : {{ $details->tanggal }}</small>
            </div>
        </div>
        <a href="{{ url('apply/'. $details->slug) }} " class="btn btn-primary">Apply Job</a>
    </div>
</section>
@endsection