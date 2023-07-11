
<div>
<input wire:model="search" type="text" placeholder="Search...." class="w-full my-3 text-black"/>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-900">
    <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Rol
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="bg-white border-b dark:bg-white dark:border">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                <?php echo e($usuario->id); ?>

                </th>
                <td class="px-6 py-4">
                <?php echo e($usuario->name); ?>

                </td>
                <td class="px-6 py-4">
                <?php echo e($usuario->email); ?>

                </td>
                <td class="px-6 py-4">
                   <?php

                       $role = $usuario ->getRoleNames();

                   ?>

                <?php if($usuario->hasRole("admin")): ?>
                <span class="bg-yellow-500 text-white rounded-sm p-1">Admin</span>
                <?php elseif($usuario->hasRole("maestro")): ?>
                <span class="bg-blue-500 text-white rounded-sm p-1">Maestro</span>

                <?php elseif($usuario->hasRole("alumno")): ?>
                <span class="bg-green-500 text-white rounded-sm p-1">Alumno</span>
                <?php else: ?>
                <span class="bg-indigo-500 text-white rounded-sm p-1">Sin asignación</span>
                <?php endif; ?>
                    </td>
                <td class="px-6 py-4 flex gap-2 align-center">

                    <a href="<?php echo e(route("Usuarios.edit", $usuario->id)); ?>" class="font-medium p-1 bg-sky-500 text-white rounded-sm">Edit</a>
                    <form action="<?php echo e(route('Usuarios.destroy', $usuario->id)); ?>" method="POST">
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
<?php /**PATH C:\xampp\htdocs\proyectoD5\resources\views/livewire/show-users.blade.php ENDPATH**/ ?>