<?php
require '../../include/db_conn.php';
page_protect();

?>

<!DOCTYPE html>
<html lang="en">
<script !src="">
	function myFunction()
	{
		var prt=document.getElementById("print");
		var WinPrint=window.open('','','left=0,top=0,width=800,height=900,tollbar=0,scrollbars=0,status=0');
		WinPrint.document.write(prt.innerHTML);
		WinPrint.document.close();
		WinPrint.focus();
		WinPrint.print();
		WinPrint.close();
		setPageHeight("297mm");
		setPageWidth("210mm");
		setHtmlZoom(100);
		//window.location.replace("index.php?query=");
	}
	</script>

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
				<h2>Detalles de la Rutina</h2>
				<hr/>

		<?php
		$id=$_GET['id'];
		$sql="Select * from timetable t Where t.tid=$id";
		$res=mysqli_query($con, $sql);
					 if($res){
						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
				
						      }
						
		?>

		<div id=print>
		<table width="619" height="673" border="1" align="center">
  <tr>
    <td height="87" colspan="2">Nombre de la Rutina:<?php echo $row['tname'] ?> &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;<span align="right"> <img src="logo.png" width="121" height="114"  alt=""/></span></td>
    </tr>
  <tr>
    <td width="186" height="103">Día 1:</td>
    <td width="417"><?php echo $row['day1'] ?></td>
  </tr>
  <tr>
    <td height="96">Día 2:</td>
    <td><?php echo $row['day2'] ?></td>
  </tr>
  <tr>
    <td height="87">Día 3:</td>
    <td><?php echo $row['day3'] ?></td>
  </tr>
  <tr>
    <td height="92">Día 4:</td>
    <td><?php echo $row['day4'] ?></td>
  </tr>
  <tr>
    <td height="84">Día 5:</td>
    <td><?php echo $row['day5'] ?></td>
  </tr>
  <tr>
    <td height="75">Día 6:</td>
    <td><?php echo $row['day6'] ?></td>
  </tr>
        </table></div>

				<input type="button" class="a1-btn a1-blue" value="Imprimir Rutina" onclick="myFunction()">


    	</div>

    </body>
	<?php include('footer.php'); ?>
</html>


										
