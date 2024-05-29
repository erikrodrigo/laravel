<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="mb-6">
                <div class="flex items-center mb-4">
                    <h2 title="Categoría" class="text-lg font-semibold text-gray-700">
                        <?php echo e($category->name); ?>

                    </h2>
                    <a href="<?php echo e(route('categories.show', $category)); ?>" title="Ver categoría" class="text-semilla hover:text-semilla hover:underline ml-2 font-semibold">Ver categoría</a>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('category-products', ['category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('0FT63mS')) {
    $componentId = $_instance->getRenderedChildComponentId('0FT63mS');
    $componentTag = $_instance->getRenderedChildComponentTagName('0FT63mS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0FT63mS');
} else {
    $response = \Livewire\Livewire::mount('category-products', ['category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('0FT63mS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php $__env->startPush('script'); ?>
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
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\mushugranel\resources\views/welcome.blade.php ENDPATH**/ ?>