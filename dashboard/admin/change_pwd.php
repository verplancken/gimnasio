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

		<h3>Cambiar Contraseña</h3>

		<hr />

		
		
		
		
		
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>Cambiar Contraseña</h6>
        </div>
       <form id="form1" name="form1" action="change_s_pwd.php" enctype="multipart/form-data" method="POST" class="a1-container" >
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID:</td>
           	   <td height="35"><input type="text" id="boxx" name="login_id" readonly value="<?php echo $_SESSION['user_data']; ?>"  required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">Código Secreto:</td>
               <td height="35"><input type="text" id="boxx" name="login_key"  class="form-control"  data-rule-required="true" placeholder="Tu código secreto"></td>
             </tr>
			 <tr>
           	   <td height="35">Contraseña:</td>
           	   <td height="35"><input type="text" name="pwfield" id="boxx" class="form-control"  data-rule-required="true" data-rule-minlength="6" placeholder="Tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
			  <tr>
           	   <td height="35">Confirmar Contraseña:</td>
           	   <td height="35"><input type="text" name="confirmfield" id="boxx" class="form-control"  data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirmar tu nueva contraseña"></td>
         	   </tr>
             
             <tr>
             <tr>
               <td height="35"></td>
               <td height="35"><a href="change_pwd.php" class="a1-btn a1-blue">Enviar</a><!--<input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="SUBMIT" >-->
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Borrar"></td>
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


