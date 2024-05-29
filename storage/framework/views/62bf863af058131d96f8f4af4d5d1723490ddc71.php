<div wire:init="loadPosts">
    <?php if(count($products)): ?>
        <div class="glider-contain">
            <ul class="glider-<?php echo e($category->id); ?>">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bg-white rounded-xl shadow <?php echo e($loop->last ? '' : 'sm:mr-4'); ?>">
                        <article>
                            <a href="<?php echo e(route('products.show', $product)); ?>">
                            <figure title="Imagen <?php echo e($product->name); ?>">
                                <img class="rounded-lg h-48 w-full object-cover object-center"
                                    src="<?php echo e(Storage::url($product->images->first()->url)); ?>" alt="<?php echo e($product->name); ?> a granel y mayoreo">
                            </figure>
                            <div class="py-4 px-6">
                                <h2 title="producto" class="text-center text-xl">
                                    <?php echo e(Str::limit($product->name, 18)); ?>

                                </h2>
                                <p title="precio" class="text-center font-bold text-trueGray-700">$ <?php echo e($product->price * 50); ?> M.N.</p>
                                <p title="medida" class="text-center text-trueGray-700">50 gramos</p>
                                <br>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['color' => 'semilla','title' => 'ir a producto','class' => 'w-full','onclick' => 'add-cart-item, [\'product\' => $product]']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['color' => 'semilla','title' => 'ir a producto','class' => 'w-full','onclick' => 'add-cart-item, [\'product\' => $product]']); ?>
                                    Ver
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                            </a>
                        </article>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button title="Anterior" aria-label="Previous" class="glider-prev">«</button>
            <button title="Siguiente" aria-label="Next" class="glider-next">»</button>
        </div>
    <?php else: ?>
        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-gray-400"></div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\mushugranel\resources\views/livewire/category-products.blade.php ENDPATH**/ ?>