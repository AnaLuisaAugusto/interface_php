<?php

namespace App;

interface Personagem {

    public function atacar();

    public function defender();
    
    public function usarRecurso($recurso);
}