<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4JC79C');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-230437362-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-230437362-1');
</script>
    <title>Mushugranel | Semillas a granel y mayoreo.</title>
    <meta name="description" content="Semillas a granel o mayoreo, libre de envasado, alimento natural directo del campo ordena y recibe hoy mismo en menos de 90 minutos.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#3cac9c">
    <meta name="facebook-domain-verification" content="3ovmslw929gxup93w1g4h04qvqheww" />
    <meta property="og:url"                content="https://mushugranel.com/" />
    <meta property="og:type"               content="eCommerce" />
    <meta property="og:title"              content="Mushugranel.com" />
    <meta property="og:description"        content="Consumo 0 km | Semillas a granel." />
    <meta property="og:image"              content="../../public_html/public/img/portada.png" />
    <link ref="canonical" href="https://mushugranel.com">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,300&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" />
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/FlexSlider/flexslider.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="<?php echo e(asset('vendor/FlexSlider/jquery.flexslider-min.js')); ?>"></script>
</head>
<body class="font-sans antialiased">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4JC79C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <a title="WhatsApp" href="https://wa.me/525516965907?text=Hola%20mushugranel." class="whatsapp" target="_blank"> <i
            class="fa-brands fa-whatsapp"></i></a>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <div class="min-h-screen bg-gray-50">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation')->html();
} elseif ($_instance->childHasBeenRendered('vrBlq4H')) {
    $componentId = $_instance->getRenderedChildComponentId('vrBlq4H');
    $componentTag = $_instance->getRenderedChildComponentTagName('vrBlq4H');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vrBlq4H');
} else {
    $response = \Livewire\Livewire::mount('navigation');
    $html = $response->html();
    $_instance->logRenderedChild('vrBlq4H', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
        function dropdown() {
            return {
                open: false,
                show() {
                    if (this.open) {
                        //Se cierra el menu
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = 'auto'
                    } else {
                        //Esta abriendo el menu
                        this.open = true;
                        document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                    }
                },
                close() {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = 'auto'
                }
            }
        }
    </script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
<footer>
    <br>
    <div class="bg-white container items-center lg:grid-cols-2 xl:grid-cols-5">
        <div>
            <a title="Logotipo footer" href="/">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.application-mark','data' => ['class' => 'center container h-16']]); ?>
<?php $component->withName('jet-application-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'center container h-16']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </a>
        </div>
        <br>
        <div title="Marca" class="text-gray-500 text-center text-2xl">
            <p>Mushugranel</p>
        </div>
        <div title="Eslogan" class="text-center text-sm text-semilla">
            <i class="fas fa-leaf"> Consume 0 Km</i>
        </div>
        <div class="container py-12">    
            <div title="Sitemap" class="text-gray-500 text-center">
                <div>
                <p title="Ayuda" class="font-bold text-lg">¿Contacto de ayuda?</p>
                    <a title="teléfono de ayuda" type="phone" class="telefono-ayuda footer text-lg" tel="55" href="tel:5516965907"><i class="fas fa-phone-square-alt"></i> 55 16965907</a>
                </div>
                <div>
                    <a title="email de atención" href="mailto:renata@mushugranel.com" class="contacto-mail text-lg"><i class="fas fa-envelope"></i> renata@mushugranel.com</a>
                </div>
                <div>
                <p title="Redes sociales" class="font-bold mt-4 text-lg">Nuestras redes sociales</p>
                </div>
                <div class="mt-4">
                    <a title="Facebook" class="text-lg" href="https://www.facebook.com/mushugranel"><i class="fab fa-facebook-f text-xl text-semilla"></i></a><a class="text-lg"> |</a> <a title="Instagram"  class="text-lg" href="/"><i class="fab fa-instagram text-lg text-semilla"></i></a>
                </div>
                <div class="mt-4">
                    <a title="Políticas de uso" class="text-lg text-gray-500" href=""><p>Políticas eCommerce</p><a>
                    <a title="Políticas de uso" class="text-lg text-gray-500" href=""><p>Aviso de privacidad eCommerce</p><a>
                </div>
                <div class="mt-4">
                    <a title="Site Map" class="text-lg text-gray-500" href=""><p>Mapa de sitio</p></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
<?php /**PATH C:\xampp\htdocs\mushugranel\resources\views/layouts/app.blade.php ENDPATH**/ ?>