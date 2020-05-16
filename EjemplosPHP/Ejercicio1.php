<?php
    if($_POST){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];    
        $proceso = false;    
        
        $numeros = [$nota1, $nota2, $nota3];        
        $mayor = $numeros[0];
        $menor = $numeros[0];
        
        for ($i=0; $i < 3; $i++) {             
            if($numeros[$i] > $mayor){                
                $mayor = $numeros[$i];
            }            

            else if($numeros[$i] < $menor){
                $menor = $numeros[$i];
            }
        }

        $proceso = true;

        // echo 'El mayor es: ' . $mayor . '<br/>';
        // echo 'El menor es: ' . $menor;

    }
    

    // echo '<pre>';
    // echo $nota1;
    // echo '<br>';
    // echo $nota2;
    // echo '<br>';
    // echo $nota3;
    // echo '<br>';
    // echo '</pre>
    //';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Boostrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form method="POST" class="container w-50 border p-5">
            <h1 class="display-6 text-center">Calcular numero mayor</h1>        
            <hr class="my-4 border border-dark">
            <input type="number" name="nota1" class="form-control d-block">
            <input type="number" name="nota2"  class="form-control d-block my-3">
            <input type="number" name="nota3"  class="form-control d-block">
            <input type="submit" value="Calcular" class="form-control btn btn-success my-3 text-white">
        </form>
    </div>
</body>
</html>

<script>
    <?php if($proceso): ?>
        alert('El mayor es: <?php echo $mayor?> \n'
            + 'El menor es: <?php echo $menor?>');
    <?php endif ?>
</script>