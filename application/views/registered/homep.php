<?php echo $title; ?>
<!--design of a table-->
<div class="row">
	<div class="col-md-2"> happa<br/> hapa<br/></div>
		<div class="col-md-10">
			<table class="table table-striped"> 		
				<thead> 
					<tr> 
						<th>Name</th>
						<th>Reg.No</th>					
						<th>Student details</th>
					</tr>	
				<?php 				
					foreach ($registers as $registered){ ?>
					<tr>
						<td><?php echo $registered['name']; ?> </td>
						<td><?php echo $registered['reg_no']; ?> </td>
						<td>
						<span class="glyphicon glyphicon-eye-open"></span>
						<a href="details">view</a>
						</td>
					</tr>
				<?php }?>			
			</tbody> 
		</table>
	</div>
</div><!--End of table design--> 
  <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> News Feed</div>
          <hr class="mt-2">

          <div class="row">
          		<div class="col-md-12">
          			<div class="card-columns">          
            			<div class="card mb-6">
            				<div class="card-header small text-muted">Posted 32 mins ago</div>	           
                 				<div class="form-group">
                    				<label>Name</label>
                    				<input type="text" class="form-control" name="name" placeholder="Full name" required outofocus>
               					</div>
                			<button type="submit" class="btn btn-default">Submit</button>            
          				</div>
          			</div>	
					<!--another-->
        		<div class="card-columns">
             	Example Social Card
            			<div class="card mb-6">
            				<div class="card-header small text-muted">Posted 32 mins ago</div>           
                 				<div class="form-group">
                    				<label>Name</label>
                   					<input type="text" class="form-control" name="name" placeholder="Full name" required outofocus>
                				</div>
                			<button type="submit" class="btn btn-default">Submit</button>
            			</div>
        			</div>
        		</div>
   		 	</div>
		</div>    
         
          
