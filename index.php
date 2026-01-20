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

                <div class="flex flex-col gap-2 font-secondary">
                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Moscow: GMT +3
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Paris: GMT +2
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Berlin: GMT +2
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Brussels: GMT +2
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Amsterdam: GMT +2
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Rome: GMT +2
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        London: GMT +1
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Dublin: GMT +1
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        New York: GMT -4
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Washington, DC: GMT -4
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        St. Louis: GMT -5
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Los Angeles: GMT -7
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Tokyo: GMT +9
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Beijing: GMT +8
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Ho Chi Mihn City: GMT +7
                    </label>

                    <label class="flex gap-4 items-center">
                        <input type="checkbox" id="Moscow" name="moscow" />
                        Mumbai: GMT +5
                    </label>
                </div>
            </div>

            <div class="flex flex-col gap-8 bg-white p-4 rounded"></div>
        </section>
    </main>

    <script src="./src/script.js"></script>
</body>

</html>