<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between align-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Users
            </h2>
            <a href="<?php echo e(route('Usuarios.create')); ?>" class="p-2 bg-sky-800 rounded-sm text-white">Agregar usuario</a>
        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <?php if(session('status')): ?>
                            <span class="bg-green-500 p-1"><?php echo e(session('status')); ?></span>
                        <?php endif; ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-users')->html();
} elseif ($_instance->childHasBeenRendered('bI8wZzI')) {
    $componentId = $_instance->getRenderedChildComponentId('bI8wZzI');
    $componentTag = $_instance->getRenderedChildComponentTagName('bI8wZzI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bI8wZzI');
} else {
    $response = \Livewire\Livewire::mount('show-users');
    $html = $response->html();
    $_instance->logRenderedChild('bI8wZzI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    </div>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\proyectoD5\resources\views/Usuarios/index.blade.php ENDPATH**/ ?>