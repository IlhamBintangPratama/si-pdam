@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    @if ($message = Session::get('created'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    @if (isset($updated))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$updated ?? ""}}
    </div>
    @endif
    @if ($message = Session::get('deleted'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pasang Baru</h1>
        <br>

        <!-- DataTales Example -->
        
        <div class="card shadow">
            <div class="card-header py-4">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Tambah Data pasangbaru</h6> --}}
                

                <form method="post" action="{{ url('menu-admin/pasangbaru/'.$pasang_baru->id.'/update') }}" name="post" enctype="multipart/form-data">
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
                            <label for="persyaratan">Persyaratan</label>
                            <textarea class="ckeditor form-control @error('persyaratan')
                                is-invalid
                                @enderror" id="persyaratan" value="{{old('persyaratan')}}" name="persyaratan" type="text"  placeholder="Masukan persyaratan">
                                {{ old('name', $pasang_baru->persyaratan) }}
                            </textarea>
                            @error('persyaratan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        
                        </div>
                        <div class="mb-3">
                            <label for="harga_pasang">Harga Pasang</label>
                            <textarea class="ckeditor form-control @error('harga_pasang')
                                is-invalid
                                @enderror" id="harga_pasang" value="{{old('harga_pasang')}}" name="harga_pasang" type="text"  placeholder="Masukan harga pasang">
                                {{ old('name', $pasang_baru->harga_pasang) }}
                            </textarea>
                                
                            @error('harga_pasang')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                          
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-100 mb-2">Publish</button>
                        </div>
                    {{-- </fieldset> --}}
                </form>
                <script src="{{asset('js')}}/jquery.min.js"></script>
                <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('.ckeditor').ckeditor();
                    });
                    setTimeout(function() {
                    $('.alert').fadeOut('slow');}, 3000
                    );
                </script>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection