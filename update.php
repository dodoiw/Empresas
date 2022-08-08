<?php
// Include database connection file
require_once "connection.php";

    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE veiculo set  marca='" . $_POST['marca'] . "', modelo='" . $_POST['modelo'] . "' ,cor='" . $_POST['cor'] . "' WHERE id_veiculo='" . $_POST['id_veiculo'] . "'");
     
     header("location: lista.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM veiculo WHERE id_veiculo='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "include/lib.php"; ?>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Alterar</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="marca" class="form-control" value="<?php echo $row["marca"]; ?>" maxlength="50" required="">
                            
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo $row["modelo"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="cor" class="form-control" value="<?php echo $row["cor"]; ?>" maxlength="12"required="">
                        </div>
                        <input type="hidden" name="id_veiculo" value="<?php echo $row["id_veiculo"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Alterar">
                        <a href="lista.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>  
        </div>
</body>
</html>