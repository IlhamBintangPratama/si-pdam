@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Data Profil</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/profil/'.$profil->id.'/update') }}" name="post" enctype="multipart/form-data">
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
                            <label for="profil">Profil Perusahaan</label>
                            <textarea class="form-control @error('profil')
                                is-invalid
                                @enderror" id="profil" name="profil" style="resize: none; white-space: pre-line;" rows="4" cols="20" placeholder="Masukan profil perusahaan">
                                {{ old('name', $textareaProfil) }}
                            </textarea>
                            @error('profil')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="facebook">Facebook</label>
                            <input class="form-control @error('facebook')
                                is-invalid
                                @enderror" id="facebook" value="{{ old('name', $profil->facebook) }}" name="facebook" type="text"  placeholder="Masukan link facebook">
                                @error('facebook')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="instagram">Instagram</label>
                            <input class="form-control @error('instagram')
                                is-invalid
                                @enderror" id="instagram" value="{{ old('name', $profil->instagram) }}" name="instagram" type="text"  placeholder="Masukan link instagram">
                                @error('instagram')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_telp">No Telp</label>
                            <input class="form-control @error('no_telp')
                                is-invalid
                                @enderror" id="no_telp" value="{{ old('name', $profil->no_telp) }}" name="no_telp" type="number"  placeholder="Masukan nomor telepon">
                                @error('no_telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input class="form-control @error('email')
                            is-invalid
                            @enderror" id="email" value="{{ old('name', $profil->email) }}" name="email" type="email" placeholder="Masukan alamat email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control @error('alamat')
                                is-invalid
                                @enderror" id="alamat" value="{{ old('name', $profil->alamat) }}" name="alamat" type="text"  placeholder="Masukan alamat perusahaan">
                                @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="visi">Visi</label>
                            <textarea class="form-control @error('visi')
                                is-invalid
                                @enderror" id="visi" name="visi" style="resize: none; white-space: pre-line;" rows="4" cols="20" type="text">
                                {{ old('name', $profil->visi) }}
                            </textarea>
                                @error('visi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="misi">Misi</label>
                            <textarea class="form-control @error('misi')
                                is-invalid
                                @enderror" id="misi" name="misi" type="text" style="resize: none; white-space: pre-line;" rows="4" cols="20" >
                                {{ old('name', $profil->misi) }}
                            </textarea>
                            @error('misi')
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
                        location.href = "{{ url('menu-admin/profil') }}";
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection