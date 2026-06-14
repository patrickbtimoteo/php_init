<?php

function idade(string $nascimento): int
{
    $hoje = new DateTime('now');
    $dataNascimento = new DateTime($nascimento);
    $diferenca = $dataNascimento->diff($hoje);
    return $diferenca->y;
}

function fraude(string $ip): bool
{
    return $ip == '12345678';
}

function textoEFraude(string $ip): string
{
    return fraude($ip) ? 'É fraude' : 'Não é fraude';
}

function validarEmail(string $email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'E-mail válido!';
    } else {
        echo 'E-mail inválido!';
    }
}


// Pessoa 1
$nome1 = 'Renato';
$nascimento1 = '2005-06-23';
$ip1 = '12345678';
$email1 = "renatonacimentogamail.com";

echo $nome1 . ' tem ' . idade($nascimento1) . ' anos<br>';
echo textoEFraude($ip1);
validarEmail($email1);

echo '<br><br>----------------------<br>';

// Pessoa 2
$nome2 = 'Patrick';
$nascimento2 = '1996-08-15';
$ip2 = '1212121321';
$email2 = 'patrickbarbosa.dp@gmail.com';

echo $nome2 . ' tem ' . idade($nascimento2) . ' anos<br>';
echo textoEFraude($ip2);
validarEmail($email2);