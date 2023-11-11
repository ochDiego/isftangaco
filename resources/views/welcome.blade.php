<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            INSTITUTO SUPERIOR DE FORMACIÓN TÉCNICA ANGACO
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <p class="text-center mb-4 font-bold text-4xl" id="fecha">
                @php 
                    date('d/m/Y, h:l:s')
                @endphp
            </p>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('formulario')
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    setInterval(() => {
        let fecha = new Date();
        let fechaHora = fecha.toLocaleString();
        document.getElementById("fecha").textContent = fechaHora;
    }, 1000)


    document.addEventListener("keyup", function(event) {
        if (event.code == "ArrowLeft") {
            document.getElementById("salida").click()
        } else {
            if (event.code == "ArrowRight") {
                document.getElementById("entrada").click()
            } 
        }
    })
</script>

