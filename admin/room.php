<?php 
include('db.php');
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Club Deportivo</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                    <span class="sr-only">Navegación de palanca</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="font-size: 25px" class="navbar-brand" href="home.php">MENÚ PRINCIPAL </a>
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
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Estado de las áreas</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Agregar área deportiva</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i>Eliminar área deportiva</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          NUEVA ÁREA DEPORTIVA<small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         AGREGAR NUEVA ÁREA DEPORTIVA

                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                <label> Disciplina*</label>
                                    <select id="disc" name="disc"  class="form-control" required onChange="recargarLista(this.value)">
                                        <option value="0" >--Seleccione--</option>
                                        <?php
                                            $consultar="select * from disciplina";
                                            $resultado= mysqli_query($con,$consultar);
                                            while($row=mysqli_fetch_array($resultado))
                                            {
                                                echo"<option value=".$row['idtipo'].">".$row['nombre']."</option>";
                                            }
                                        ?>
                                    </select>
                            </div>
							  
							<div class="form-group">
                                    <label>Área Deportiva</label>
                                    <input name="adeport" type ="text" class="form-control" required>  
                            </div>

                            <div class="form-group">
                                    <label>Aforo</label>
                                    <input name="aforo" type ="number" class="form-control" required>  
                            </div>

							 <input type="submit" name="add" value="Añadir" class="btn btn-primary"> 
							</form>
							<?php
							 if(isset($_POST['add']))
							 {
								$disc = $_POST['disc'];
								$adeport = $_POST['adeport'];
								$aforo = $_POST['aforo'];
                                $disp = 1;
							 
										
								$sql ="INSERT INTO `areadeport`(`nombre`,`aforo`,`disponible`,`disciplina`) VALUES ('$adeport','$aforo','$disp','$disc')" ;
								if(mysqli_query($con,$sql))
								{
									echo '<script>alert("Se ha añadido con éxito") </script>' ;
								}else {
									echo '<script>alert("Lo siento ! Revise su sistema") </script>' ;
								}
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         INFORMACIÓN DE ÁREAS DEPORTIVAS

                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from room limit 0,10";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>DISCIPLINA</th>
											<th>ÁREA DEPORTIVA</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['bedding']."</th>
												</tr>";
											
											}
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
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
