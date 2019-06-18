<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="margin:60px">
{{-- @dd($comisiones); --}}
    @foreach ($comisiones as $comision)

        <h1 style="font-family:sans-serif; font-size:20px">Sede: {{$comision['sede']}}</h1>
        <h2 style="font-family:sans-serif; font-size:12px">Turno: {{$comision['turno']}}</h2>
        <h2 style="font-family:sans-serif; font-size:12px">Horario: {{$comision['horarios']}}</h2>
        <h2 style="font-family:sans-serif; font-size:12px">Dias: {{$comision['dias']}}</h2>

    @endforeach
    <a style="font-family:sans-serif; font-size:11px" href="/cursos"> << Volver a Cursos</a>
  </body>
</html>
