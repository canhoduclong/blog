
<?php $__env->startSection('content'); ?>
<form method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<p>title: <input type="text" name="title" value="<?php echo e(old('title',isset($data->title) ? $data->title : '')); ?>"></p>
	<p>keyword: <input type="text" name="keyword" value="<?php echo e(old('keyword') ?? $data->keyword ?? ''); ?>"></p>
	<p><input type="text" name="description"value="<?php echo e(old('description') ?? $data->description ?? ''); ?>"></p>
	<p><textarea name="content"><?php echo e(old('content') ?? $data->content ?? ''); ?></textarea></p>
	<p><input type="submit" name=" save "></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog\resources\views/backend/category/edit.blade.php ENDPATH**/ ?>