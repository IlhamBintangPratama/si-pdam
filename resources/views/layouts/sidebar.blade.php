<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">SI PDAM Brebes</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/pelanggan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Pelanggan</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/pengaduan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Pengaduan</span>
            @php
                use App\Models\Pengaduan;
                $data = Pengaduan::select('status')->where('status', 0)->count();
            @endphp
            @if ($data)
                <span class="badge badge-danger ml-2">{{ $data }}</span>
            @endif
        </a>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/informasi') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/tagihan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Tagihan Pelanggan</span></a>
    </li>
    <li class="nav-item">
        @php
            use App\Models\Pasangbaru;
            $pasangbaru = Pasangbaru::select('id')->first('id');
            // dd(echo $pasangbaru);
        @endphp
        {{-- @foreach ($pasangbaru as $key => $data) --}}
        <a class="nav-link" href="{{ url('menu-admin/pasangbaru/' . $pasangbaru->id . '/edit') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pemasangan Sambung Baru</span></a>
        {{-- @endforeach --}}
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/broadcast/pesan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Broadcast</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('menu-admin/laporan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rekapitulasi Laporan Pengaduan</span></a>
    </li>
    {{-- <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
<!-- End of Sidebar -->
