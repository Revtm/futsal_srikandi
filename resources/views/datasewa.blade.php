<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data sewa</title>
  </head>
  <body>
    @for ($i=0 ; $i < count($req->jam) ; $i++)
      <ul>
        <li>{{$req->nama}}</li>
        <li>{{$req->kontak}}</li>

        <li>{{$req->jam[$i]}}</li>
        <li>{{$req->lokasi[$i]}}</li>
      </ul>
    @endfor

  </body>
</html>
