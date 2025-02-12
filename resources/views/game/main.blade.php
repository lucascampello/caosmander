@extends('layouts.app')

@section('content')
<body>
    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-9 cmp_bg-left border-start border-bottom border-dark border-3">
                <div class="row cmp_bg-plano pt-4">
                    <div class="col-2 mt-5 text-center">
                        <div class="col-12">
                            <p class="cmp_bolder cmp_txt_large cmp_white">DADO</p>
                        </div>
                        <div class="col-12 cmp_link">
                            <img src="{{asset('assets/images/faces_dado/0.png')}}" onclick="rolar_dado()" class="img-fluid" id="dado">
                        </div>
                    </div>
                    <div class="col-7 text-center mt-1">
                        <img src="{{asset('assets/images/planos/eletrochoque.png')}}" alt="Crescimento Desenfreado" class="img-fluid">
                        <p class="mt-2 cmp_white cmp_txt_big">Eletrochoque</p>
                    </div>
                    <div class="col-3">
                        <img src="{{asset('assets/images/status_planos/eletrochoque.png')}}" alt="Crescimento Desenfreado" class="img-fluid">
                    </div>
                </div>
                <div class="row bg-light border-bottom border-dark border-3">
                    <div class="col-12">
                        <p class="fs-5 m-0 p-0"> <spam class="fw-bold mx-2">Sugerido por:</spam> Gabriel Lumertz</p>  
                    </div>
                </div>                
                <div class="row mt-3">
                    <div class="col-12 mx-1">
                        <img src="{{asset('assets/images/interface/barra_ok.png')}}" class="img-fluid">
                        <spam class="fs-5 fw-bold cmp_texto_barra">
                            Causa 1 ponto de dano em cada criatura de seus oponentes.
                        </spam>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mx-1">
                        <img src="{{asset('assets/images/interface/barra_erro.png')}}" class="img-fluid">
                        <spam class="fs-5 fw-bold cmp_texto_barra">
                            Causa 1 ponto de dano em cada criatura que você controla. Causa 1 ponto de dano em cada criatura que você controla. Causa 1 ponto de dano em cada criatura que você controla.
                        </spam>
                    </div>
                </div>
            </div>
            <div class="col-3 cmp_bg-right py-4 px-0 border-start border-dark border-3">
                <div class="row mb-4 text-center">
                    <div class="col-10 m-0">
                        <p class="cmp_bolder cmp_colapso cmp_txt_large mb-0">COLAPSO</p>
                        <p class="cmp_bolder cmp_colapso cmp_txt_large">PLANAR</p>
                        <img src="{{asset('assets/images/numeros/0.png')}}" class="img-fluid">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-10 m-0">
                        <a href="{{route('ativar_plano')}}" class="text-decoration-none">
                            <button class="w-100 cmp_btn cmp_btn_ativar cmd_btn_lateral">ATIVAR PLANO</button>
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-10 m-0">
                        <a href="{{route('estressar_plano')}}" class="text-decoration-none">
                            <button class="w-100 cmp_btn cmp_btn_estressar cmd_btn_lateral">ESTRESSAR PLANO</button>
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-10 m-0">
                        <a href="{{route('mudar_plano')}}" class="text-decoration-none">
                            <button class="w-100 cmp_btn cmp_btn_mudar cmd_btn_lateral">MUDAR PLANO</button>
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-10 m-0">
                        <a href="{{route('colapsar_plano')}}" class="text-decoration-none">
                            <button class="w-100 cmp_btn cmp_btn_disabled cmd_btn_lateral">COLAPSAR PLANO</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function rolar_dado() {
            var dado = document.getElementById('dado');
            var numero = 0;
            var numero_anterior = 0;
            for (let i = 0; i < 5; i++) {
                setTimeout(() => {
                    numero = Math.floor(Math.random() * 6) + 1;
                    if (numero == numero_anterior) {
                        numero = Math.floor(Math.random() * 6) + 1;
                    }
                    dado.src = '/assets/images/faces_dado/' + numero + '.png';
                    numero_anterior = numero;
                }, i * 400);
            }            
            numero = Math.floor(Math.random() * 6) + 1; // Resultado Final do Dado
            if (numero == numero_anterior)
                numero = Math.floor(Math.random() * 6) + 1;
            dado.src = '/assets/images/faces_dado/' + numero + '.png';
        }
    </script>
@endsection