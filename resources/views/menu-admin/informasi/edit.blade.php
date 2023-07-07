@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data Informasi</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data informasi</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/informasi/'.$informasi->id.'/update') }}" name="post" enctype="multipart/form-data">
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
                            <label for="judul">Judul</label>
                            <input class="form-control @error('judul')
                                is-invalid
                                @enderror" id="judul" value="{{ old('name', $informasi->judul) }}" name="judul" type="text"  placeholder="Masukan judul informasi">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="isi_informasi">Isi Informasi</label>
                            <textarea class="form-control @error('isi_informasi')
                                is-invalid
                                @enderror" id="isi_informasi" name="isi_informasi" type="text"  placeholder="Masukan isi informasi">
                                {{ old('name', $informasi->isi_informasi) }}
                            </textarea>
                                @error('isi_informasi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto">Foto</label>
                            <input class="form-control @error('foto')
                                is-invalid
                                @enderror" id="foto" value="{{ old('name', $informasi->foto) }}" name="foto" type="file" >
                                <img src="/galeri/informasi/{{ $informasi->foto }}" width="150px">
                                @error('foto')
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
                        location.href = "{{ url('menu-admin/informasi') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection