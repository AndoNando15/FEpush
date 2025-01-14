@extends('layouts.app-imm')
@section('title', '')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/myproject/creatproject/matrixreport.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<style>
    .content-container h1 {
        background-color: #5940CB; /* Updated Purple color */
        color: #FFFFFF;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
    }
    .date-box {
        background-color: #ffffff;
        color: #000000;
        padding: 10px;
        text-align: center;
        margin: 20px 0;
        border-radius: 5px;
        width: 250px;
        margin-left: auto;
        margin-right: auto;
    }
    .content-box {
        border: 2px solid #D9D9D9;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .content-box h2 {
        background-color: #5940CB; /* Updated Purple color */
        color: #FFFFFF;
        padding: 10px;
        margin: -20px -20px 20px -20px;
        text-align: center;
        border-radius: 5px 5px 0 0;
    }
    .btn {
        width: 150px;
        height: 40px;
        margin: 10px 5px;
        font-weight: bold;
        border-radius: 5px;
        border: 2px solid #5940CB; /* Updated Purple color */
        text-align: center;
        line-height: 28px; /* Adjust line height for vertical centering */
    }
    .btn.export-btn {
        background-color: white;
        color: #5940CB; /* Updated Purple color */
    }
    .btn.export-btn:hover {
        background-color: #5940CB;
        color: white;
    }
    .btn.save-btn {
        background-color: #5940CB; /* Updated Purple color */
        color: white;
    }
    .btn.save-btn:hover {
        background-color: #4A235A;
    }
    .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    input{
        border: none;
    }

</style>
@endsection
@section('content')

<body>
 

<div class="container mt-5 content-container">
    <h1>Matrix : Premi Penghematan Klien</h1>
    <div class="date-box">
        <input type="date" name="" id="">
    </div>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
</div>

<div class="container mt-5 main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box">
                <h2>Evaluasi Matrix</h2>
                <textarea class=" w-100" name="" id="" cols="30" placeholder="Isi evaluasi matric anda disini" rows="10"></textarea>
            </div>
            <div class="content-box">
                <h2>Analysis Matrix</h2>
                <textarea class=" w-100" name="" id="" cols="30" placeholder="Isi Analysis matric anda disini" rows="10"></textarea>
            </div>
            <div class="btn-container">
                <button type="button" class="btn export-btn">Export</button>
                <a href="detail"><button type="button" class="btn save-btn">Save</button></a>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/myproject/impact.js') }}"></script>

</body>
@endsection
