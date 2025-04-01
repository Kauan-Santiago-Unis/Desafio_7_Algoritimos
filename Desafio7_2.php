<?php
$qtdPatinhos = (int) readline("Informe a quantiadade de patinhos que foram passear: ");
$qtdPatinhosInicial = $qtdPatinhos;

while ($qtdPatinhos > 1) {
    echo "$qtdPatinhos patinhos foram passear" . PHP_EOL;
    echo "Além das montanhas para brincar" . PHP_EOL;
    echo "A mamãe gritou: Quack, quack, quack, quack" . PHP_EOL;
    echo "Mas só " . ($qtdPatinhos - 1) . " patinhos voltaram de lá" . PHP_EOL;
    echo PHP_EOL;

    $qtdPatinhos--;
}

echo "Um patinho foi passear" . PHP_EOL;
echo "Além das montanhas para brincar" . PHP_EOL;
echo "A mamãe gritou: Quack, quack, quack, quack" . PHP_EOL;
echo "Mas nenhum patinho voltou de lá" . PHP_EOL;
echo PHP_EOL;

echo "Poxa, a mamãe patinha ficou tão triste naquele dia" . PHP_EOL;
echo "Aonde será que estavam os seus filhotinhos?" . PHP_EOL;
echo "Mas essa história vai ter um final feliz" . PHP_EOL;
echo "Sabe por quê?" . PHP_EOL;
echo PHP_EOL;

echo "A mamãe patinha foi procurar" . PHP_EOL;
echo "Além das montanhas na beira do mar" . PHP_EOL;
echo "A mamãe gritou: Quack, quack, quack, quack" . PHP_EOL;
echo "E os $qtdPatinhosInicial patinhos voltaram de lá" . PHP_EOL;
echo PHP_EOL;
