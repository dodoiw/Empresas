2<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php include "include/lib.php"; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Carros</h2>
                        <a href="cadcar.php" class="btn btn-success pull-right">Adicionar Carro</a>
                        <a href="principal.php" class="btn btn-success pull-right">Voltar</a>
                    </div>
                   <?php
                    include_once 'connection.php';
                    $result = mysqli_query($conn,"SELECT * FROM veiculo");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
                      <tr>
                        <td>Marca</td>
                        <td>Modelo</td>
                        <td>Cor</td>
                        <td>Alterar</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["marca"]; ?></td>
                        <td><?php echo $row["modelo"]; ?></td>
                        <td><?php echo ($row["cor"])?($row["cor"]):('N/A'); ?></td>
                        <td><a href="update.php?id=<?php echo $row["id_veiculo"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href="delete.php?id=<?php echo $row["id_veiculo"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

                </div>
            </div>     
        </div>

</body>
</html>