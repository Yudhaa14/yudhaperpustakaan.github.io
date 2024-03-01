@extends('nav')

@section('content')
<div class="container" style="margin-top: 100px"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Pengguna') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center my-3">
                        <img class="w-full" src="/images.png" width="100px" alt="">
                    </div>
                    <form action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" value="{{ auth()->user()->alamat }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
