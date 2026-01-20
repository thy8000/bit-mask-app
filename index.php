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
                <h2 class="text-2xl font-bold">O que é o BitMask ?</h2>

                <p class="font-secondary">Uma bitmask é uma técnica que usa um único número inteiro para representar um conjunto de valores booleanos (verdadeiro/falso). Cada bit dentro desse número funciona como um interruptor individual.</p>

                <p class="font-secondary">Em vez de usar várias variáveis, você usa apenas uma. Cada posição binária ($2^0, 2^1, 2^2...$) representa uma opção diferente.</p>

                <p class="font-secondary">Você usa lógica binária (AND, OR, XOR) para "ligar", "desligar" ou "checar" o estado de uma opção.</p>
            </div>

            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Representação</h2>

                <ul class="font-secondary list-disc px-4">
                    <li><b>0001:</b> (1): Opção A ativa.</li>
                    <li><b>0010:</b> (2): Opção B ativa.</li>
                    <li><b>0011:</b> (3): Opções A e B ativas simultaneamente.</li>
                </ul>
            </div>

            <div class="flex flex-col gap-4">
                <h2 class="text-2xl font-bold">Vantagens principais</h2>

                <ul class="font-secondary list-disc px-4">
                    <li><b>Performance extrema:</b> A CPU processa essas operações instantaneamente, pois é a linguagem nativa do hardware.</li>
                    <li><b>Compactação:</b> Você pode guardar 32 ou 64 estados diferentes em uma única variável simples.</li>
                    <li><b>Simplicidade de armazenamento:</b> É muito fácil salvar um único número em um banco de dados ou enviar via API do que uma estrutura complexa de objetos.</li>
                </ul>
            </div>
        </section>
    </main>

    <script src="./src/script.js"></script>
</body>

</html>