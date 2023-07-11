<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

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
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Editar Clase
       </h2>
    <?php $__env->endSlot(); ?>

   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900">
                   <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                   <form class="p-5" action="<?php echo e(route('clase.update', $clase->id )); ?>" method="POST">
                       <?php echo csrf_field(); ?>
                       <?php echo method_field('PUT'); ?>
                       <div class="mb-3 visually-hidden-focusable">
                           <label for="exampleInputEmail1" class="form-label visually-hidden">id</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo e($clase->id); ?>" name="id">
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Nombre clase</label>
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?php echo e($clase->materia); ?>" name="materia">
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Maestro</label>
                           <input type="text" class="form-control" id="exampleInputPassword1" required value="<?php echo e($clase->maestro); ?>" name="maestro">
                       </div>
                       

                       <button type="submit" class="btn" style="background-color: #562a80; color:white;">Submit</button>
                   </form>

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

<?php /**PATH C:\xampp\htdocs\proyectoD5\resources\views/clase/edit.blade.php ENDPATH**/ ?>