<?php

namespace App;

class Guerreiro implements Personagem {
    public function atacar() {
        echo "\nGuerreiro atacando com uma espada!\n";
    }

    public function defender() {
        echo "\nGuerreiro levantando seu escudo!\n";
    }

    public function usarRecurso($recursoInformado) {
        echo "\nGuerreiro usando o recurso '$recursoInformado'\n";
    }
}