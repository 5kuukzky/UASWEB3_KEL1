<x-app-layout>
    <div class="container mt-12">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit News') }}
            </h2>
        </x-slot>
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul News</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="judul"
                        autocomplete="off" value="{{ $data->judul }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slug</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="slug"
                        autocomplete="off" value="{{ $data->slug }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Excerpt</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="excerpt"
                        autocomplete="off" value="{{ $data->excerpt }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Body</label>
                    <input type=" text" class="form-control" rows=" 3" name="body" autocomplete="off"
                        value="{{ $data->isi }}"></input type=" text">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Excerpt</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="gambar"
                        autocomplete="off" value="{{ $data->gambar }}" readonly>
                    <button type="submit">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>