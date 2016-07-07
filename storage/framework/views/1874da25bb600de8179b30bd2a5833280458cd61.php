<?php $__env->startSection('content'); ?>
	<div class="panel panel-default">
		<div class="panel-body">
			<?php echo $__env->make('includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<form action="<?php echo e(url('task')); ?>" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="task" class="col-sm-3 control-label">Task</label>
					<div class="col-sm-6">
						<input type="text" name="task" id="task" class="form-control">
					</div>
				</div>
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<input type="submit" class="btn btn-default" value="Add task">
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php if($tasks->count()): ?>
		<div class="panel panel-default">
	    <div class="panel-heading">Panel heading</div>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Task</th>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach($tasks as $task): ?>
		            <tr>
		                <td><?php echo e($task->task); ?></td>
		                <td>
							<form action="<?php echo e(url('task'. '/' .$task->id)); ?>" method="POST">
								<?php echo e(method_field('DELETE')); ?>

								<?php echo e(csrf_field()); ?>

								<input type="submit" value="Delete" class="btn btn-danger">
							</form>
		                </td>
		            </tr>
				<?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>