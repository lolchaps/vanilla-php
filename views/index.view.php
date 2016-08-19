<?php require 'partials/header.php'; ?>
	<div class="container">
		<!-- TODO: Create Task Form -->
		<div class="panel panel-default">
		    <div class="panel-heading">
		        New Task
		    </div>
		    
			<div class="panel-body">
				<form action="index.create.php" method="POST" class="form-horizontal">

		            <!-- Task Name -->
		            <div class="form-group">
		                <label for="task-description" class="col-sm-3 control-label">Task</label>

		                <div class="col-sm-6">
		                    <input type="text" name="description" id="task-description" class="form-control">
		                </div>
		            </div>

		            <!-- Add Task Button -->
		            <div class="form-group">
		                <div class="col-sm-offset-3 col-sm-6">
		                    <button type="submit" class="btn btn-default">
		                        <i class="fa fa-plus"></i> Add Task
		                    </button>
		                </div>
		            </div>
		        </form>
	        </div>
	    </div>

		<!-- Current Tasks -->
    	<?php if (count($tasks) > 0) : ?>
			<div class="panel panel-default">
	            <div class="panel-heading">
	                Current Tasks
	            </div>

	            <div class="panel-body">
	                <table class="table table-striped">
	                    <thead>
	                        <th>Task</th>
	                        <th>&nbsp;</th>
	                    </thead>

	                    <tbody>
	                        <?php foreach ($tasks as $task) : ?>
								<tr>
									<td>
										<?php if ($task->completed) : ?>
											<strike><?= $task->description; ?></strike>
										<?php else: ?>
											<?= $task->description; ?>
										<?php endif; ?>
									</td>

									<td>
	                                    <!-- TODO: Complete Button -->
	                                </td>
								</tr>
							<?php endforeach; ?>
	                    </tbody>
	                </table>
	            </div>
	        </div>
    	<?php endif; ?>
	</div>

<?php require 'partials/footer.php'; ?>