@extends('layouts.main')
@section('content')
<div class="container">
    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-2 ">
        <div class="row">
            <h1>Job yang sudah di Apply</h1>
            @foreach ($akun as $data )

            <div class="card mt-4">
                <div class="card-body ">
                    <h5 class="card-title">{{ $data->users->name }}</h5>
                    <p class="card-text"> {{ $data->kantor->nama }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection