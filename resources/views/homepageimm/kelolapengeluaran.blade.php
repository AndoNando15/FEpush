@extends('layouts.app-imm')
@section('title', 'Homepage')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/homepageimm/kelolapengeluaran.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
@endsection
@section('content')


<body>

    <div class="container" style="padding-top: 120px"> 
       <a href="homepage"> <h4 class=" d-flex align-items-center"><strong style="font-size: 40px;"><</strong>   Kelola Pengeluaran</h4></a>
        <span class="biaya">Detail Biaya</span>
    </div>

    <div class="container">
        <table class="table tabel mt-3 text-center ">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Pengirim</th>
                    <th>Bank Asal</th>
                    <th>Bank Tujuan</th>
                    <th>Jumlah (Rp)</th>
                </tr>
            </thead>
            <tbody>
           
                <tr>
          <td>2024/05/25</td>
          <td>Impact Mate</td>
          <td>Bank ABC</td>
          <td>Bank BRI</td>
          <td>40.000.000</td>
                </tr>
          
            </tbody>
        </table>
    </div>

<div class="container my-4 d-flex justify-content-between align-items-center">
    <span class="biaya">Biaya investasi proyek</span>
    <input type="text" class="form-control" placeholder="Cari nama proyek anda">

</div>


    <div class="container ">
        <table class="table tabel mt-3 text-center ">
            <thead>
                <tr>
                    <th>Nama Proyek</th>
                    <th>Rancangan Biaya Grant</th>
                    <th>Detail penggunaan biaya</th>
                
                </tr>
            </thead>
            <tbody>
           
                <tr>
          <td>Proyek Ramah Anak</td>
          <td>Rp 5.000.000</td>
          <td><a href="detailbiaya" style="text-decoration: underline">cek disini</a></td>
   
                </tr>

          
            </tbody>
        </table>
    </div>


   

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
     
</body>

@endsection