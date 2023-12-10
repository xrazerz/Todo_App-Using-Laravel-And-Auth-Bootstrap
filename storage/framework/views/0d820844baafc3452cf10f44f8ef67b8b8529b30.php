

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TODO's App</div>

                    <div class="card-body">
                        <h4>Edit Form</h4>
                        <form method="POST" action="<?php echo e(route('todos.update')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="todo_id" value="<?php echo e($todo->id); ?>">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo e($todo->title); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" cols="5" rows="5">
                                    <?php echo e($todo->description); ?>

                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <select name="is_completed" class="form-control">
                                    <option disabled selected>Select Option</option>
                                    <option value="1">Completed</option>
                                    <option value="0">In Completed</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel Revision\todo-app\resources\views/todos/edit.blade.php ENDPATH**/ ?>