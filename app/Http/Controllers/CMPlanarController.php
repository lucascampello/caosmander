<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CMPlanarController extends Controller
{
    private int $contadorPlanar;
    //private Plano $planoAtual;    
    function index() : View
    {
        $this->LoadGame();
        return view('game.main', ['contadorPlanar' => $this->contadorPlanar]);
    }

    function ativar() : View
    {
        $this->LoadGame();
        $this->contadorPlanar++;
        $this->SaveGame();
        return view('game.main', ['contadorPlanar' => $this->contadorPlanar]);
    }

    public function colapsar() : View {
        $this->LoadGame();
        $this->mudar(true);
        $this->SaveGame();
        return view('game.main',['contadorPlanar' => $this->contadorPlanar]);
    }

    public function estressar() : View{
        $this->LoadGame();
        $this->contadorPlanar++;
        $this->SaveGame();
        return view('game.main',['contadorPlanar' => $this->contadorPlanar]);
    }

    public function mudar($colapsou = false) : View{
        $this->LoadGame();
        if(!$colapsou && $this->contadorPlanar > 1)
            $this->contadorPlanar--;
        else
            $this->contadorPlanar = 0;
        
        $this->SaveGame();
        return view('game.main',['contadorPlanar' => $this->contadorPlanar]);
    }

    private function SaveGame() {
        session(['contadorPlanar' => $this->contadorPlanar]);
    }

    private function LoadGame() {
        $this->contadorPlanar = (session('contadorPlanar') == null)? 0 : session('contadorPlanar');
    }
}
