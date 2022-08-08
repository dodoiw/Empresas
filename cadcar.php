<?php
require_once "connection.php";

if(isset($_POST['save']))
{    

     $marca = $_POST['marca'];
     $modelo = $_POST['modelo'];
     $cor = $_POST['cor'];
     $sql = "INSERT INTO veiculo (marca, modelo, cor)
     VALUES ('$marca','$modelo','$cor')";
     if (mysqli_query($conn, $sql)) {
        header("location: principal.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
<?php include "include/lib.php"; ?>
    </head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <div class="page-header">
            <h2>Cadastro Carro</h2>
        </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" value="" maxlength="50" required="">
        </div>
        <div class="form-group ">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" value="" maxlength="30" required="">
        </div>
        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control" value="" maxlength="12" required="">
        </div>
            <input type="submit" class="btn btn-primary" name="save" value="submit">
            <a href="principal.php" class="btn btn-default">Cancelar</a>
            </form>
        </div>
        </div> 
        </div>
    </body>
</html>