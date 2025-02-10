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
        <div class="row">
            <div class="col-12">
                <p class="cmp_txt cmd_txt_regra"> 
                    <spam class="cmp_red cmp_bolder">1º</spam> - O Jogador ativo pode uma vez por turno, como se fosse um feitiço, rolar um dado D6.
                </p>
                <p class="cmp_txt cmd_txt_regra"> 
                    <spam class="cmp_red cmp_bolder">2º</spam> - De acordo com o resultado no dado pode-se resultar nas seguintes ações no sistema:
                </p>
                <div class="row mb-2">
                    <div class="col-2">
                        <button class="cmp_btn cmp_btn_ativar">ATIVAR PLANO</button>
                    </div>
                    <div class="col-10 cmp_txt cmd_txt_regra">O efeito do plano é feito e então é incrementado em 1 o <spam class="cmp_colapso cmp_bolder">contador de colapso planar.</spam></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <button class="cmp_btn cmp_btn_estressar">ESTRESSAR PLANO</button>
                    </div>
                    <div class="col-10 cmp_txt cmd_txt_regra">Não há efeito algum no plano, mas sua presença causou distúrbio no plano e alteração no <spam class="cmp_colapso cmp_bolder">contador de colapso planar.</spam></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <button class="cmp_btn cmp_btn_mudar">MUDAR PLANO</button>
                    </div>
                    <div class="col-10 cmp_txt cmd_txt_regra">O jogador transplanou e causou a mudança do plano atual, isto causa um decrescimo no <spam class="cmp_colapso cmp_bolder">contador de colapso planar.</spam></div>
                </div>
                <div class="row mb-2">
                    <div class="col-2">
                        <button class="cmp_btn cmp_btn_colapsar">COLAPSAR PLANO</button>
                    </div>
                    <div class="col-10 cmp_txt cmd_txt_regra">Você gerou estragos neste plano e cobrança chegou!</div>
                </div>
            </div>
            <p class="cmp_txt cmd_txt_regra"> 
                <spam class="cmp_red cmp_bolder">3º</spam> - Caso o jogador prefia não rolar um dado em seu turno, na estala final há uma ação de <spam class="cmp_estressar cmp_bolder">Estressar plano</span>.
            </p>
            <p class="cmp_txt cmd_txt_regra"> 
                <spam class="cmp_red cmp_bolder">4º</spam> - Na etapa de limpeza, última ação do turno do jogador ativo, caso o <spam class="cmp_colapso cmp_bolder">contador de colapso planar.</spam> for <spam class="cmp_colapso cmp_bolder">igual ou superior a 5</spam> uma ação de <spam class="cmp_colapso cmp_bolder">Colapsar Plano</spam> é realizada.
            </p>
            <p class="cmp_txt cmd_txt_regra"> 
                <spam class="cmp_red cmp_bolder">5º</spam> - O efeito de <spam class="cmp_green cmp_bolder">Ativar Plano</spam> e <spam class="cmp_colapso cmp_bolder">Colapsar Plano</spam> são desencadeadas, podendo ser anuladas ou redirecionadas com efeitos que interajam com habilidadeds desencadeadas.
            </p>
        </div>
@endsection