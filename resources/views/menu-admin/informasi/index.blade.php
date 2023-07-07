@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
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
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Informasi</h1>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                <a href="#" class="btn btn-primary btn-icon-split" style="float: right;">
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
                                <th style="width: 10%;">No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody class="list">
                            @foreach($informasi as $no => $item)
                            <tr>
                            <td>{{ $informasi->firstItem()+$no}}</td>
                            <th scope="row">
                                <div class="media align-items-center">
                                <div class="media-body">
                                    <span class="name mb-0 text-sm">{{ $item->judul }}</span>
                                </div>
                                </div>
                            </th>
                            <td class="budget">
                                {{ $item->foto }}
                            </td>
                            
                            <td>  
                                <a href="{{ url('/menu-admin/informasi/'.$item->id.'/show') }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/menu-admin/informasi/'.$item->id.'/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
                    form.action = `{{url('/menu-admin/informasi/${id}/delete')}}`
                }
                </script>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                        {{ $informasi->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection