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

		<h3>Update Plan</h3>

		<hr />
		<?php
		$id=$_GET['id'];
		$sql="Select * from plan t Where t.pid=$id";
		$res=mysqli_query($con, $sql);
		
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
						
		?>
		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Actualizar Plan</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="updateplan.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID PLAN:</td>
           	   <td height="35">
				<input type="text" name="planid" id="planID" readonly value='<?php echo $row['pid'] ?>'></td>
				
				
         	   </tr>
             <tr>
               <td height="35">NOMBRE DE PLAN:</td>
               <td height="35"><input name="planname" id="planName" type="text" value='<?php echo $row['planName'] ?>'  size="40"></td>
             </tr>
             <tr>
               <td height="35">DESCRIPCIÓN DE PLAN</td>
               <td height="35"><input type="text" name="desc" id="planDesc"  value='<?php echo $row['description'] ?>' size="40"></td>
             </tr>
             <tr>
               <td height="35">VALIDEZ DE PLAN</td>
               <td height="35"><input type="number" name="planval" id="planVal" value='<?php echo $row['validity'] ?>' size="40"></td>
             </tr>
             
             <tr>
               <td height="35">MONTO DE PLAN:</td>
               <td height="35"><input type="text" name="amount" id="planAmnt" value='<?php echo $row['amount'] ?>'  size="40"></td>
             </tr>
             
            
             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="ACTUALIZAR PLAN" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="BORRAR"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
		
		

			<?php include('footer.php'); ?>
    	</div>

    </body>
</html>


