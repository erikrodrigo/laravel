<div>
    <div class="bg-white rounded-lg shadow-lg mb-6 text-center">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 title="Categoría" class="font-semibold text-gray-700">{{$category->name}}</h1>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <aside class="bg-white rounded-lg shadow-lg mb-8 py-4 px-6 text-center">
            <p title="Subcategorías" class="font-semibold text-semilla text-center mb-2">Subcategorías:</p>
            <ul class="text-lg divide-y-4 divide-gray-50">
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm">
                        <a title="Subcategoría" class="cursor-pointer hover:text-semilla capitalize {{ $subcategoria == $subcategory->slug ? 'text-semilla font-semibold' : '' }}"
                            wire:click="$set('subcategoria', '{{$subcategory->slug}}')">{{$subcategory->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <p title="Marcas" class="font-semibold text-center mt-4 mb-2">Marcas:</p>
            <ul class="text-lg divide-y-4 divide-gray-50">
                @foreach ($category->brands as $brand)
                    <li class="py-2 text-sm">
                        <a title="Marca" class="cursor-pointer hover:text-semilla capitalize {{ $marca == $brand->name ? 'text-semilla font-semibold' : ''}}"
                            wire:click="$set('marca', '{{$brand->name}}')">
                            {{$brand->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <x-button title="Eliminar filtro" class="mt-4" wire:click="limpiar">
                Eliminar filtros
            </x-button>
        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <li class="bg-white rounded-lg shadow">
                            <article>
                                <a href="{{ route('products.show', $product) }}">
                                    <figure>
                                        <img class="rounded-lg h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                    </figure>
                                    <div class="py-4 px-6">
                                        <h2 title="producto" class="text-center text-xl">
                                            {{ Str::limit($product->name, 18) }}
                                        </h2>
                                        <p title="precio" class="text-center font-bold text-trueGray-700">$ {{ $product->price * 50 }} M.N.</p>
                                        <p title="medida" class="text-center text-trueGray-700">50 gramos</p>
                                        <br>
                                        <x-button color="semilla" title="ir a producto" class="w-full">
                                        Ver
                                        </x-button>
                                    </div>
                                </a>
                            </article>
                        </li>
                    @empty
                        <li class="md:col-span-2 lg:col-span-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">🤔 ¡ups!</strong>
                                <span class="block sm:inline">No existe semilla con ese filtro.</span>
                            </div>
                        </li>
                    @endforelse
                </ul>
            @else
                <ul>
                    @forelse ($products as $product)
                        <x-product-list :product="$product" />
                    @empty
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">mensaje!</strong>
                            <span class="block sm:inline">No existe semilla con este filtro.</span>
                        </div>
                    @endforelse
                </ul>
            @endif
            <div class="mt-4">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
