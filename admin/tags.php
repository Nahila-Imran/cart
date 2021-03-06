<?php 
	include('header.php'); 
	include('sidebar.php');
	include("config.php");
?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome !!!</h2>
			<p id="page-intro">What would you like to do?</p>
		
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Product's Tags</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->

					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->						

						<table>
							<thead>
								<tr>
								   <th>Tag ID</th>
								   <th>Tag Name</th>
								   <th>Action</th>
								</tr>
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
							<?php 
								
								$sql = "SELECT * FROM tag";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
							?>
										<tr>
											<td><?php echo $row['tid'];?></td>
											<td><?php echo $row['name'];?></td>
											<td>
												<!-- Icons -->
												<a href="editTag.php?id=<?php echo $row['tid'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
												<a href="deleteTag.php?id=<?php echo $row['tid'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
											</td>
										</tr>
						<?php       }  
               				   }  	?>
								
							</tbody>
						</table>
						
					</div> <!-- End #tab1 -->
				</div> <!-- End .content-box-content -->
			</div> <!-- End .content-box -->
		<div class="clear"></div>
	<?php include('footer.php'); ?>
			
			