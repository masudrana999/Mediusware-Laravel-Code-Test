<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	<h3>Social Accounts 

	</h3>

	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr>
						<th>Account</th>
						<th>Last post sent</th>
						<th># of post sent</th>
						<th>Groups</th>
						<th>Active</th> 
					</tr> 
				</thead> 
				<tbody> 

					<tr>
						<td>Hello1</td>
						<td>Hello12</td>
						<td>Hello123</td>
						<td>Hello1234</td>
						<td>Hello12345</td>
					</tr>

				</tbody> 
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>