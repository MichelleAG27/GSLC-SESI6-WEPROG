<?php
    $a = 0;
?>
<?php $__env->startSection('staff'); ?>
    <h2>List Staff</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Kode Staff</th>
            <th scope="col">Nama Staff</th>
        </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($z[0]); ?></td>
                    <td><?php echo e($z[1]); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>NULL</td>
                    <td>NULL</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <h2>Staff dan Binatang yang Diurus</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Staff</th>
            <th scope="col">Binatang</th>
        </tr>
        </thead>
        <tbody>
            <?php while($a < count($staff)): ?>
                <tr>
                    <td><?php echo e($staff[$a][1]); ?></td>
                    <td><?php echo e($staff[$a][2]); ?></td>
                </tr>
                <?php $a++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\kuliah\SEMESTER 5\micel\GSLC\resources\views/staff.blade.php ENDPATH**/ ?>