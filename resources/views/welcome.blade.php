<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Seja Bem-vindo(a)!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="flex flex-col w-full min-h-[100vh]">
    <x-header></x-header>

    <main class="w-full min-h-[100vh] pt-[18vh] pb-10 flex flex-col items-center justify-center gap-10">
        <section id="about-project" class="w-[80%] h-[70vh] flex p-8 border rounded-xl bg-gray-50">
            <div class="w-[50%] flex flex-col gap-3 justify-center text-justify">
                <h1 class="text-3xl font-extrabold dark:text-gray-950">O que visa o projeto</h1>

                <p class="mb-3 text-gray-600">O Sistema de Monitoramento de Turbidez de Água visa ensinar, de maneira
                    prática e interativa, como a turbidez da água é medida por meio da variação na passagem de luz,
                    ajudando usuários a compreenderem conceitos básicos de monitoramento ambiental e funcionamento de
                    sensores.
                </p>
            </div>
            <div class="w-[50%] flex items-center justify-center">
                <img class="rounded-lg" src="{{ asset('img/turbidimeter.jpeg') }}" alt="turbidimeter" width="350">
            </div>
        </section>
        <section id="about-sensor" class="w-[80%] h-[70vh] flex flex-row-reverse p-8 border rounded-xl bg-gray-50">
            <div class="w-[50%] flex flex-col gap-3 justify-center text-justify  text-gray-600">
                <h1 class="text-3xl font-extrabold dark:text-gray-950">Aprenda como funciona o sensor</h1>

                <p>
                    O LDR é um resistor dependente da luminosidade. Ele serve para projetos onde é necessário detectar o
                    nível de luz ambiente, seja uma fotocélula para acionar uma lâmpada, detectar o nível de
                    luminosidade para uma câmera e outras várias funções que dependam do nível de luz.
                </p>

            </div>
            <div class="w-[50%] flex items-center justify-center">
                <img class="rounded-lg" src="{{ asset('img/ldr-sensor.png') }}" alt="turbidimeter" width="150">
            </div>
        </section>
        <section id="about-prototype" class="w-[80%] h-[70vh] flex p-8 border rounded-xl bg-gray-50">
            <div class="w-[50%] flex flex-col gap-3 justify-center text-justify  text-gray-600">
                <h1 class="text-3xl font-extrabold dark:text-gray-950">Entendendo o protótipo</h1>

                <p>
                    O protótipo do sensor de turbidez desenvolvido funciona com base na interação entre um emissor de
                    luz e um LDR (resistor dependente de luz), ambos conectados ao Arduino. O emissor de luz projeta um
                    feixe sobre a amostra de água, e o LDR detecta a intensidade da luz que atravessa o líquido. O
                    Arduino lê a variação da resistência do LDR, que é convertida em valores numéricos entre 0 e 1024.
                    Valores acima de 800 indicam que a água é limpa, enquanto valores abaixo desse limite indicam a
                    presença de partículas, classificando a água como suja. </p>

            </div>
            <div class="w-[50%] flex items-center justify-center">
                <img class="rounded-lg" src="{{ asset('img/prototype.png') }}" alt="turbidimeter" width="400">
            </div>
        </section>
    </main>
</body>

</html>
