<div wire:init="loadPosts">
    @if (count($products))
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}">
                @foreach ($products as $product)
                    <li class="bg-white rounded-xl shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                        <article>
                            <a href="{{ route('products.show', $product) }}">
                            <figure title="Imagen {{ $product->name }}">
                                <img class="rounded-lg h-48 w-full object-cover object-center"
                                    src="{{ Storage::url($product->images->first()->url) }}" alt="{{ $product->name }} a granel y mayoreo">
                            </figure>
                            <div class="py-4 px-6">
                                <h2 title="producto" class="text-center text-xl">
                                    {{ Str::limit($product->name, 18) }}
                                </h2>
                                <p title="precio" class="text-center font-bold text-trueGray-700">$ {{ $product->price * 50}} M.N.</p>
                                <p title="medida" class="text-center text-trueGray-700">50 gramos</p>
                                <br>
                                <x-button color="semilla" title="ir a producto" class="w-full" onclick="add-cart-item, ['product' => $product]">
                                    Ver
                                </x-button>
                            </div>
                            </a>
                        </article>
                    </li>
                @endforeach
            </ul>
            <button title="Anterior" aria-label="Previous" class="glider-prev">«</button>
            <button title="Siguiente" aria-label="Next" class="glider-next">»</button>
        </div>
    @else
        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-gray-400"></div>
        </div>
    @endif
</div>
