<?php

class Pessoa {
    public string $nome;
    public string $email;
    public string $nascimento;
    public string $endereço;
    public string $ip;

    public function idade(): int
    {
        $hoje = new DateTime('now');
        $dataNascimento = new DateTime($this->nascimento);
        $diferenca = $dataNascimento->diff($hoje);
        return $diferenca->y;
    }

    public function fraude(): bool
    {
        return $this->ip == '12345678';
    }

    public function textoEFraude(): string
    {
        return $this->fraude() ? 'É fraude' : 'Não é fraude';
    }
    
    public function validarEmail()
    {
        $email = 'patrickbarbosa.dp@gmail.com';

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo 'E-mail válido!';
        } else {
            echo 'E-mail inválido!';
        }
    }

}


//comentario especial
// $pessoa1 = new Pessoa();

// $pessoa1->nome = 'Renato';
// $pessoa1->nascimento = '2005-06-23';
// $pessoa1->ip = '12345678';
// $pessoa1->email = "renatonacimentogamail.com";
// echo $pessoa1->nome . ' tem ' . $pessoa1->idade() . ' anos<br>';
// echo $pessoa1->textoEFraude();
// $pessoa1->validarEmail();

// echo '<br><br>----------------------<br>';
// $pessoa2 = new Pessoa();
// $pessoa2->nome = 'Patrick';
// $pessoa2->nascimento = '1996-08-15';
// $pessoa2->ip = '1212121321';
// $pessoa2->email = 'patrickbarbosa.dp@gmail.com';
// echo $pessoa2->nome . ' tem ' . $pessoa2->idade() . ' anos<br>';
// echo $pessoa2->textoEFraude();
// $pessoa2->validarEmail();

class Veiculo 
{
    public int $velocidade = 0;

    public function acelerar()
    {
        $this->velocidade += 1;
    }

    public function desacelerar()
    {
        $this->velocidade -= 1;
    }
}

class Carro extends Veiculo {
    public int $portas;
}

class Barco extends Veiculo {

    public function atracar()
    {
        $this->velocidade = 0;
    }

    #[Override]
    public function acelerar()
    {
        $this->velocidade += 2;
    }
}

class Aviao extends Veiculo
{
    #[Override]
    public function acelerar()
    {
        $this->velocidade += 100;
    }
}

$fusca = new Carro();

$fusca->acelerar();

