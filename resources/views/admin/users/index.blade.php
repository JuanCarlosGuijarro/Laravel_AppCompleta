<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal del administrador</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<h1 style="text-align:center ; margin:50px 0 ">Página principal del administrador</h1>

<table width="500" class="table">
<tr>
    <th scope="col">Id</th>
    <th scope="col">Foto</th>
    <th scope="col">Role Id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Email</th>
    <th scope="col">Creado</th>
    <th scope="col">Actualizado</th>
</tr>

@if($users)
    @foreach($users as $user)

    <tr>
        <td>{{$user->id}}</td>
        @if($user->foto)
        <td><img src="/images/{{$user->foto->ruta_foto}}" width="150"/></td>
        @else
        <td><img src="/images/fototipo.png" width="150"/></td>
        @endif
        <td>{{$user->role_id}}</td>
        <td><a href="{{route('users.edit',$user->id)}}"> {{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
    </tr>

    @endforeach
@endif
</table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



</body>
</html>