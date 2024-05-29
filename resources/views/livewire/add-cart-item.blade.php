<div x-data>
    <p class="text-gray-300 mb-4">
        <span class="font-semibold text-small" href="https://schema.org/InStock">Disponible:</span><span itemprop="availability"> {{$quantity}}</span> Kg
    </p>
    <p class="text-sm text-gray-500">
        <strong class="text-xl text-semilla">$ {{$product->price * $qty}}</strong>
        Equivale a:
    </p>
    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button
                disabled
                x-bind:disabled="$wire.qty <= 50"
                wire:loading.attr="disabled"
                wire:target="decrement"
                wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-semilla font-bold">{{$qty}} gr</span>
            <x-jet-secondary-button
                x-bind:disabled="$wire.qty >= $wire.quantity"
                wire:loading.attr="disabled"
                wire:target="increment"
                wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button color="semilla"
                x-bind:disabled="$wire.qty > $wire.quantity"
                class="w-full"
                wire:click="addItem"
                wire:loading.attr="disabled"
                wire:target="addItem">
                Agregar
            </x-button>
        </div>
    </div>
</div>
