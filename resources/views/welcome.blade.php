<x-app-layout>
    <div class="container py-8">
        <figure title="Portada" class="mb-4">
            <img class="rounded-lg w-full h-80 object-cover object-center" src="/public/img/portada.png" alt="Mushugranel portada">
        </figure>
        <!--<div class="flexslider rounded-lg w-full h-80 object-cover object-center">
          <ul class="slides">
            <li>
              <img src="/public/img/mushugranel.png" />
            </li>
            <li>
              <img src="/public/img/mushugranel.png" />
            </li>
            <li>
              <img src="/public/img/mushugranel.png" />
            </li>
            <li>
              <img src="/public/img/mushugranel.png" />
            </li>
          </ul>
        </div>-->
        @foreach ($categories as $category)
            <section class="mb-6">
                <div class="flex items-center mb-4">
                    <h2 title="Categoría" class="text-lg font-semibold text-gray-700">
                        {{$category->name}}
                    </h2>
                    <a href="{{route('categories.show', $category)}}" title="Ver categoría" class="text-semilla hover:text-semilla hover:underline ml-2 font-semibold">Ver categoría</a>
                </div>
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>
    @push('script')
        <script>
            Livewire.on('glider', function(id){
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [
                        {
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
        </script>
        <script>// Can also be used with $(document).ready()
            $(document).ready(function() {
              $('.flexslider').flexslider({
                animation: "slide"
              });
            });
        </script>
    @endpush
</x-app-layout>
