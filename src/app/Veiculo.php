<?php

abstract class Veiculo {

    private int $velocidade = 0;

    public function acelerar(): void
    {
        $this->velocidade += 1;
    }

    public function desacelerar(): void
    {
        $this->velocidade -= 1;
    }
}


