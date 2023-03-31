@extends('template.dashboard.layout.main')
@section('container')
    <h1>Sisda Kategori</h1>

    <div class="container">
        <div class="row">
            @foreach ($kategoris as $kategori)
            <div class="col-md-3 mb-5">
                <a href="posts/categories/{{ $kategori->nama }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x400?{{ $kategori->nama }}" class="card-img " alt="$kategori->nama">
                    <div class="card-img-overlay d-flek align-items-center">
                      <h5 class="card-title text-center fs-3" style="background-color: rgba(250, 1, 1, 0.7)">{{ $kategori->name }}</h5>
                     </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>        
 @endsection