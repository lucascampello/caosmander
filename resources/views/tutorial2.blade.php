@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/background.css')}}">
@endsection

@section('content')
<body>
    <div class="container">
        <div class="row mt-2 mb-3">
            <div class="col-4">
                <img src="{{asset('assets/images/regras.png')}}" alt="Regras" class="img-fluid">
            </div>
            <div class="col-1"></div>
            <div class="col-2 text-end">
                <a href="{{route('tutorial2')}}">
                    <button type="button" class="cmp_btn cmp_btn_tutorial">+TUTORIAL</button>
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-2 text-end">
                <a href="{{route('welcome')}}">
                    <button type="button" class="cmp_btn cmp_btn_jogar">VOLTAR</button>
                </a>
            </div>
            <div class="col-2 text-end">
                <a href="{{route('game')}}">
                    <button type="button" class="cmp_btn cmp_btn_jogar">JOGAR</button>
                </a>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <img src="{{asset('assets/images/tutorial_2.jpg')}}" alt="Imagem da Tela Principal" class="img-fluid">
            </div>
        </div>
@endsection