<div class="pb-10 pr-10 pl-10">
    <h1 class="font-semibold text-2xl ml-1 mb-2">Painel de controle</h1>

    <div class="w-full flex py-10 px-5 gap-5 border rounded-lg bg-gray-50">
        <div class="w-[50%] flex flex-col gap-3 text-gray-600">
            <dt>Controle a poluição da água e confira o comportamento do sensor</dt>
            <div class="relative mb-6">
                <label for="turbidity-range-input" class="sr-only">Turbidez</label>
                <input id="turbidity-range-input" type="range" value="0" min="0" max="100"
                    class="border w-full h-2 bg-white rounded-lg appearance-none cursor-pointer dark:bg-white"
                    oninput="updateTurbidityValue(this.value)">
                <div class="absolute flex justify-between w-full -bottom-6">
                    <span class="text-sm text-gray-600 dark:text-gray-600">0%</span>
                    <span class="text-sm text-gray-600 dark:text-gray-600">50%</span>
                    <span class="text-sm text-gray-600 dark:text-gray-600">100%</span>
                </div>
            </div>
        </div>
        <div class="w-[50%] flex justify-center items-center gap-8">
            <div class="flex flex-col items-center justify-center">
                <dt id="water-quality" class="mb-2 text-5xl font-extrabold">LIMPA</dt>
                <dd class="text-gray-600 dark:text-gray-600">Classificação da água</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt id="sensor-value" class="mb-2 text-5xl font-extrabold">1024Ω</dt>
                <dd class="text-gray-600 dark:text-gray-600">Resistência</dd>
            </div>
        </div>
    </div>
</div>
