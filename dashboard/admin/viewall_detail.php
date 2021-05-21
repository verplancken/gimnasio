<?php
require '../../include/db_conn.php';
page_protect();

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
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

		<h3>Editar Detalles de Miembro</h3>

		<hr />

			<?php

				    $query  = "SELECT * FROM users u 
				    		   INNER JOIN address a ON u.userid=a.id
				    		   INNER JOIN  health_status h ON u.userid=h.uid
				    		   INNER JOIN enrolls_to e on u.userid=e.uid
				    		   INNER JOIN plan p on e.pid=p.pid
				    		   WHERE userid='$memid' and e.renewal='yes'";
				    //echo $query;
				    $result = mysqli_query($con, $query);
				    $sno    = 1;

				    $name="";
				    $gender="";

				    if (mysqli_affected_rows($con) == 1) {
				        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

				            $name    = $row['username'];
				            $gender =$row['gender'];
				            $mobile = $row['mobile'];
				            $email   = $row['email'];
				            $dob	 = $row['dob'];
				            $jdate    = $row['joining_date'];
				          	$streetname=$row['streetName'];
				          	$state=$row['state'];
				          	$city=$row['city'];
				          	$zipcode=$row['zipcode'];
				            $calorie=$row['calorie'];
				            $height=$row['height'];
				            $weight=$row['weight'];
				            $fat=$row['fat'];
				            $planname=$row['planName'];
				            $pamount=$row['amount'];
				            $pvalidity=$row['validity'];
				            $pdescription=$row['description'];
				            $paiddate=$row['paid_date'];
				            $expire=$row['expire'];
				            $remarks=$row['remarks'];

				        }
				    }
				    else{
				    	 echo "<html><head><script>alert('Cambio Insatisfactorio');</script></head></html>";
				    	 echo mysqli_error($con);
				    }


				?>
			
			
			
			
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h3>Editar Detalles de Miembro</h3>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="edit_member.php">
         <table width="100%" border="0" align="center">
         <tbody><tr>
           <td height="35">
           	 </td></tr><tr>
           	   <td height="35">ID de Usuario:</td>
           	   <td height="35"><input type="text" name="name" id="boxxe" readonly="" required="" value='<?php echo $memid?>'></td>
         	   </tr>
             <tr>
               <td height="35">Nombre:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $name?>'></td>
             </tr>
             <tr>
               <td height="35">Género:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $gender?>'></td>
             </tr>
			 <tr>
               <td height="35">Móvil:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" maxlength="10" value='<?php echo $mobile ?>'></td>
             </tr>
			 <tr>
               <td height="35">Correo:</td>
               <td height="35"><input type="email" id="boxxe" readonly="" required="" value='<?php echo $email?>'></td>
             </tr>
			 <tr>
               <td height="35">Fecha de Nacimiento</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $dob?>'></td>
             </tr>
			 <tr>
               <td height="35">Fecha de Ingreso:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $jdate?>'></td>
             </tr>
			 <tr>
               <td height="35">Dirección:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $streetname?>'></td>
             </tr>
			 <tr>
               <td height="35">Departamento:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" name="state" value='<?php echo $state?>'></td>
             </tr>
			 <tr>
               <td height="35">Ciudad:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $city?>'></td>
             </tr>
              <tr>
               <td height="35">Código Postal:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $zipcode?>'></td>
             </tr>
			 <tr>
               <td height="35">Calorias:</td>
               <td height="35"><input type="text" id="boxxe" readonly="" value='<?php echo $calorie?>'></td>
             </tr>
			 <tr>
               <td height="35">Altura:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $height?>'></td>
             </tr>
			 <tr>
               <td height="35">Peso:</td>
               <td height="35"><input type="text" readonly="" value='<?php echo $weight?>' id="boxxe"></td>
             </tr>
			 <tr>
               <td height="35">Grasa:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $weight?>'></td>
             </tr>
			 <tr>
               <td height="35">Nombre del Plan:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $planname?>'></td>
             </tr>
			 <tr>
               <td height="35">Monto del Plan:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pamount?>'></td>
             </tr>
			  <tr>
               <td height="35">Validez del Plan:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pvalidity.' Month'?>'></td>
             </tr>
			  <tr>
               <td height="35">Descripción del Plan:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $pdescription?>'></td>
             </tr>
			  <tr>
               <td height="35">Fecha de Pago:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $paiddate?>'></td>
             </tr>
			 <tr>
               <td height="35">Fecha de Expiración:</td>
               <td height="35"><input type="text" readonly="" id="boxxe" value='<?php echo $expire?>'></td>
             </tr>
			 <tr>
               <td height="35">Observaciones:</td>
               <td height="35"><textarea readonly style="resize:none; margin: 0px; width: 230px; height: 53px;"  ><?php echo $remarks?></textarea></td>
             </tr>
            
             
            
             <tr>
             </tr><tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Editar">
                 <a href="table_view.php"><input class="a1-btn a1-blue" id="" value="Volver"></a></td>
             </tr>
           
         
         </tbody></table>
       
    </div>
    </div>   
			
			
					

			<?php include('footer.php'); ?>
    	</div>

  
</body>
</html>	

<?php

} else {
    
}

?>
