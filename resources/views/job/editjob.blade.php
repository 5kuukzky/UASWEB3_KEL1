<x-app-layout>
    <div class="container mt-12">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Job') }}
            </h2>
        </x-slot>
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Job</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="nama"
                        autocomplete="off" value="{{ $jobs->nama }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Slug</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="slug"
                        autocomplete="off" value="{{ $jobs->slug }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Deskripsi</label>
                    <input type="text" class="form-control" placeholder="name@example.com" name="deskripsi"
                        autocomplete="off" value="{{ $jobs->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">kriteria</label>
                    <input type=" text" class="form-control" rows=" 3" name="kriteria" autocomplete="off"
                        value="{{ $jobs->kriteria }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jumlah</label>
                    <input type="number" class="form-control" placeholder="name@example.com" name="jumlah"
                        autocomplete="off" value="{{ $jobs->jumlah }}">

                    <button type="submit">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>