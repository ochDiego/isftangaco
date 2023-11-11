<div class="p-6">
    <p class="text-4xl font-bold text-center mb-4">Bienvenido, registra tu asistencia</p>

    <div>
        <div class="mb-4">
            <x-input wire:model="dni" type="text" class="w-full py-4 text-3xl font-bold" placeholder="Ingresa tu dni sin puntos" />

            <x-input-error for="dni" />
        </div>

        <div class="flex justify-evenly">
            <x-danger-button id="salida" wire:click="salida" wire:loading.attr="disabled" wire:target="salida" class="w-full disabled:opacity-25">
                SALIDA
            </x-danger-button>

            <x-button id="entrada" wire:click="entrada" wire:loading.attr="disabled" wire:target="entrada" class="w-full justify-center disabled:opacity-25">
                ENTRADA
            </x-button>
        </div>
    </div>
</div>
