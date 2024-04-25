@extends('layouts.app')

@section('content')

<style>
    .card {
        width: 250px;
        /* Ubah lebar card sesuai kebutuhan */
        margin-bottom: 20px;
        /* Atur margin bawah card */
    }

    .card .card-img-top {
        height: 200px;
        /* Ubah tinggi gambar sesuai kebutuhan */
    }

    .card-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        /* Mengatur lebar card */
        gap: 10px;
        /* Mengatur jarak antara card */
    }

    .header-title {
        text-align: center;
        /* Menempatkan teks ke tengah */
        margin-top: 20px;
        /* Menambahkan ruang atas */
    }

</style>
    <section class="content">
        <div class="container-fluid">
            <div class="row card-wrapper">
                @foreach ($albums as $album)
                <a href="{{route('albums.show' , $album->id)}}" class="col-md-4 text-dark">
                    <div class="card card-primary shadow">
                        <div class="card-body p-0">
                            <img src="/storage/album_covers/{{$album->cover_image}}"
                                style="height: 300px; width: 100%; object-fit: cover;" class="card-img-top"
                                alt="Album Image">
                            <div class="card-body">
                                <h5 class="card-title">{{$album->name}}</h5>
                                <p class="card-text">{{$album->description}}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
