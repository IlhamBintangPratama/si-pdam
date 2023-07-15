@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <link rel="stylesheet" href="{{asset('vselect')}}/virtual-select.min.css">
    @if ($message = Session::get('created'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Broadcast</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data broadcast</h6> --}}
                

                <form method="post" action="{{ url('/menu-admin/broadcast/broadcastWhatsapp') }}" name="post" enctype="multipart/form-data">
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
                        <style>
                            .select{
                                max-width: 100%;
                                ;
                            }
                        </style>
                        <div class="mb-3">
                            <label for="no_telp">No Telp</label>
                            <select class="select" multiple data-search="true" data-silent-initial-value-set="false" id="selectpicker" name="no_telp">
                                <option value="" selected disabled>- pilih -</option>
                                @foreach ($pelanggan as $data)
                                {{-- @php
                                    $code = $data->id;
                                    $urutan = (int)substr($code, 1,3);
                                    $urutan++;
                                    $huruf = 'NP';
                                    $kd = $huruf . sprintf("%03s",$urutan);
                                    // echo $code;
                                @endphp --}}
                                <option type="checkbox" value="{{$data->no_telp}}">{{$data->no_telp}}</option>
                                @endforeach
                            </select>
                            @error('no_telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div class="mb-3">
                            <label for="pesan">Pesan Broadcast</label>
                            <textarea class="form-control @error('pesan')
                                is-invalid
                                @enderror" id="pesan" name="pesan" type="text" style="resize: none; white-space: pre-line;" rows="5" cols="20">
                                {{-- {{ old('name', $pelanggan->pesan) }} --}}
                            </textarea>
                                @error('pesan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <div style="margin-top: 22%;">
                            <button type="submit" class="btn btn-primary w-100 mb-2">Kirim Pesan Broadcast</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="{{asset('vselect')}}/virtual-select.min.js"></script>
                <script>
                    
                    setTimeout(function() {
                    $('.alert').fadeOut('slow');}, 3000
                    );
                    VirtualSelect.init({
                        ele: '#selectpicker'
                    })
                </script>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection