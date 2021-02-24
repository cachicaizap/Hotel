<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head class="cabeza">
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVACION HOTEL Amanecer</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/css/main.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Página principal</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVACION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
INFORMACION PERSONAL
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                       
							  <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Apellido</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
				
				
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                     INFORMACIÓN DE RESERVA

                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Area Deportiva*</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Cancha Futbol">Cancha de Futbol</option>
                                                <option value="Cancha Tennis">Cancha de Tennis</option>
												<option value="Area Golf">Area de Golf</option>
												<option value="Piscina">Piscina
</option>
                                            </select>
                              </div>

							  <div class="form-group">
                                            <label>No. Area deportiva*</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                
                                                <?php 
                                                 include ('db.php');
                                                 $sql="Select id from roombook";
                                                 $respuesta=mysqli_query($con,$sql);
                                                 while($row=mysqli_fetch_array($respuesta)){
                                                    echo "<option value=".$row[id].">".$row[id]."</option>";
                                            }
                                                ?>

                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label name>Desea un Asistente?</label><br>
                                            <input type="checkbox" value="aceptado" name="asis" default="rechazo"> <label for="asis"> SI</label> 
                                  
                              </div>
							  <div class="form-group">
                                            <label>Dia de Entrada</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Hora de Entrada</label>
                                            <input name="hora_entrada" type ="time" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Hora de Salida</label>
                                            <input name="hora_salida" type ="time" class="form-control">
                                            
                               </div>

                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                                            

					<input type="submit" name="submit" id= bt_enviar class="btn btn-primary">
                        <br>
                        <br>
						<?php
							if(isset($_POST['submit']))
							{
							
							
									//$con=mysqli_connect("localhost","root","","hotel");
                                    include('db.php');
                                    
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
                                    ?>

											<div class="alert  alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                     <strong>ERROR</strong> LA RESERVACION YA EXISTE
                                            </div> 
										
                                    <?php
									}

									else
									{
										$new ="Not Conform";
                                        
                                    //Calculo de tiempo de estancia     
                                        $hora1= new DateTime("$_POST[hora_entrada]");
                                        $hora2= new DateTime("$_POST[hora_salida]");
                                        $dateInterval=$hora1->diff($hora2);
                                        $estancia_horas=$dateInterval->format('%H');
                                        $estancia_minutos=$dateInterval->format('%i');
                                        $estancia_min_fin=$estancia_minutos/60;
                                        $estancia=$estancia_horas+$estancia_min_fin;
                                        $estancia=(double)$estancia;
                                        //echo "<script type='text/javascript'> alert('".$estancia."')</script>";
                                        
                                        if(isset($_POST['asis'])){
                                            $newUser="INSERT INTO `roombook`(`FName`, `LName`, `Email`, `Phone`, `TRoom`,`Bed`,`NRoom`, `cin`,`stat`,`nodays`,`InicioHora`,`FinHora`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[asis]','$_POST[nroom]','$_POST[cin]','$new','$estancia','$_POST[hora_entrada]','$_POST[hora_salida]')";    
                                            
                                        }else{
                                            $rechazado="rechazado";
                                            $newUser="INSERT INTO `roombook`(`FName`, `LName`, `Email`, `Phone`, `TRoom`,`Bed`,`NRoom`, `cin`,`stat`,`nodays`,`InicioHora`,`FinHora`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$rechazado','$_POST[nroom]','$_POST[cin]','$new','$estancia','$_POST[hora_entrada]','$_POST[hora_salida]')";    
                                            
                                        }


										
										if (mysqli_query($con,$newUser))
										{
											
										?>
                                            <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                     RESERVACION REALIZADA CORRECTAMENTE
                                            </div> 
                                            <div class="agregacion-botones">
                                            <button type="button" class="btn btn-success" id="bt-imprimir"><a href="printReserva.php" class="boton-print" target="_blank"">Imprimir Reservacion</a></button>
                                            <button type="button" class="btn btn-primary"><a href="reservation.php">Realizar Nueva Reserva</a></button>
                                            
                                            </div>
                                            
                                            
                                        <?php

										}
										else
										{
                                        ?>
											<div class="alert  alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                     ERROR AL REGISTRAR RESERVACION
                                            </div> 
										<?php	
										}
									}

							
							
							}
							?>
						</form>
							
                    </div>
                    
                    
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
        



     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <script src="assets/js/modf.js"></script>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
   
</body>
</html>
