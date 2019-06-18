<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="margin:60px">
  {{-- @dd($cursos); --}}
    @foreach ($cursos as $curso)
      @foreach ($curso as $info)
    <h1 style="font-family:sans-serif; font-size:20px">{{$info['curso']}}</h1>
    <p style="font-family:sans-serif; font-size:12px">{{$info['descripcion']}}</p>
    <a style="font-family:sans-serif; font-size:11px" href="cursos/comisiones/{{$info['id']}}">Ver comisiones >> </a>
      @endforeach
    @endforeach
  </body>
</html>
