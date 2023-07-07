@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data Tagihan Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/tagihan/'.$tagihan->id.'/update') }}" name="post" enctype="multipart/form-data">
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
                            <label for="no_pelanggan">No Pelanggan</label>
                            <input class="form-control @error('no_pelanggan')
                                is-invalid
                                @enderror" id="no_pelanggan" value="{{ old('name', $tagihan->no_pelanggan) }}" name="no_pelanggan" type="number"  placeholder="Masukan nomor pelanggan">
                                @error('no_pelanggan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input class="form-control @error('nama')
                                is-invalid
                                @enderror" id="nama" value="{{ old('name', $tagihan->nama) }}" name="nama" type="text"  placeholder="Masukan nama pelanggan">
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
                                @enderror" id="alamat" value="{{ old('name', $tagihan->alamat) }}" name="alamat" type="text"  placeholder="Masukan alamat">
                                @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_tagihan">Jumlah Tagihan</label>
                            <input class="form-control @error('jumlah_tagihan')
                            is-invalid
                            @enderror" id="jumlah_tagihan" value="{{ old('name', $tagihan->jumlah_tagihan) }}" name="jumlah_tagihan" type="number" placeholder="Masukan jumlah tagihan">
                            @error('jumlah_tagihan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                            <button type="button" id="back" class="btn btn-secondary w-100">Kembali</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/tagihan') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection