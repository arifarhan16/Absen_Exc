<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<table class="table table-hover" id="tabledownload">
			<tr>
				<th>No</th>
				<th>Dokumen</th>
				<th>Option</th>
			</tr>
			<?php $no=1;?>
				<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($doc->document); ?></td>
				<td>
				<a href="dokumen/<?php echo e($doc->document); ?>" class="btn btn-warning"><i class="fa fa-download"></i></a>
        		<a href="admin/dokumen/<?php echo e($doc->id); ?>/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mylat\resources\views//admin/dokumen.blade.php ENDPATH**/ ?>