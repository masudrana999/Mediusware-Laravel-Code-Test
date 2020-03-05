@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	

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
	</div>
</div>
@endsection

@section('style')
	<!-- Datepicker -->
	<link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
@endsection

@section('script')

	<!-- Datepicker -->
	<script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

	<!-- Script -->
	<script type="text/javascript">
		$(document).ready(function(){
		 $('#datepicker').datepicker(); 
		});
	</script>
@endsection


