<!-- Taskspage -->

<div class="container mt-4 d-flex p-0">
	<div class="col-lg-6">
		<button type="button" class="btn btn-primary" data-toggle="modal">Add new task</button>
	</div>
</div>

<div class="container mt-2">
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	    	<th scope="col">Status</th>
	      <th scope="col">Title</th>
	      <th scope="col">Description</th>
	      <th scope="col">Start in</th>
	      <th scope="col">End in</th>
	      <th scope="col">Options</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach($data['task'] as $task): ?>
	    <tr>
	    	<td>
	    		<?php if($task['status']==1){
	    			echo('<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	    				<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
	    				</svg>');
	    		}else{
	    			echo('<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	    				<path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
	    				<path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
	    				</svg>');
	    		} ?>
	    	</td>
	      <td><?= $task['title']; ?></td>
	      <td><?= $task['info']; ?></td>
	      <td><?= $task['start']; ?></td>
	      <td>
	      	<?php if($task['end']==null){
	      		echo('On progress');
	      	}else{
	      		echo($task['end']);
	      	} ?>
	      </td>
	      <td>
	      	<button type="button" class="btn btn-warning btn-sm mr-1">Edit</button>
	      	<button type="button" class="btn btn-danger btn-sm">Delete</button>
	    	</td>
	    </tr>
	  <?php endforeach; ?>
	  </tbody>
	</table>
</div>
