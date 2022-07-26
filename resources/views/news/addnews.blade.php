<x-app-layout>
    <div class="container mt-12">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add News') }}
            </h2>
        </x-slot>
        <div class="container">
            <form action="/news" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul News</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="judul"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slug</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="slug"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Excerpt</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="excerpt"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Body</label>
                    <textarea class="form-control" rows=" 3" name="body" autocomplete="off"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" name="gambar">
                </div>
                <button type="submit" class="btn- btn-secondary">Kirim</button>
            </form>
        </div>
    </div>
</x-app-layout>