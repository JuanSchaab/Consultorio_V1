<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($horarios as $item)                                               
    <?php //echo $item->inicio_manana ?>
@endforeach   
@php
    
    //echo var_dump($array);
    echo $horarios->inicio_manana;
    
    //echo $array->inicio_manana
@endphp   
</body>
</html>

