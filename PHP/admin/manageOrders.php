<?php
	include_once 'header.php';
	include_once '../../includes/showOrders.inc.php';
?>
<h1>Manage Orders</h1>
<div class="container p-0 mb-5">
	<div class="col-md-12">
    	<div class="panel panel-default">
        	<div class="table-responsive">
		<table class="table custom-table align-middle table-condensed">
			<thead>
				<tr>
					<th></th>
					<th style='text-align: center;'>Order No.</th>
					<th>Recipient</th>
					<th>Address</th>
					<th>Contact No.</th>			
					<th>Total Price</th>
					<th>Order Status</th>
				</tr>
			</thead>
    		<tbody>	
				<?php
					displayOrders();
				?>
    		</tbody>
		</table>
            </div>
          </div> 
      </div>
	</div>
       

<?php
	include_once 'footer.php';
?>
