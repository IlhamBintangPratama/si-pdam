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
                            <label for="no_rekening_air">No Rekening Air</label>
                            <select name="no_rekening_air" id="no_rekening_air" class="form-control @error('no_rekening_air')
                            is-invalid
                            @enderror" onchange="getData(this)">
                                <option value="" selected disabled>- pilih -</option>
                                @foreach ($pelanggan as $data)
                                <option {{$tagihan->no_rekening_air == $data->no_rekening_air ? 'selected' :''}} value="{{$data->no_rekening_air}}">{{$data->no_rekening_air}}</option>
                                @endforeach
                            </select>
                            @error('no_rekening_air')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input class="form-control" id="nama" name="nama" type="text" value="{{ old('name', $tagihan->nama) }}" placeholder="Masukan nama pelanggan" hidden>
                            <input class="form-control" id="nama-1" name="nama-1" type="text" value="{{ old('name', $tagihan->nama) }}" placeholder="Masukan nama pelanggan" disabled>
                                @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" value="{{ old('name', $tagihan->alamat) }}" placeholder="Masukan alamat" hidden>
                            <input class="form-control" name="alamat-1" id="alamat-1" type="text" value="{{ old('name', $tagihan->alamat) }}" placeholder="Masukan alamat" disabled>
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
                        <div class="mb-3">
                            <label for="status">Status Pembayaran</label>
                            <select name="status" id="status" class="form-control @error('status')
                            is-invalid
                            @enderror" onchange="getData(this)">
                                <option value="" selected disabled>- pilih -</option>
                                <option value="1">Pelunasan</option>
                            </select>
                        </div>
                        
                        <div style="margin-top: 17%;">
                            <button type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                            <button type="button" id="back" class="btn btn-secondary w-100">Kembali</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script>
                    document.getElementById('back').onclick = function(){
                        location.href = "{{ url('menu-admin/tagihan') }}";
                    }
                    function getData(pelanggan){
                        $.ajax({
                            url : 'listdata/' + $('#no_rekening_air').val(),
                            type : 'GET',
                            dataType : 'json',
                            success : function(data){
                                let newData = data.find((item) => item.id == pelanggan.value)

                                $('#nama').val(newData.nama).show(),
                                $('#nama-1').val(newData.nama).show(),
                                $('#alamat').val(newData.alamat).show(),
                                $('#alamat-1').val(newData.alamat).show()
                            }
                        })
                    }
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection