@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    {{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg> --}}
    @if ($message = Session::get('created'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
    </div>
    @endif
    @if ($message = Session::get('updated'))
    <div class="alert alert-success ml-4 mr-4" role="alert">
        {{$message}}
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
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script> --}}

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                <form action="{{ url('search-pelanggan')}}" id="navbar-search-main" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group py-2" style="margin-left: -1em">
                        <div class="form-outline pr-2">
                            <input id="search-focus" type="text" name="search" placeholder="Search..." class="form-control" />
                            {{-- <label class="form-label" for="form1" style="margin-top: -10%">Search</label> --}}
                        </div>
                        <button type="submit" class="btn btn-primary" style="height: 37px">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <a href="{{url('menu-admin/pelanggan/create')}}" class="btn btn-primary btn-icon-split" style="float: right;">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody class="list">
                            @foreach($pelanggan as $no => $item)
                            <tr>
                            <td>{{ $pelanggan->firstItem()+$no}}</td>
                            <th scope="row">
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->nama }}</span>
                                </div>
                                </div>
                            </th>
                            <td class="budget">
                                {{ $item->no_telp }}
                            </td>
                            <td class="budget">
                                {{ $item->alamat }}
                            </td>
                            <td class="budget">
                                {{ $item->email }}
                            </td>
                            <td>
                                <a href="{{ url('/menu-admin/pelanggan/'.$item->id.'/show') }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/menu-admin/pelanggan/'.$item->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger" data-toggle="modal" id="smallButton" data-target="#smallModal" onclick="return openModal({{$item->id}})"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id='form_id' class="w-full" method="Post" 
                        {{-- action="{{url('k_pendidik/'.$s->id.'/destroy')}}" --}}
                                >
                                    {{ csrf_field() }} 
                                <div>
                                    Apakah anda yakin?
                                </div>
                                <div class="modal-footer mt-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Iya</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <script src="{{asset('js')}}/jquery.min.js"></script> --}}
                
                <script>
                    setTimeout(function() {
                    $('.alert').fadeOut('slow');}, 3000
                    );
                    $(document).on('click', '#smallButton', function(event) {
                    event.preventDefault();
                    let href = $(this).attr('data-attr');
                    $.ajax({
                        url: href
                        , beforeSend: function() {
                            $('#loader').show();
                        },
                        // return the result
                        success: function(result) {
                            $('#smallModal').modal("show");
                            $('#smallBody').html(result).show();
                        }
                        , complete: function() {
                            $('#loader').hide();
                        }
                        , error: function(jqXHR, testStatus, error) {
                            console.log(error);
                            alert("Page " + href + " cannot open. Error:" + error);
                            $('#loader').hide();
                        }
                        , timeout: 8000
                    })
                });
                    function openModal(id){
                    var form = document.querySelector('#form_id');
                    form.action = `{{url('/menu-admin/pelanggan/${id}/delete')}}`
                }
                </script>
                
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                        {{ $pelanggan->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection