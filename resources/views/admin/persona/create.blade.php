



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

@csrf
<form class="container" action="{{route('persona.store')}}" method="post" >

       
        <div class="row">
            <div class="col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class=form-control>
            </div>
            <div class="col-md-3">
                <label for="apellido">apellido</label>
                <input type="text" name="apellido" id="apellido" class=form-control>
            </div>
            <div class="col-md-3">
                <label for="celular">celular</label>
                <input type="text" name="celular" id="celular" class=form-control>
            </div>
            <div class="col-md-3">
                <label for="ci">ci</label>
                <input type="text" name="ci" id="ci" class=form-control>
            </div>
            <div class="col-md-3">
                <label for="estado">estado</label>
                <input type="text" name="estado" id="estado" class=form-control>
            
            </div>
            <div class="col-md-3">
            <input type="submit" value="Registrar" class="btn btn-success btn-block mt-4">
            
            </div>
        </div>

</form>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</body>
</html>