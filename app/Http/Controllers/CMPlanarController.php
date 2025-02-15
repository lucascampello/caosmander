<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CMPlanarController extends Controller
{
    private int $contadorPlanar;
    private array $planos;
    private array $planoAtual;
    private int $idPlanoAtual;

    public function __construct()
    {
        $this->planos = require("../public/assets/database.php");
        $this->LoadGame();
    }

    public function __destruct()
    {
        $this->SaveGame();
    }

    //private Plano $planoAtual;    
    function index() : View
    {
        return view('game.main', [
            'contadorPlanar' => $this->contadorPlanar,
            'planoAtual' => $this->planoAtual,
        ]);
    }

    function ativar() : View
    {
        $this->contadorPlanar++;
//        $this->SaveGame();
        return view('game.main', [
            'contadorPlanar' => $this->contadorPlanar,
            'planoAtual' => $this->planoAtual,
        ]);
    }

    public function colapsar() : View {
        $this->mudar(true);
//        $this->SaveGame();
        return view('game.main',[
            'contadorPlanar' => $this->contadorPlanar,
            'planoAtual' => $this->planoAtual,
        ]);
    }

    public function estressar() : View{
        $this->contadorPlanar++;
//        $this->SaveGame();
        return view('game.main',[
            'contadorPlanar' => $this->contadorPlanar,
            'planoAtual' => $this->planoAtual,
        ]);
    }

    public function mudar($colapsou = false) : View{
        $this->planoAtual = $this->ChangePlano();
        if(!$colapsou && $this->contadorPlanar > 1)
            $this->contadorPlanar--;
        else
            $this->contadorPlanar = 0;
        
        return view('game.main',[
            'contadorPlanar' => $this->contadorPlanar,
            'planoAtual' => $this->planoAtual,
        ]);
    }

    private function ChangePlano() : array
    {
        $idPlano = $this->idPlanoAtual;
        do{
            $idPlano = rand(0, count($this->planos) - 1);
        }while($idPlano == $this->idPlanoAtual);

        return $this->planos[$idPlano];
    }

    private function SaveGame() {
        session([
                    'contadorPlanar' => $this->contadorPlanar,
                    'idPlanoAtual' => $this->idPlanoAtual,
                    'planoAtual' => $this->planoAtual
                ]);
    }

    private function LoadGame() {
        $this->contadorPlanar = (session('contadorPlanar') == null)? 0 : session('contadorPlanar');
        $this->idPlanoAtual = (session('idPlanoAtual') == null)? 0 : session('idPlanoAtual');
        $this->planoAtual = (session('planoAtual') == null)? $this->ChangePlano() : session('planoAtual');
    }
}
