<?php
require '../../include/db_conn.php';
page_protect();
 


?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
    <body id="body-pd">

            <?php include('nav.php'); ?>

    		<div class="main-content">
		
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Bienvenid@ <?php echo $_SESSION['full_name']; ?> 
							</li>						
						
							<li>
								<a href="logout.php">
									Cerrar Sesión <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		

		
			<h2>Rutinas</h2>

		<hr />
		
		<table class="table table-bordered datatable" id="table-1" border=1>
			
				<tr>
					<th>Sl.No</th>
					<th>Nombre de Rutina</th>
					<th>Detalles Rutina</th>
					<th>Eliminar Rutina</th>
				</tr>
		
				<tbody>

				<?php


					$query  = "select * from timetable";
					//echo $query;
					$result = mysqli_query($con, $query);
					$sno    = 1;

					if (mysqli_affected_rows($con) != 0) 
					{
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
						{

					       
					           
					                
					                 echo "<tr><td>".$sno."</td>";
					                echo "<td>" . $row['tname'] . "</td>";
					           
					                
					                $sno++;
					                
					              echo '<td><a href="editdetailroutine.php?id='.$row['tid'].'"><input type="button" class="a1-btn a1-blue" id="boxxe" value="Editar Rutina" ></a></td>';
								 // echo '<td><a href="deleteroutine.php?id='.$row['tid'].'"><input type="button" class="a1-btn a1-blue" value="Delete Routine" ></a></td></tr>';
								 echo "<td><form action='deleteroutine.php' method='post' onsubmit='return ConfirmDelete()'><input type='hidden' name='name' value='" . $row['tid'] . "'/><input type='submit' value='Eliminar' width='20px' id='boxxe' class='a1-btn a1-orange'/></form></td></tr>";
									
					                $uid = 0;
					            
					        
					    }
					}

					?>									
				</tbody>

		</table>


				
		
		
		
		
		
		
		

			

    	</div>

    </body>
	<?php include('footer.php'); ?>
</html>


										
