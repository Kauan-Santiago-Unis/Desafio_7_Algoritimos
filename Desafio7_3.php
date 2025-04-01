<?php
    $contasBancarias = [
        ["numeroConta" => 11111, "cpf" => "111.111.111-11", "saldo" => 1000],
        ["numeroConta" => 22222, "cpf" => "222.222.222-22", "saldo" => 2000],
        ["numeroConta" => 33333, "cpf" => "333.333.333-33", "saldo" => 3000],
    ];

    $contaEncontrada = false;

    do {
        $numeroConta = (int) readline("Informe o número da conta: ");

        foreach ($contasBancarias as $conta) {
            if ($conta["numeroConta"] == $numeroConta) {
                echo "Número da Conta: " . $conta["numeroConta"] . PHP_EOL;
                echo "CPF: " . $conta["cpf"] . PHP_EOL;
                echo "Saldo: " . $conta["saldo"] . PHP_EOL;

                $contaEncontrada = true;
            }
        }
    } while ($contaEncontrada == false);


