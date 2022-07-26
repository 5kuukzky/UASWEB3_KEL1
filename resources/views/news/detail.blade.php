@extends('layouts.main')
@section('content')
<section>
    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 sm:py-24">
        <div class="max-w-3xl">
            @foreach ($detail as $details )

            <h2 class="text-3xl font-bold sm:text-4xl">
                {{ $details->judul }}
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-8 lg:gap-16 lg:grid-cols-2">
            <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
                <img class="absolute inset-0 object-cover w-full h-full"
                    src="{{ asset('storage/image_news/'. $details->gambar) }}" alt="{{ $details->judul }}" />
            </div>

            <div class="lg:py-16">
                <article class="space-y-4 text-gray-600">
                    <p>
                        {{ $details->isi }}
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum
                        explicabo quidem voluptatum voluptas illo accusantium ipsam quis,
                        vel mollitia? Vel provident culpa dignissimos possimus, perferendis
                        consectetur odit accusantium dolorem amet voluptates aliquid,
                        ducimus tempore incidunt quas. Veritatis molestias tempora
                        distinctio voluptates sint! Itaque quasi corrupti, sequi quo odit
                        illum impedit!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum
                        explicabo quidem voluptatum voluptas illo accusantium ipsam quis,
                        vel mollitia? Vel provident culpa dignissimos possimus, perferendis
                        consectetur odit accusantium dolorem amet voluptates aliquid,
                        ducimus tempore incidunt quas. Veritatis molestias tempora
                        distinctio voluptates sint! Itaque quasi corrupti, sequi quo odit
                        illum impedit!
                    </p>

                </article>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection