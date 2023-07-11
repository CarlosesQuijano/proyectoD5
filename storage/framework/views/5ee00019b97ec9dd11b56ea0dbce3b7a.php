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
                Alumnos
            </h2>
            <a href="<?php echo e(route('alumno.create')); ?>" class="p-2 bg-sky-800 rounded-sm text-white">Agregar alumno</a>
        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-8 justify-end">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <?php if(session('status')): ?>
                            <span class="bg-green-500 p-1"><?php echo e(session('status')); ?></span>
                        <?php endif; ?>
                        <div>
                            <input wire:model="search" type="text" placeholder="Search...." class="w-full my-3 text-black"/>
                            <table class="w-full text-sm text-left text-black dark:text-gray-900">
                                <thead class="text-xs text-gray-900 uppercase bg-gray-500 dark:bg-gray-900 dark:text-white">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            DNI
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nombre
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Correo
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Direccion
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Fecha_nacimiento
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                      <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b dark:bg-white dark:border">
                                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-black">
                                            <?php echo e($alumno->id); ?>

                                            </th>
                                            <td class="px-6 py-4">
                                            <?php echo e($alumno->DNI); ?>

                                            </td>
                                            <td class="px-6 py-4">
                                            <?php echo e($alumno->nombre); ?>

                                            </td>
                                            <td class="px-6 py-4">
                                                <?php echo e($alumno->correo); ?>

                                            </td>
                                            <td class="px-6 py-4">
                                                <?php echo e($alumno->direccion); ?>

                                               </td>
                                            <td class="px-6 py-4">
                                                 <?php echo e($alumno->fecha_nacimiento); ?>

                                                </td>


                                            <td class="px-6 py-4 flex gap-2 align-center">

                                                <a href="<?php echo e(route("alumno.edit", $alumno->id)); ?>" class="font-medium p-1 bg-sky-500 text-white rounded-sm">Edit</a>
                                                <form action="<?php echo e(route('alumno.destroy', $alumno->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="font-medium p-1 bg-red-500 text-white rounded-sm">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                            </div>

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
<?php /**PATH C:\xampp\htdocs\proyectoD5\resources\views/alumno/index.blade.php ENDPATH**/ ?>