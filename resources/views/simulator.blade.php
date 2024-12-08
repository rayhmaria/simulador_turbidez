<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Simulador') }}
        </h2>
    </x-slot>

    <x-turbidimeter />
    <x-painel-control></x-painel-control>

    <x-slot name="specificScripts">
        <script>
            function updateWaterQualityValue(resistorSensorValue) {
                const waterQualityDisplay = document.getElementById("water-quality");

                if (resistorSensorValue >= 700) {
                    waterQualityDisplay.textContent = "LIMPA";
                } else {
                    waterQualityDisplay.textContent = "SUJA";
                }
            }

            function updateResistorSensorValue(rangeInputValue) {
                // Calcula o valor do sensor com base na relação inversamente proporcional
                const sensorValue = 1024 - Math.round(rangeInputValue * (1024 / 100));

                // Atualiza o valor visual do sensor (supondo que haja um elemento para exibição)
                const sensorDisplay = document.getElementById("sensor-value");
                if (sensorDisplay) {
                    sensorDisplay.textContent = `${sensorValue}Ω`;
                }

                return sensorValue;
            }

            function updateTurbidityValue(rangeInputValue) {
                const pollutionLevels = {
                    'LOW': {
                        color: '173, 216, 230', // Azul claro (água limpa)
                    },
                    'MEDIUM': {
                        color: '143, 188, 143', // Verde suave (transição para água suja)
                    },
                    'HIGH': {
                        color: '85, 107, 47', // Verde escuro/marrom (água suja)
                    }
                };

                const containerWithWater = document.getElementById("container-with-water");
                const decimalRepresentation = rangeInputValue / 100;

                let bgForWatherContainer = '';
                if (rangeInputValue >= 0 && rangeInputValue <= 30) {
                    bgForWatherContainer = pollutionLevels["LOW"].color;
                } else if (rangeInputValue <= 60) {
                    bgForWatherContainer = pollutionLevels["MEDIUM"].color;
                } else {
                    bgForWatherContainer = pollutionLevels["HIGH"].color;
                }

                // Atualiza a cor de fundo com opacidade
                containerWithWater.style.backgroundColor = `rgb(${bgForWatherContainer})`;

                // Atualiza o valor do sensor usando a relação inversa
                const resistorSensorValue = updateResistorSensorValue(rangeInputValue);
                updateWaterQualityValue(resistorSensorValue);
            }
        </script>
    </x-slot>
</x-app-layout>
