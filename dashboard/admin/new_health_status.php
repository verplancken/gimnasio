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

		<h2>Estado de Salud</h2>

		<hr />

		<table class="table table-bordered datatable" id="table-1" border=1>
			<thead>
				<tr><h2>
					<th>Sl.No</th>
					<th>ID Miembro</th>
					<th>Nombre</th>
					<th>Contacto</th>
					<th>Correo Electrónico</th>
					<th>Género</th>
					<th>Fecha de Nacimiento</th>
					<th>Fecha de Ingreso</th>
					<th>Acción</th></h2>
				</tr>
			</thead>
				<tbody>

						<?php
							$query  = "select * from users ORDER BY joining_date";
							//echo $query;
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $uid   = $row['userid'];
							        $uname;
							        $udob;
							        $ujoing;
							        $ugender;
							        $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
							        $result1 = mysqli_query($con, $query1);
							        if (mysqli_affected_rows($con) == 1) {
							            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
							                
							                echo "<tr><td>".$sno."</td>";
							                
							                echo "<td>" . $row['userid'] . "</td>";

							                echo "<td>" . $row['username'] . "</td>";

							                echo "<td>" . $row['mobile'] . "</td>";

							                echo "<td>" . $row['email'] . "</td>";

							                echo "<td>" . $row['gender'] . "</td>";

							                echo "<td>" . $row['dob'] . "</td>";

							                echo "<td>" . $row['joining_date'] ."</td>";
							                
							                $uname=$row['username'];
							       			$udob=$row['dob'];
							        		$ujoing=$row['joining_date'];
							        		$ugender=$row['gender'];

							                $sno++;
							       
							                echo "<td><form action='health_status_entry.php' method='post'><input type='hidden' name='uid' value='" . $uid . "'/>
							                <input type='hidden' name='uname' value='" . $uname . "'/>
							                <input type='hidden' name='udob' value='" . $udob . "'/>
											
							                <input type='hidden' name='ujoin' value='" . $ujoing . "'/>
							                <input type='hidden' name='ugender' value='" . $ugender . "'/><input type='submit' class='a1-btn a1-blue' id='button1' value='Estado Salud' class='btn btn-info'/></form></td></tr>";
							                $msgid = 0;
							            }
							        }
							    }
							}
						?>									
					</tbody>
				</table>


			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>

