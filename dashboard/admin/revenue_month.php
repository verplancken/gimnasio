
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="es">
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

		<h3>Entradas por Mes</h3>

		<hr / >

		<form>
	<?php
	// set start and end year range
	$yearArray = range(2000, date('Y'));
	?>
	<!-- displaying the dropdown list -->
	<select name="year" id="syear">
	    <option value="0">Selecciona el año</option>
	    <?php
	    foreach ($yearArray as $year) {
	        // if you want to select a particular year
	        $selected = ($year == date('Y')) ? 'selected' : '';
	        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
	    }
	    ?>
	</select>

	<?php
	// set the month array
	$formattedMonthArray = array(
	                    "01" => "Enero", "02" => "Febrero", "03" => "Marzo", "04" => "Abril",
	                    "05" => "Mayo", "06" => "Junio", "07" => "Julio", "08" => "Agosto",
	                    "09" => "Septiembre", "10" => "Octubre", "11" => "Noviembre", "12" => "Diciembre",
	                );

	?>
	<!-- displaying the dropdown list -->
	<select name="month" id="smonth">
	    <option value="0">Selecciona Mes</option>
	    <?php

	    foreach ($formattedMonthArray as $month) {
	        // if you want to select a particular month
	        $mm=implode(array_keys($formattedMonthArray,$month));
	        $selected = ($mm == date('m')) ? 'selected' : '';
	        // if you want to add extra 0 before the month uncomment the line below
	        //$month = str_pad($month, 2, "0", STR_PAD_LEFT);
	        echo '<option '.$selected.' value="'.$mm.'">'.$month.'</option>';
	    }
	    ?>
	</select>

	<input type="button" class="a1-btn a1-blue" style="margin-bottom:5px;" name="search" onclick="showMember();" value="Búsqueda">

</form>

<table id="memmonth"border=2 style="font-size:15px;">
	
</table>


<script>

  function showMember(){
  	var year=document.getElementById("syear");
  	var month=document.getElementById("smonth");
  	var iyear=year.selectedIndex;
  	var imonth=month.selectedIndex;
  	var mnumber=month.options[imonth].value;
  	var ynumber=year.options[iyear].value;
  	if(mnumber=="0" || ynumber=="0"){
      document.getElementById("memmonth").innerHTML="";
      return;
  	}
  	else{
  		if(window.XMLHttpRequest){
  			xmlhttp=new XMLHttpRequest();
  		}
  		xmlhttp.onreadystatechange=function(){
  			if(this.readyState==4 && this.status ==200){
  				document.getElementById("memmonth").innerHTML=this.responseText;
  			}
  		};
  		xmlhttp.open("GET","income_month.php?mm="+mnumber+"&yy="+ynumber+"&flag=0",true);
  		xmlhttp.send();
  	}

  }

</script>

		<?php include('footer.php'); ?>
    	
    	</div>

    </body>
</html>
