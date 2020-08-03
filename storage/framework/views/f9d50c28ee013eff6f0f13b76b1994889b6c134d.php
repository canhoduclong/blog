
@session('content')
<form method="post" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<p>title: <input type="text" name="title" value="<?php echo e(old('title') ?? $category->title ?? ''); ?>"></p>
	<p>keyword: <input type="text" name="keyword" value="<?php echo e(old('keyword') ?? $category->keyword ?? ''); ?>"></p>
	<p><input type="text" name="description"value="<?php echo e(old('description') ?? $category->description ?? ''); ?>"></p>
	<p><textarea name="content"><?php echo e(old('content') ?? $category->content ?? ''); ?></textarea></p>
	<p><input type="submit" name=" save "></p>
</form>
@endsession
<?php echo $__env->make('backend.layouts.mater', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog\resources\views/backend/Category/add.blade.php ENDPATH**/ ?>