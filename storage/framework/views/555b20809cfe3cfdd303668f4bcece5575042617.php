
<?php $__env->startSection('content'); ?>
 
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <p>
	 	<?php echo e($row->title); ?> - 
	 	<a href="<?php echo e(url('admin/category/edit',$row->id)); ?>" class="btn btn-info">Edit</a>
	 	<a href="<?php echo e(url('admin/category/del',$row->id)); ?>" onclick="javascript:pront('Xóa danh mục này ?')" class="btn btn-info">Delete</a>
	 </p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<p>Phan trang:: <?php echo e($data->links()); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog\resources\views/backend/Category/list.blade.php ENDPATH**/ ?>