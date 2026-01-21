<?php

$cities_map = [
    'Moscow' => '3',
    'Paris'  => '2',
    'Berlin' => '2',
    'Brussels' => '2',
    'Amsterdam' => '2',
    'Rome' => '2',
    'London' => '1',
    'Dublin' => '1',
    'New York' => '-4',
    'Washington, DC' => '-4',
    'St. Louis' => '-5',
    'Los Angeles' => '-7',
    'Tokyo' => '9',
    'Beijing' => '8',
    'Ho Chi Mihn City' => '7',
    'Mumbai' => '5',
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit Mask App</title>
    <link rel="stylesheet" href="./src/style.min.css">
</head>

<body class="bg-neutral-200 font-primary">
    <main class="max-w-[998px] mx-auto flex flex-col gap-8">
        <section class="flex flex-col gap-4 bg-white p-4 rounded-lg mt-12 text-neutral-900">
            <div class="flex flex-col gap-4">
                <h2>O que é o BitMask ?</h2>

                <p>Uma bitmask é uma técnica que usa um único número inteiro para representar um conjunto de valores booleanos (verdadeiro/falso). Cada bit dentro desse número funciona como um interruptor individual.</p>

                <p>Em vez de usar várias variáveis, você usa apenas uma. Cada posição binária ($2^0, 2^1, 2^2...$) representa uma opção diferente.</p>

                <p>Você usa lógica binária (AND, OR, XOR) para "ligar", "desligar" ou "checar" o estado de uma opção.</p>
            </div>

            <div class="flex flex-col gap-4">
                <h2>Representação</h2>

                <ul>
                    <li><b>0001:</b> (1): Opção A ativa.</li>
                    <li><b>0010:</b> (2): Opção B ativa.</li>
                    <li><b>0011:</b> (3): Opções A e B ativas simultaneamente.</li>
                </ul>
            </div>

            <div class="flex flex-col gap-4">
                <h2>Vantagens principais</h2>

                <ul>
                    <li><b>Performance extrema:</b> A CPU processa essas operações instantaneamente, pois é a linguagem nativa do hardware.</li>
                    <li><b>Compactação:</b> Você pode guardar 32 ou 64 estados diferentes em uma única variável simples.</li>
                    <li><b>Simplicidade de armazenamento:</b> É muito fácil salvar um único número em um banco de dados ou enviar via API do que uma estrutura complexa de objetos.</li>
                </ul>
            </div>
        </section>

        <section class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-8 bg-white p-4 rounded">
                <h2>Cidades e Fuso horários</h2>

                <ul class="flex flex-col gap-2 font-secondary">
                    <?php

                    foreach ($cities_map as $city => $value) {

                    ?>
                        <li><?php printf("%s: GMT %s", $city, $value); ?></li>
                    <?php

                    }

                    ?>
                </ul>
            </div>

            <div class="flex flex-col gap-8 bg-white p-4 rounded">
                <form id="cityForm" class="flex flex-col items-start gap-4" method="POST" action="/">
                    <h2>Filtrar cidades por GMT</h2>

                    <input type="number" id="gmtInput" name="gmtInput" min="-12" max="12" class="border border-blue-500 rounded w-full">

                    <input type="submit" value="Enviar" class="bg-blue-500 text-md text-white py-1 px-4 rounded" />

                    <div class="flex flex-col gap-4">
                        <h2 class="!hidden block" id="cityFormH2">Cidades encontradas: </h2>
                        <ul id="list"></ul>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="./src/script.js"></script>
</body>

</html>