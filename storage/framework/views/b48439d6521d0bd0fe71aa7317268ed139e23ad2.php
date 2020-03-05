<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body" id="vueappp">
	

	<div class="row">
		<div class="col-md-12">


			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">
						<h3>Recent Posts Send To Buffer</h3>
			  </div>
			  <div class="panel-body">
			    <div class="row" style="margin-bottom: 10px">
			    	<div class="col-md-4">
			    		<div class="input-group">
			    		  <!-- <span class="input-group-addon" id="basic-addon1">@</span> -->
			    		  <span class="glyphicon glyphicon-search input-group-addon" aria-hidden="true" id="basic-addon1"></span>
			    		  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
			    		</div>
			    	</div>
			    	<div class="col-md-4">
			    		  
			    		<div class="input-group">
			    		   <input type='text' class="form-control" id='datepicker' style='width: 300px;' >
			    		 </div>
			    	</div>
					<div class="col-md-3">
			    		<div class="input-group">
						  <select class="form-control">
						    <option>All Group</option>
						    <option>2</option>
						    <option>3</option>
						    <option>4</option>
						  </select>
						</div>
			    	</div>
			    </div>

			    <!-- Table -->
			    <table class="table table-hover table-bordered"> 
			    	<thead> 
			    		<tr>
			    			<th>Group Name</th>
			    			<th>Group Type</th>
			    			<th>Account Name</th>
			    			<th>Post Text</th>
			    			<th>Time</th>
			    		</tr> 
			    	</thead> 
			    	<tbody> 

			    		<tr v-for="post in posts">
			    			<td>{{ post.group_info.name }}</td>
			    			<td>{{ post.group_info.type }}</td>
			    			<td><img :src="post.account_info.avatar" alt="" width="40" height="40"></td>
			    			<td>{{ post.post_text }}</td>
			    			<td>{{ post.sent_at }}</td>
			    		</tr>

			    	</tbody> 
			    </table>
			    <pagination v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="fetchPosts()"></pagination>
			  </div>
			</div>

			
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
	<!-- Datepicker -->
	<link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

	<!-- Datepicker -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
	<script src='/js/vueapp.js' type='text/javascript'></script>

	<!-- Script -->
	<script type="text/javascript">
		$(document).ready(function(){
		 $('#datepicker').datepicker(); 
		});
	</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>