<?php

namespace App;

class Mago implements Personagem {
    public function atacar() {
        echo "\nMago lançando uma bola de fogo!\n";
    }

    public function defender() {
        echo "\nMago se defendendo com uma barreira mágica!\n";
    }

    public function usarRecurso($recursoInformado) {
        echo "\nMago usando o recurso '$recursoInformado'\n";
    }
}