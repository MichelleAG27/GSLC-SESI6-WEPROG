<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
    $umur1 = 0;
    $umur2 = 0;
    $umur3 = 0;
?>

<h2>List Binatang</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Kode</th>
        <th scope="col">Binatang</th>
    </tr>
    </thead>
    <tbody>

    <?php $__currentLoopData = $binatang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($x[0]); ?></td>
            <td><?php echo e($x[1]); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>


<?php for($i=0;$i < count($binatang); $i++): ?>
    <?php if($binatang[$i][2] < 5): ?>
        <?php $umur1++; ?>
    <?php elseif($binatang[$i][2] >= 5 and $binatang[$i][2] <= 10): ?>
        <?php $umur2++; ?>
    <?php elseif($binatang[$i][2] > 10): ?>
        <?php $umur3++; ?>
    <?php endif; ?>
<?php endfor; ?>

<h2>Jumlah Binatang per Kategori Umur</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Kategori Umur</th>
        <th scope="col">Jumlah</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dibawah 5 Tahun</td>
            <td><?php echo e($umur1); ?></td>
        </tr>
        <tr>
            <td>5 - 10 Tahun</td>
            <td><?php echo e($umur2); ?></td>
        </tr>
        <tr>
            <td>Diatas 10 Tahun</td>
            <td><?php echo e($umur3); ?></td>
        </tr>
    </tbody>
</table>
<?php /**PATH E:\kuliah\SEMESTER 5\micel\GSLC\resources\views/binatang.blade.php ENDPATH**/ ?>