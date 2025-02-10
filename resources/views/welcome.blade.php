@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/background.css')}}">
@endsection

@section('content')
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="cmp_box d-flex justify-content-center align-items-center">
        <div id="container-fluid">
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{asset('assets/images/abertura.png')}}" alt="Logo" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <img src="{{asset('assets/images/CaosManderPlanar.png')}}" alt="CaosMander Planar" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5 d-flex justify-content-center align-items-center">
                <div class="col-2"></div>
                <div class="col-3">
                    <a href="{{route('tutorial')}}">
                        <button type="button" class="cmp_btn cmp_btn_tutorial">TUTORIAL</button>
                    </a>
                </div>
                <div class="col-2"></div>
                <div class="col-3">
                    <a href="{{route('game')}}">
                        <button type="button" class="cmp_btn cmp_btn_jogar">JOGAR</button>
                    </a>
                </div>
                <div class="col-2"></div>

            </div>
            <div class="row mt-2">
                <div class="col-12 text-left">
                    <p class="cmp_txt cmp_txt_inicial">CaosMander Planar é um conteúdo de fã não oficial permitido sob a política de conteúdo de fãs.</p>
                    <p class="cmp_txt cmp_txt_inicial">Não aprovado/apoiado pela Wizards of the Coast.</p>
                    <p class="cmp_txt cmp_txt_inicial">Porções de material usado são propriedade da Wizards of the Coast. ©Wizards of the Coast LLC.</p>
                </div>
            </div>
        </div>
    </div>
@endsection