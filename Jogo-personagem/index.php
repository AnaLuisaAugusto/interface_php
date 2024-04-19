<?php

require 'vendor/autoload.php';

use App\Guerreiro;
use App\Mago;
use App\Arqueiro;

//instanciando objetos
    $guerreiro = new Guerreiro();
    $mago = new Mago();
    $arqueiro = new Arqueiro();

//chamando funções

    //personagem Guerreiro atacando
    $guerreiro->atacar();

    //personagem Mago defendendo e usando recurso
    $mago->defender();
    $mago->usarRecurso("Poção de Cura");

    //personagem Arqueiro atacando e usando recurso
    $arqueiro->atacar();
    $arqueiro->usarRecurso("Reabastecer Flechas");

    //personagem Guerreiro defendendo
    $guerreiro->defender();