@extends('layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger ml-4 mr-4" role="alert">
            {{ $message }}
        </div>
    @endif

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pelanggan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pelanggan_count }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-circle fa-2x text-gray-00"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pengaduan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pengaduan_count }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-00"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->

            {{-- chart --}}
            <div class="col-xl-12 col-md-12 mb-12">
                <div class="card shadow h-100 py-2">
                    <div class="card-header">
                        <form action="{{ route('dashboard.index') }}" method="GET" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="kecamatan">Kecamatan:</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control" required>
                                        <option value="">Pilih Kecamatan</option>
                                        {{-- Loop through kecamatan data to populate options --}}
                                        @foreach ($kecamatan as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="start_date">Tanggal Mulai:</label>
                                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="end_date">Tanggal Akhir:</label>
                                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Filter</button>
                            <a href="{{ route('dashboard.index') }}" class="btn btn-danger mt-3">Reset</a>
                        </form>
                    </div>
                    <div class="card-body">
                        @if ($pengaduan_chart)
                            {!! $pengaduan_chart->container() !!}
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection()
{{-- @section('footer.script')

@endsection --}}
@push('js')
    <script src="{{ $pengaduan_chart->cdn() }}"></script>

    {{ $pengaduan_chart->script() }}

    <script>
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);

        $(document).ready(function() {
            var kecamatan = "{{ request()->input('kecamatan') }}";
            var startDate = "{{ request()->input('start_date') }}";
            var endDate = "{{ request()->input('end_date') }}";

            $('#kecamatan').val(kecamatan);
            $('#start_date').val(startDate);
            $('#end_date').val(endDate);
        });
    </script>
@endpush
