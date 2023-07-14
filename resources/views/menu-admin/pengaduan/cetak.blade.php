<div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td style="width: 20%">ID Pengaduan</td>
                <td>{{ $pengaduan->id_pelanggan }}</td>
            </tr>
            <tr>
                <td style="width: 20%">Nama Lengkap</td>
                <td>{{ $pengaduan->nama }}</td>
            </tr>
            <tr>
                <td style="width: 20%">Alamat</td>
                <td>{{ $pengaduan->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 20%">Foto</td>
                <td><img src="/galeri/pengaduan/{{ $pengaduan->foto }}" width="150px"></td>
            </tr>
            <tr>
                <td style="width: 20%">Keluhan</td>
                <td>{{ $pengaduan->keluhan }}</td>
            </tr>
            
        </tbody>
    </table>
</div>