<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    @include('components.boostrap')

    <style>
        body {
            min-height: 100vh;
            background: #eef1f7;
        }

        
        .neo-btn {
            background: #eef1f7 !important;
            border: none !important;
            color: #555 !important;
            font-weight: 700;
            border-radius: 18px;
            padding: 10px 16px;
            width: 90%;
            box-shadow: 5px 5px 10px #c8ced9,
                        -5px -5px 10px #ffffff;
            transition: 0.2s;
        }

        .neo-btn:hover {
            box-shadow: inset 3px 3px 6px #c8ced9,
                        inset -3px -3px 6px #ffffff;
        }

        .neo-btn:active {
            box-shadow: inset 4px 4px 8px #c8ced9,
                        inset -4px -4px 8px #ffffff;
        }

        
        .neo-table {
            width: 90%;
            margin: 20px auto;
            background: #eef1f7;
            border-radius: 26px; 
            overflow: hidden;
            box-shadow: 8px 8px 16px #c8ced9,
                        -8px -8px 16px #ffffff;
            padding: 10px;
        }

        
        .table {
            width: 100%;
            margin-bottom: 0 !important;
            border-collapse: separate;
            border-spacing: 0 12px;
            background: transparent !important;
            --bs-table-bg: transparent !important;
        }

        .table thead,
        .table tbody,
        .table tr,
        .table th,
        .table td {
            background: transparent !important;
            border: none !important;
        }

        
        th {
            font-weight: 600;
            color: #555;
            padding: 16px 18px !important;
            text-align: center;
        }

        
        td {
            color: #555;
            padding: 16px 18px !important;
            text-align: center;
            vertical-align: middle;
        }

        
        tbody tr {
            background: #eef1f7;
            box-shadow: inset 3px 3px 6px #c8ced9,
                        inset -3px -3px 6px #ffffff;
            transition: all 0.2s ease;

            border-radius: 18px; 
        }

        tbody tr:hover {
            box-shadow: 5px 5px 10px #c8ced9,
                        -5px -5px 10px #ffffff;
            transform: translateY(-2px);
        }

        
        tbody tr td:first-child {
            border-top-left-radius: 18px;
            border-bottom-left-radius: 18px;
        }

        tbody tr td:last-child {
            border-top-right-radius: 18px;
            border-bottom-right-radius: 18px;
        }

        
        .btn {
            border-radius: 14px !important;
            border: none !important;
            background: #eef1f7 !important;
            color: #555 !important;
            font-weight: 600;
            box-shadow: 4px 4px 8px #c8ced9,
                        -4px -4px 8px #ffffff;
            transition: 0.2s;
        }

        .btn:hover {
            box-shadow: inset 3px 3px 6px #c8ced9,
                        inset -3px -3px 6px #ffffff;
        }

        .btn-danger { color: #e74c3c !important; }
        .btn-warning { color: #d39e00 !important; }
        .btn-primary { color: #2d6cdf !important; }
    </style>
</head>

<body>

<div class="text-center mt-3">
    <a href="/">
        <button type="button" class="neo-btn">Kembali</button>
    </a>
</div>

<div class="neo-table">

    <table class="table">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>NIDN</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mahasiswa as $nomor => $m)
            <tr>
                <td>{{ $nomor + 1 }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->NIM }}</td>
                <td>{{ $m->NIDN }}</td>
                <td>{{ $m->tanggal_lahir }}</td>
                <td>{{ $m->tempat_lahir }}</td>
                <td>{{ $m->alamat }}</td>

                <td>
                    <div class="d-flex justify-content-center gap-2">

                        <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'destroy'], [$m->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>

                        <a href="{{ action([App\Http\Controllers\MahasiswaController::class, 'edit'], [$m->id]) }}">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </a>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

</body>
</html>