@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    @if ($message = Session::get('created'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Respon Pengaduan Client</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data pengaduan</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/pengaduan/'.$pengaduan->id.'/resWhatsapp') }}" name="post" enctype="multipart/form-data">
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
                            <label for="no_telp">No Telp</label>
                            <input class="form-control @error('no_telp')
                                is-invalid
                                @enderror" id="no_telp" value="{{ old('name', $pengaduan->pelanggan->no_telp) }}" hidden name="no_telp" type="text">
                                <input class="form-control @error('no_telp')
                                is-invalid
                                @enderror" id="no_telp" value="{{ old('name', $pengaduan->pelanggan->no_telp) }}" disabled name="no_telp" type="text">
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control @error('pesan')
                                is-invalid
                                @enderror" id="pesan" name="pesan" type="text" style="resize: none; white-space: pre-line;" rows="5" cols="20">
                                {{ old('name', $pengaduan->pesan) }}
                            </textarea>
                                @error('pesan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <div style="margin-top: 22%;">
                            <button type="submit" class="btn btn-primary w-100 mb-2">Kirim Pesan</button>
                            <button type="button" id="back" class="btn btn-secondary w-100">Kembali</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/pengaduan') }}";
                    }
                    setTimeout(function() {
                    $('.alert').fadeOut('slow');}, 3000
                    );
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection