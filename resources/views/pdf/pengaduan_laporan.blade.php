<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Laporan Rekapitulasi Pengaduan Report</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 16px;
            text-align: left;
            font-size: 12px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 12px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center;">Laporan Rekapitulasi Pengaduan Report</h2>
    <h4 class="text-start">Kecamatan : {{ $kecamatan->nama_kecamatan }}</h4>
    <h4 class="text-start">Tanggal : {{ $startDate }} - {{ $endDate }}</h4>

    <table>
        <thead>
            <tr class="bg-blue">
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Desa</th>
                <th>Alamat</th>
                <th>Keluhan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $index => $item)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->desa->nama_desa }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->keluhan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
