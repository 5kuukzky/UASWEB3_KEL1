@extends('layouts.main')
@section('content')
<div class="container mt-12">
    <form action="/applied" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Form Apply Job</h1>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="nama_pelamar"
                autocomplete="off" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Perusahaan</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="nama_perusahaan"
                autocomplete="off" value="{{ $job->pelamar->name }}" readonly>
        </div>
        <div class="form-group" style="display: none">
            <label for="exampleFormControlInput1">Id Perusahaan</label>
            <input type="number" class="form-control" placeholder="name@example.com" name="id_perusahaan"
                autocomplete="off" value="{{ $job->pelamar->id }}" readonly>
        </div>
        <div class="form-group" style="display: none">
            <label for="exampleFormControlInput1">Id Job</label>
            <input type="number" class="form-control" placeholder="name@example.com" name="id_job" autocomplete="off"
                value="{{ $job->id }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Posisi</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="posisi" autocomplete="off"
                value="{{ $job->nama }}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="text" class="form-control" placeholder="name@example.com" name="email" autocomplete="off"
                value="{{ $user->email }}">
        </div>

        <input type="file" name="cv">
        <input type="file" name="ktp">
        <button type="submit" class="btn- btn-secondary">Kirim</button>
    </form>
</div>
@endsection