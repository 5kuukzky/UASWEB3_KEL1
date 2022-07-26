<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Intern') }}
        </h2>
    </x-slot>
    <div class="container mt-12">
        <form action="/interns" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Pekerjaan</label>
                <input type="text" class="form-control" placeholder="name@example.com" name="nama" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Slug</label>
                <input type="text" class="form-control" placeholder="name@example.com" name="slug" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Deskripsi</label>
                <input type="text" class="form-control" placeholder="name@example.com" name="deskripsi"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Kriteria</label>
                <input type="text" class="form-control" placeholder="name@example.com" name="kriteria"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah</label>
                <input type="number" class="form-control" placeholder="name@example.com" name="jumlah"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apply Before</label>
                <input type="date" class="form-control" placeholder="name@example.com" name="tanggal"
                    autocomplete="off">
            </div>
            <button type="submit" class="btn- btn-secondary">Kirim</button>
        </form>
    </div>
</x-app-layout>