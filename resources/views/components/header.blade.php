@props(['propName'])

<header class="w-full h-[11vh] fixed z-20 flex items-center p-4 shadow-lg backdrop-blur-sm bg-white/40">
    <x-application-mark class="block h-9 w-auto" />

    <nav class="ml-10 flex items-center gap-4">
        <x-nav-link uri="#about-project">
            Sobre o projeto
        </x-nav-link>
        <x-nav-link uri="#about-sensor">
            Sobre o sensor
        </x-nav-link>
        <x-nav-link uri="#about-prototype">
            Sobre o protótipo
        </x-nav-link>
    </nav>

    <nav class="absolute right-4">
        @auth
            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                href="{{ route('simulator') }}">Simulador</a>
        @else
            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                href="{{ route('login') }}">Entrar</a>
            <a class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                href="{{ route('register') }}">Registrar-se</a>
        @endauth
    </nav>
</header>
