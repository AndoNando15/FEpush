@extends('layouts.app-2fa')
@section('title', 'Pendaftaran Perusahaan')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/imm/pendaftaranperusahaan.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
@section('content')

<body>

   


    <div class="register-container">
        <h2>Daftarkan Perusahaan Anda</h2>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="register-form row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="profile">Profil Perusahaan</label>
                        <input type="text" class="form-control" id="profile" name="profile" placeholder="Masukkan link disini" required>
                        <small class="form-text text-muted">Dalam bentuk website, media sosial, atau lainnya</small>
                    </div>
                    <div class="form-group">
                        <label for="nama_pic">Nama PIC</label>
                        <input type="text" class="form-control" id="nama_pic" name="nama_pic" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi_pic">Posisi PIC</label>
                        <input type="text" class="form-control" id="posisi_pic" name="posisi_pic" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon PIC</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Isi disini" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="posisi_pic">Negara</label>
                        <input type="text" class="form-control" id="posisi_pic" name="negara" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi_pic">Provinsi</label>
                        <input type="text" class="form-control" id="posisi_pic" name="provinsi" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi_pic">Kabupaten</label>
                        <input type="text" class="form-control" id="posisi_pic" name="kabupaten" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_karyawan">Jumlah Karyawan</label>
                        <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe Perusahaan</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Isi disini" required>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" id="simpanBtn">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/imm/pendaftaran.js') }}"></script>

</body>
@endsection