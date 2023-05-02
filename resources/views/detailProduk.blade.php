@extends('layout.navbar')

@section('content')
<style>
    .containerR {
        width: 600px;
        background-color: red;
        
    }
    .container {
        background-color: rebeccapurple
    }
</style>
<p style="margin-top: -20px; font-family: 'Poppins'; font-style: italic; font-weight: 300; font-size: 18px; line-height: 27px; color: rgba(0, 0, 0, 0.5)" class="text-center">insomniazero.com/detailProduk</p>

<div class="container text-center">
    <div class="containerR row text-center">
        <div class="col-lg-6"><img src="img/Discount Items/1.png" alt="" ></div>
        <div class="col-lg-6"><img src="img/Discount Items/1.png" alt=""></div>
    </div>
</div>

@endsection
