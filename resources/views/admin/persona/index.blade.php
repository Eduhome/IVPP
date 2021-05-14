<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<style>
 .w-5{
    width: 24px;
 }
 .h-5{
    width: 24px;
 }
</style>
<div class="container">
<table class= "table table-bordered table-striped">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>celular</th>
        </tr>

    </thead>


<tbody>
@foreach($personas as $persona)
<tr>
    <td>{{$persona->nombre}}</td>
    <td>{{$persona->apellido}}</td>
    <td>{{$persona->celular}}</td>
</tr>

@endforeach

</tbody>
</table>

{{$personas->render()}}
</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>