@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data Pengaduan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/pengaduan/'.$pengaduan->id.'/update') }}" name="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- <fieldset > --}}
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <div class="mb-3">
                            <label for="id_pelanggan">ID Pelanggan</label>
                            <input class="form-control @error('id_pelanggan')
                                is-invalid
                                @enderror" id="id_pelanggan" value="{{ old('name', $pengaduan->id_pelanggan) }}" name="id_pelanggan" type="text" disabled>
                                <input class="form-control @error('id_pelanggan')
                                is-invalid
                                @enderror" id="id_pelanggan" value="{{ old('name', $pengaduan->id_pelanggan) }}" name="id_pelanggan" type="text" hidden>
                            @error('id_pelanggan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control @error('nama')
                                is-invalid
                                @enderror" id="nama" value="{{ old('name', $pengaduan->nama) }}" name="nama" type="text"  placeholder="Masukan nomor telepon">
                                @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control @error('alamat')
                                is-invalid
                                @enderror" id="alamat" value="{{ old('name', $pengaduan->alamat) }}" name="alamat" type="alamat"  placeholder="Masukan alamat">
                                @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto">Foto</label>
                            <input class="form-control @error('foto')
                                is-invalid
                                @enderror" id="foto" value="{{ old('name', $pengaduan->foto) }}" name="foto" type="file" >
                                <img src="/galeri/pengaduan/{{ $pengaduan->foto }}" width="150px">
                                @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="keluhan">Keluhan</label>
                            <textarea class="form-control @error('keluhan')
                                is-invalid
                                @enderror" id="keluhan" style="resize: none; white-space: pre-line;" rows="4" cols="20" name="keluhan" type="text">
                                {{ old('name', $pengaduan->keluhan) }}
                            </textarea>
                                @error('keluhan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        {{-- <div class="mb-3">
                            <label for="password">Password</label>
                            <input class="form-control @error('password')
                            is-invalid
                            @enderror" id="password" value="{{old('password')}}" name="password" type="password" >
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div> --}}
                        <div>
                            <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                            <button type="button" id="back" class="btn btn-secondary w-100">Kembali</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/pengaduan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection