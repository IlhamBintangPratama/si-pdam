<head>
    <title>Surat Pengaduan</title>
    <meta charset="utf-8">
</head>
<body>
    
    <div class="table-responsive">
        <div>
            <h3 style="text-align: center; padding-bottom: 2%">Surat Pengaduan</h3>
            <span style="float: right; text-align: left; margin-bottom: 5em;">Brebes, {{ $pengaduan->created_at->format('d-m-Y') }}</span>
            
        </div>
        <p >Saya yang bertanda tangan di bawah ini :</p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>ID Pengaduan</td>
                    <td style="letter-spacing: 10px; padding-left: 30px">:</td>
                    @php
                        $code = $pengaduan->id_pelanggan;
                        $urutan = (int)substr($code, 1,3);
                        $urutan++;
                        $huruf = 'NP';
                        $kd = $huruf . sprintf("%03s",$urutan);
                        // echo $code;
                    @endphp
                    <td>{{ $kd }}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td style="letter-spacing: 10px; padding-left: 30px">:</td>
                    <td>{{ $pengaduan->nama }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="letter-spacing: 10px; padding-left: 30px">:</td>
                    <td>{{ $pengaduan->alamat }}</td>
                </tr>
                
                
            </tbody>
        </table>
        <div style="margin-top: 20px">
        @php
            $image = public_path('galeri/pengaduan/'.$pengaduan->foto); 
        @endphp
        <img src="data:image/png;base64,
            <?php echo base64_encode(file_get_contents($image)); ?>" width="160px" alt="">
        </div>
        <div>
            <p style="width: 20%">Isi Keluhan</p>
            <p>{{ $pengaduan->keluhan }}</p>
        </div>
    </div>
</body>