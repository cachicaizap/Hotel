<?php
    include('db.php');
    $disciplina=$_POST['disciplin'];

    $sql="SELECT idarea, nombre
    from areadeport 
    where disciplina='$disciplina'";

    $result=mysqli_query($con,$sql);

    $cadena="<option value='0' >--Seleccione--</option>";

    while ($row=mysqli_fetch_array($result)) {
        $cadena=$cadena.'<option value='.$row['idarea'].'>'.$row['idarea']." ".$row['nombre'].'</option>';
    }

    echo  $cadena;
?>