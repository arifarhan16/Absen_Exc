<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(session('imgdel')): ?>
<script>
    Swal.fire({
  title: 'Hapus',
  text: 'Gambar Telah Di Hapus',
  icon: 'error',
  confirmButtonText: 'Okay'
})
</script>
<?php endif; ?>
    <div class="row-col-4">
                  <button type="button" class="btn btn-secondary" id="mabut"><i class="fa fa-refresh"></i>
</button>
    <a href="/admin" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
        <table id="image" class="table table-striped table-dark table-hover" width="100%" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th><font color="white">No</font></th>
            <th><font color="white">Gambar</font></th>
            <th><font color="white">Nama</font></th>
            <th><font color="white">Option</font></th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gambar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td><font color="white"><?php echo e($no++); ?></font></td>
            <td><img src="<?php echo e(asset('images/'.$gambar->gambar)); ?>" alt="" width="100" height="100"></td>
            <td><?php echo e($gambar->gambar); ?></td>
            <td>

        <a href="lookimages/<?php echo e($gambar->gambar); ?>" class="btn btn-warning"><i class="fa fa-download"></i></a>
        <a href="lookimages/<?php echo e($gambar->id); ?>/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views//admin/lookimages.blade.php ENDPATH**/ ?>