<?php 
    // $noticias;
    // $noticias[] = [
    //     'n' => 'ggg'
    // ];

    // foreach($noticias as $item){
    //     echo $item['n'];
    // }

    // var_dump($noticias);

    // $noticias[] =[
    //     'n' => 'hola',
    //     't' => 'mundo',
    // ];    

    // foreach($noticias as $item){
    //     echo '<br>' . $item['n'];
    // }

    // var_dump($noticias);

    $repeat = true;

    if ($repeat) {
        $g = 'Hola';
    }

    for ($i=0; $i < 4; $i++) { 
        echo 'Buenas<br>';
    }
?>



<?php if ($proceso) : ?>
        // alert(' >>  CALCULOS DE ESTUDIANTE  <<\n\n' +
        //     '\t\tNombre: <?php echo $nombre ?>\n\n' +
        //     '\t\tNota maxima: <?php echo $mayor ?> \n\n' +
        //     '\t\tNota minima: <?php echo $menor ?>\n\n' +
        //     '\t\tPromedio: <?php echo $prom / 4 ?>\n\n' +
        //     '\t\tStatus: <?php echo ($prom >= 6) ? 'Aprobado' : 'reprobado' ?>'
        // );

        $(document).ready(function () {
            $('#calcular').on('closed.bs.alert', function () {
            Hola
        })    

        });
        
    <?php endif ?>