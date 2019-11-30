<?php $__env->startSection('content'); ?>
<div class="container">
<?php if(session('deldoc')): ?>
<script>
    Swal.fire({
  title: 'Hapus',
  text: 'Data Dokumen Berhasil Di Hapus',
  icon: 'error',
  confirmButtonText: 'Okay'
})
</script>
<?php endif; ?>
<?php if(session('download')): ?>
<script>
    Swal.fire({
  title: 'Download',
  text: 'Data Dokumen Sedang Di Download',
  icon: 'info',
  confirmButtonText: 'Okay'
})
</script>
<?php endif; ?>
	<div class="row">
		          <button type="button" class="btn btn-secondary" id="mabut"><i class="fa fa-refresh"></i>
</button>
		    <a href="/admin" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
		<table id="down" class="table table-striped table-dark table-hover" width="100%" cellspacing="10" cellpadding="10">
			<thead>
			<tr>
				<th>No</th>
				<th>Dokumen</th>
				<th>Option</th>
			</tr>
			</thead>
			<?php $no=1;?>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($doc->document); ?></td>
				<td>
				<a href="dokumen/<?php echo e($doc->document); ?>" class="btn btn-warning"><i class="fa fa-download"></i></a>
        		<a href="dokumen/<?php echo e($doc->id); ?>/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views/admin/dokumen.blade.php ENDPATH**/ ?>