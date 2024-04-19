<?php

namespace App;

class Arqueiro implements Personagem {
    public function atacar() {
        echo "\nArqueiro disparando uma flecha!\n";
    }

    public function defender() {
        echo "\nArqueiro se escondendo atrás de uma cobertura!\n";
    }

    public function usarRecurso($recursoInformado) {
        echo "\nArqueiro usando o recurso '$recursoInformado'\n";
    }
}