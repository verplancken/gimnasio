<?php
require '../../include/db_conn.php';
page_protect();
if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";
    
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
        }
    }
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

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		<h3>Hacer Pago</h3>

		<hr />

		
		
		
		
		
		<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h6>HACER PAGO</h6>
        </div>
       <form id="form1" name="form1" method="post" class="a1-container" action="submit_payments.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">ID MEMBRESÍA:</td>
           	   <td height="35"><input type="text" name="m_id" id="boxx" value="<?php echo $uid; ?>" readonly/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">NOMBRE:</td>
               <td height="35"><input type="text" name="u_name" id="boxx" value="<?php echo $name; ?>" placeholder="Member Name" maxlength="30" readonly/>
                 
             </tr>
             <tr>
               <td height="35">PLAN ACTUAL</td>
               <td height="35"><input type="text" name="prevPlan" id="boxx" value="<?php echo $planName; ?>" readonly></td></td>
             </tr>
             <tr>
               <td height="35">SELECCIONAR NUEVO PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
							<option value="">-- Favor Seleccionar --</option>
							<?php
    
							    $query = "select * from plan where active='yes'";
							    
							    //echo $query;
							    $result = mysqli_query($con, $query);
							    
							    if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							            echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
							            
							        }
							    }
							    
							?>
						</select></td></td>
             </tr>
             
		   
            
             <tr>
			  <table id="plandetls">
             </table>
			 
            
           </table></td>
		   
         </tr>
		  <tr>
               <td height="35">&nbsp;</td>
               <td height="35">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="AGREGAR PAGO" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Borrar"></td>
             </tr>
         </table>
       </form>
    </div>
    </div>   
		
		
		
		

		<?php include('footer.php'); ?>

		</div>


    </body>
</html>


 <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>

<?php
} else {
    
}
?>
