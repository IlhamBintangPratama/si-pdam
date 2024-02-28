@extends('layouts.master')
@section('content')
    <!-- Begin Page Content -->
    <!-- {{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg> --}} -->
    @if ($message = Session::get('created'))
        <div class="alert alert-success ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif
    @if ($message = Session::get('updated'))
        <div class="alert alert-success ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif
    @if ($message = Session::get('deleted'))
        <div class="alert alert-success ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif
    {{-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19" crossorigin="anonymous"></script> --}}

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Rekapitulasi Laporan Pengaduan</h1>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="btn btn-success btn-sm mb-4" type="button" data-toggle="collapse" data-target="#filterData"
                    aria-expanded="false" aria-controls="filterData">
                    <i class="fa fa-filter" aria-hidden="true"></i> Filter
                </button>
                <div class="collapse" id="filterData">
                    <form action="{{ route('rekap.report') }}" method="GET">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="start_date">Tanggal Mulai:</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="end_date">Tanggal Akhir:</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Jumlah Laporan</th>
                                <th>Cetak</th>

                            </tr>
                        </thead>

                        <tbody class="list">
                            @foreach ($laporan as $no => $item)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td class="budget">
                                        {{ $item->nama_kecamatan }}
                                    </td>
                                    <td class="budget">
                                        {{ $item->pengaduan->count() }}
                                    </td>
                                    <td>
                                        <a href="{{ route('cetak-laporan-pengaduan', ['id' => $item->id, 'start_date' => $startDate, 'end_date' => $endDate]) }}"
                                            target="_blank">
                                            Cetak
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('footer.script')
    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
    </script>
@endsection
