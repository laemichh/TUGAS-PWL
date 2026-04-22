<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    @include('components.boostrap')

    <style>
        body {
            min-height: 100vh;
            background: #eef1f7;
        }

        
        .neo-card {
            background: #eef1f7;
            border: none;
            border-radius: 20px;
            box-shadow: 8px 8px 16px #c8ced9,
                        -8px -8px 16px #ffffff;
            padding: 25px;
        }

        
        .form-title {
            color: #555;
            font-weight: 600;
            margin-bottom: 25px;
        }

        
        label {
            color: #555;
            font-weight: 500;
            margin-bottom: 6px;
        }

        
        .form-control {
            background: #eef1f7 !important;
            border: none !important;
            border-radius: 12px !important;
            padding: 12px 16px !important;
            box-shadow: inset 4px 4px 8px #c8ced9,
                        inset -4px -4px 8px #ffffff;
        }

        .form-control:focus {
            outline: none !important;
            box-shadow: inset 2px 2px 5px #c8ced9,
                        inset -2px -2px 5px #ffffff !important;
        }

        .form-control::placeholder {
            color: #9aa3b2;
        }

        
        .btn {
            border-radius: 12px !important;
            border: none !important;
            background: #eef1f7 !important;
            color: #555 !important;
            font-weight: 700;
            box-shadow: 5px 5px 10px #c8ced9,
                        -5px -5px 10px #ffffff;
            padding: 10px 18px;
            transition: all 0.2s ease;
            width: 100%;
        }

        .btn:hover {
            box-shadow: inset 3px 3px 6px #c8ced9,
                        inset -3px -3px 6px #ffffff;
        }

        .btn:active {
            box-shadow: inset 4px 4px 8px #c8ced9,
                        inset -4px -4px 8px #ffffff;
        }

        .btn-primary {
            color: #2d6cdf !important;
        }

        .btn-danger {
            color: #e74c3c !important;
        }

        .mb-3 {
            margin-bottom: 18px !important;
        }
    </style>
</head>

<body>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div class="card neo-card" style="width: 30rem;">
        <div class="card-body">

            <h5 class="text-center form-title">Edit Mahasiswa</h5>

            <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'update'], [$mahasiswa->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                </div>

                <div class="mb-3">
                    <label>Nomor Induk Mahasiswa</label>
                    <input type="text" name="NIM" class="form-control" value="{{ $mahasiswa->NIM }}">
                </div>

                <div class="mb-3">
                    <label>Nomor Induk Dosen Nasional</label>
                    <input type="text" name="NIDN" class="form-control" value="{{ $mahasiswa->NIDN }}">
                </div>

                <div class="mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value="{{ $mahasiswa->tanggal_lahir }}">
                </div>

                <div class="mb-3">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $mahasiswa->tempat_lahir }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                </div>

                
                <div class="d-flex gap-3 mt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <button class="btn btn-danger" type="reset">Clear</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>