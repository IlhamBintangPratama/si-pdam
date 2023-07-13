@extends('layouts.master')

@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success ml-4 mr-4" role="alert">
    {{$message}}
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Pelanggan::count()}}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Pengaduan::count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-00"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        
    </div>

    <!-- Content Row -->
    <script>
        setTimeout(function() {
        $('.alert').fadeOut('slow');}, 3000
        );
    </script>
    

</div>
<!-- /.container-fluid -->
@endsection('content')
{{-- @section('footer.script')
    
@endsection --}}