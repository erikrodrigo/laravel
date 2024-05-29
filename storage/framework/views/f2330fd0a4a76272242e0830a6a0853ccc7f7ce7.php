<div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['class' => 'width:auto']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'width:auto']); ?>
         <?php $__env->slot('trigger', null, []); ?> 
            <span class="relative inline-block cursor-pointer">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.cart','data' => ['color' => 'white','size' => '30']]); ?>
<?php $component->withName('cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['color' => 'white','size' => '30']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if(Cart::count()): ?>
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-brand-an rounded-full"><?php echo e(Cart::count()); ?><br>gr</span>
                <?php else: ?>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-brand-an rounded-full"></span></span>
                <?php endif; ?>
            </span>
         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <ul>
                <?php $__empty_1 = true; $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="<?php echo e($item->options->image); ?>" alt="<?php echo e($item->name); ?> a granel y mayoreo">
                        <article class="flex-1">
                            <h1 class="font-bold"><?php echo e($item->name); ?></h1>
                            <div class="flex">
                                <p>Cantidad: <?php echo e($item->qty); ?> gr.</p>
                                <?php if(isset($item->options['color'])): ?>
                                    <p class="mx-2">- Color: <?php echo e(__($item->options['color'])); ?></p>
                                <?php endif; ?>
                                <?php if(isset($item->options['size'])): ?>
                                    <p><?php echo e($item->options['size']); ?></p>
                                <?php endif; ?>
                            </div>
                            <p>Precio: $<?php echo e($item->price * $item->qty); ?> M.N.</p>
                        </article>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-alpine">
                        No tiene semillas en su carrito. 🤷‍♀
                        </p>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if(Cart::count()): ?>
                <div class="py-2 px-3">
                    <p class="text-lg text-gray-700 mt-2 mb-3"><span class="font-bold">Total:</span> $ <?php echo e(Cart::subtotal()); ?></p>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button-enlace','data' => ['href' => ''.e(route('shopping-cart')).'','color' => 'semilla','title' => 'ir a carrito','class' => 'w-full']]); ?>
<?php $component->withName('button-enlace'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('shopping-cart')).'','color' => 'semilla','title' => 'ir a carrito','class' => 'w-full']); ?>
                        Ir al carrito de compras
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\mushugranel\resources\views/livewire/dropdown-cart.blade.php ENDPATH**/ ?>