<?php
$senhaBanco = 12345;

do {
    $senhaUsuario = (int)readline("Insira a senha: ");

    if ($senhaBanco != $senhaUsuario) {
        echo "Senha incorreta" . PHP_EOL;
    }
} while($senhaUsuario != $senhaBanco);

echo "Senha correta";