<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from reservado where reserva = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					
					$fname = $row['nombre'];
					$lname = $row['apellido'];
					$email = $row['email'];
					$Phone = $row['telefono'];
					$troom = $row['area'];
					$nroom = $row['narea'];
					$bed = $row['asistente'];
					$cin = $row['fechaentrada'];
					$sta = $row['estado'];
					$days = $row['nhoras'];
					$inicio_hora=$row['iniciohora'];
					$fin_hora=$row['finhora'];
					$are=$row['narea'];
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegación de palanca
</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Estado</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> Boletines informativos</a>
                    </li>
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Reserva de habitacion</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Pago</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Lucro</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Reserva de habitacion<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
Confirmación de reserva
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th><h4>DESCRIPCION</h4></th>
                                            <th><h4>INFORMACION</h4></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th><?php echo $fname." ".$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th> No Telefono</th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Area Deportiva</th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No 	De Area Deportiva </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Asistente en Area</th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Fecha de entrada</th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Hora de Inicio</th>
                                            <th><?php echo $inicio_hora; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Hora de Fin</th>
                                            <th><?php echo $fin_hora; ?></th>
                                            
                                        </tr>
										

										<tr>
                                            <th>No de Horas </th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Estado de la Reserva</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Seleccione la Conformación</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Confirmado">Confirmar</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Confirmar" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                   		Áreas Deportivas Disponibles

                        </div>
                        <div class="panel-body">
						<table width="200px">

							<?php
								$detsql ="select * from detalleareas";
								$detre= mysqli_query($con,$detsql);
								$f5 = 0;
								while($row = mysqli_fetch_array($detre))
								{
									$f5 = $f5 + $row['total'];
									echo"<tr>
											<td><b>".$row['diciplina']."</b></td>
											<td><button type='button' class='btn btn-primary btn-circle'>"
											.$row['total']."</button></td>	
										</tr>";
								}
							?>

							<tr>
								<td><b>Total de Áreas Deportivas</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 

								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>

						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
	$dipsql ="select disponible from areadeport where idarea= '$are'";
	$dispre= mysqli_query($con,$dipsql);
	$valor=0;
	while($row=mysqli_fetch_array($dispre)){
		$valor=$row['disponible'];
	}

	if(isset($_POST['co']))
	{	
		$st = $_POST['conf'];
		if($st=="Confirmado")
		{
			$urb = "UPDATE `reservacion` SET `estado`='$st' WHERE idreserva = '$id'";	
			if($valor == 0 )
			{
				echo "<script type='text/javascript'> alert('Lo Siento el área ".$troom." no esta disponible ')</script>";
			}
			else if( mysqli_query($con,$urb))
			{
				$valor=0;
				$aredep = "UPDATE `areadeport` SET `disponible`= '$valor' WHERE idarea = '$are'";
				if(mysqli_query($con,$aredep))
				{									
					echo "<script type='text/javascript'> alert('Reserva Confirmada')</script>";
					echo "<script type='text/javascript'> window.location='home.php'</script>";
				}
			}	                        
		}	
					
	}
?>