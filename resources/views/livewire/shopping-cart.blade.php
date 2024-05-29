<div class="container py-8">
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-lg text-center font-semibold text-semilla">Carrito de compras</h1>
        <br>
        @if (Cart::count())
        <ul class="bg-white divide-y divide-gray-200">
            @foreach (Cart::content() as $item)
            <li class="flex p-2 border-b border-gray-200">
                <img class="h-20 w-30 object-cover mr-4" src="{{ $item->options->image }}" alt="{{$item->name}} a granel y mayoreo">
                <article class="flex-1">
                    <div class="flex">
                        <h2 class="text-lg text-semilla font-bold">{{$item->name}}</h2>
                        @if ($item->options->color)
                        <p>
                            Color: {{ __($item->options->color) }}
                        </p>
                        @endif
                        @if ($item->options->size)
                        <p class="mx-2">-</p>
                        <p>
                            {{ $item->options->size }}
                        </p>
                        @endif
                    </div>
                    <p>Cantidad:</p>
                    <div class="text-lg text-gray-700">
                        @if ($item->options->size)
                            @livewire('update-cart-item-size', ['rowId' => $item->rowId], key($item->rowId))
                        @elseif($item->options->color)
                            @livewire('update-cart-item-color', ['rowId' => $item->rowId], key($item->rowId))
                        @else
                            @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                        @endif
                    </div>
                    <div class="text-lg text-gray-700">
                        Precio: $ {{$item->price * $item->qty}} M.N.
                    </div>
                    <div>
                        <a title="Quitar producto" class="cursor-pointer text-gray-400 hover:text-semilla"
                            wire:click="delete('{{$item->rowId}}')"
                            wire:loading.class="text-semilla opacity-25"
                            wire:target="delete('{{$item->rowId}}')">
                            <i class="fas fa-trash"></i> Quitar producto
                        </a>
                    </div>
                </article>
            </li>
            @endforeach
        </ul>
        <div class="px-6 py-4">
            <a title="Vaciar carrito compra" class="text-lg cursor-pointer text-gray-400 hover:text-semilla mt-3 inline-block" wire:click="destroy">
                <i class="fas fa-trash"></i>
                Vaciar carrito
            </a>
        </div>
        @else
        <div class="px-6 py-4 flex flex-col items-center">
            <x-cart />
            <p class="text-lg text-gray-700 mt-4">Tu carrito esta vacio</p>
            <x-button-enlace href="/" class="mt-4 px-16">
                Ir al inicio
            </x-button-enlace>
        </div>
        @endif
    </div>
    @if (Cart::count())
    <div class="bg-white rounded-lg shadow-lg px-6 py-4 mt-4">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-semilla">
                    <span class="font-bold text-lg">Total:</span>
                    $ {{ Cart::subTotal() }}
                </p>
            </div>
            <div>
                <x-button-enlace href="{{ route('orders.create') }}">
                    Confirmar pedido
                </x-button-enlace>
            </div>
        </div>
    </div>
    @endif
</div>