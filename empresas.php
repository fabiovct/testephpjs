<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container mt-4">
    <h4>Empresas</h4>

    <table id="example" class="table table-striped table-bordered" style="width:100%">

           <tr>

                <th>Nome</th>
                <th>Empresa</th>

               
            </tr>
              
        <?php


include 'db.php';
$query_consulta_pessoas = "SELECT * FROM pessoas";
$consulta_pessoas = mysqli_query($conexao, $query_consulta_pessoas);
        while($pessoa = mysqli_fetch_array($consulta_pessoas)){
            
            $nome = utf8_encode($pessoa['nome']);
            $empresa = utf8_encode($pessoa['empresa']);
            ?>

<tr>

<td><?php echo $nome ?></td>
<td><?php echo $empresa ?></td>


</tr>

            <?php


        }
        
                ?>

    </table>
    <a class="btn btn-primary" href="../testephpjs/">Voltar</a>

</div>
</html>