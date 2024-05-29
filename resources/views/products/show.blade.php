<x-guest-layout>
    <div class="container py-8" x-data>
        <div itemscope itemtype="https://schema.org/Product">
            <meta itemprop="datePublished" content="created_at">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 py-4">
                <div>
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($product->images as $image)
                                <li data-thumb=" {{ Storage::url($image->url) }}">
                                    <img itemprop="image" src="{{ Storage::url($image->url) }}" alt="{{$product->name}} a granel y mayoreo" itemprop="contentUrl"/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <link itemprop="additionalType" href="{{ route('products.show', $product) }}">
                    <h1 class="text-2xl font-semibold text-gray-700" itemprop="name">{{$product->name}}</h1>
                    <div class="flex">
                        <p class="text-trueGray-700">Marca: <a class="capitalize hover:text-semilla" itemprop="brand" itemscope itemtype="http://schema.org/Brand" itemprop="name">{{ $product->brand->name }}</a></p>
                    </div>
                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                            <p class="text-small text-gray-500 my-4" itemprop="priceCurrency" content="MXN"> <strong class="text-semilla text-xl" itemprop="price" content="{{ $product->price * 50}}">${{ $product->price * 50}} M.N.</strong> Cada 50 gramos</p>
                        <div class="bg-white rounded-xl shadow-lg mb-6">
                            <div class="p-4 flex items-center">
                                <span class="flex items-center justify-center h-12 w-12 rounded-full bg-semilla">
                                    <i class="fas fa-truck text-sm text-white"></i>
                                </span>
                                <div class="ml-4">
                                    <p title="Zona de entrega" class="text-lg font-semibold text-semilla">🛵📦 Envío solo en Las Américas Ecatepec y jardínes.</p>
                                    <p title="Fecha de entrega y precio valido"><strong class="text-mushugranel">Recibe:</strong><span itemprop="pricevaliduntil"> {{ Date::now()->addDay(.40)->locale('es')->format('l j F') }}</span></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="-mt-10 text-gray-700">
                            <h2 class="font-bold text-lg" >Descripción</h2>
                            <h3 itemprop="description">{!!$product->description!!}</h3>
                        </div>
                        <br>
                        <div class="bg-white rounded-2xl shadow px-6 py-4 mt-4">
                            <div class="flex justify-between items-center">
                                <!-- @if ($product->subcategory->size)
                                    @livewire('add-cart-item-size', ['product' => $product])
                                @elseif($product->subcategory->color)
                                    @livewire('add-cart-item-color', ['product' => $product])
                                @else
                                    
                                @endif-->
                                @livewire('add-cart-item', ['product' => $product])
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-2xl shadow px-6 py-4 mt-4">
                        <div class="flex justify-between">
                            <a href="https://wa.me/525516965907?text=Hola%20necesito%20cotizar%20en%20mayoreo%20al%20mejor%20precio.">
                                <p class="text-center font-bold text-lg text-mushugranel"> 📝 Cotiza <strong class="text-semilla">aquí</strong> en mayoreo</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
</x-guest-layout>
