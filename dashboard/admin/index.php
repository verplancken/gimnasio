<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">

    <?php include('head.php'); ?>

    <body id="body-pd">

            <?php include('nav.php'); ?>

    		<div class="height-100 bg-light" style="margin-top: 6rem!important;">

                <h2 class="">ConfiguroWeb GYM | Panel de Control</h2>

                <hr>

                <div class="col-sm-3"><a href="revenue_month.php">
                    <div class="tile-stats tile-red">
                        <div class="icon"><i class="entypo-users"></i></div>
                            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Dinero recibido este Mes</h2><br>
                            <?php
                                date_default_timezone_set('America/Bogota');
                                $date  = date('Y-m');
                                $query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

                                //echo $query;
                                $result  = mysqli_query($con, $query);
                                $revenue = 0;
                                if (mysqli_affected_rows($con) != 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $query1="select * from plan where pid='".$row['pid']."'";
                                        $result1=mysqli_query($con,$query1);
                                        if($result1){
                                            $value=mysqli_fetch_row($result1);
                                        $revenue = $value[4] + $revenue;
                                        }
                                    }
                                }
                                echo "$".$revenue;
                                ?>
                            </div>
                    </div></a>
                </div>


                <div class="col-sm-3"><a href="table_view.php">
                    <div class="tile-stats tile-green">
                        <div class="icon"><i class="entypo-chart-bar"></i></div>
                            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Miembros <br>Totales</h2><br>
                                <?php
                                $query = "select COUNT(*) from users";

                                $result = mysqli_query($con, $query);
                                $i      = 1;
                                if (mysqli_affected_rows($con) != 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        echo $row['COUNT(*)'];
                                    }
                                }
                                $i = 1;
                                ?>
                            </div>
                    </div></a>
                </div>

                <div class="col-sm-3"><a href="over_members_month.php">
                    <div class="tile-stats tile-aqua">
                        <div class="icon"><i class="entypo-mail"></i></div>
                            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Usuarios Ingresados este mes</h2><br>
                                <?php
                                date_default_timezone_set("America/Bogota");
                                $date  = date('Y-m');
                                $query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

                                //echo $query;
                                $result = mysqli_query($con, $query);
                                $i      = 1;
                                if (mysqli_affected_rows($con) != 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        echo $row['COUNT(*)'];
                                    }
                                }
                                $i = 1;
                                ?>
                            </div>
                    </div></a>
                </div>

                <div class="col-sm-3"><a href="view_plan.php">
                    <div class="tile-stats tile-blue">
                        <div class="icon"><i class="entypo-rss"></i></div>
                            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
                            <h2>Planes de Entreno Disponibles</h2><br>
                                <?php
                                $query = "select COUNT(*) from plan where active='yes'";

                                //echo $query;
                                $result  = mysqli_query($con, $query);
                                $i = 1;
                                if (mysqli_affected_rows($con) != 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        echo $row['COUNT(*)'];
                                    }
                                }
                                $i = 1;
                                ?>
                            </div>
                    </div></a>
                </div>
    </body>

        <?php include('footer.php'); ?>
</html>
