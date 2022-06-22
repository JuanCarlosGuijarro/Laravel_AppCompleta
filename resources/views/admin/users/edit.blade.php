<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align:center ; margin:50px 0 ">Página para editar usuarios</h1>

    {!! Form::model($user,['method'=>'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}

<table width="500" class="table">

<tr>
<!-- @if($user->foto)
        <td><img src="/images/{{$user->foto->ruta_foto}}" width="150"/></td>
@else
        <td><img src="/images/fototipo.png" width="150"/></td>
@endif -->
<img src="/images/{{$user->foto ? $user->foto->ruta_foto : 'fototipo.png'}}" width="150" />
</tr>

<tr>
<td colspan="2">  {!! Form::file('foto_id') !!}                  </td>
</tr>

<tr>
    <td>  {!! Form::label('name', 'Nombre: ') !!}  </td>
    <td>  {!! Form::text('name') !!}                  </td>
</tr>

<tr>
    <td>  {!! Form::label('email', 'E-Mail: ') !!}  </td>
    <td>  {!! Form::text('email') !!}                  </td>
</tr>
<tr>
    <td>  {!! Form::label('email_verified_at', 'Verificar E-Mail:') !!}  </td>
    <td>  {!! Form::text('email_verified_at') !!}                  </td>
</tr>
<tr>
    <td>  {!! Form::label('role', 'Role: ') !!}  </td>
    <td>  {!! Form::text('role_id') !!}                  </td>
</tr>

<tr>
    <td>  {!! Form::submit('Modificar usuario') !!}  </td>
    <td>  {!! Form::reset('Borrar') !!}                  </td>
</tr>

</table>
{!! Form::close() !!}

{!! Form::model($user,['method'=>'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}

{!! Form::submit('Eliminar usuario') !!} 

{!! Form::close() !!}


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>