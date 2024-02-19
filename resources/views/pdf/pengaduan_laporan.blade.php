<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		.container{
			width: 100%;
		}

		.kecamatan-item {
			width: 100%;
			border-bottom: 1px solid gray;
			padding-top: 8px;
			padding-bottom: 8px;
		}

		.kecamatan-title {
			font-size: 20px;
			font-weight: 700;
		}

		.list_kelurahan {
			padding-left: 12px;
		}

		.kelurahan {
			font-size: 16px;
		}

		.tema-item{
			padding-left: 12px;
		}

		.tanggal {
			float: right
		}

	</style>
		<center>
			<h1>Laporan Pengaduan</h1>
		</center>

		
		<div class="container">
			<div class="tanggal">
				{{$startDate}} - {{$endDate}} 
			</div>
		<div class="kecamatan-item">
					<div class="kecamatan-title">{{$laporan['kecamatan']}}</div>
					<div class="list_kelurahan">
						@forelse($laporan['desa'] as $desa)
							<div>
								<div class="kelurahan">{{$desa['nama_desa']}}:</div>
								<div class="tema">
									@forelse($desa['tema'] as $tema)
									 <div class="tema-item">{{$tema->tema}} ({{$tema->total}})</div>
									 @empty
									 <div class="tema-item">Tidak ada data</div>
									@endforelse
								</div>
							</div>
						@empty
							<div class="kelurahan">Tidak ada data</div>
						@endforelse
					</div>
				</div>
		</div>
 
</body>
</html>