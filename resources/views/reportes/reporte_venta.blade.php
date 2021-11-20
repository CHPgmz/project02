
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reporte PDF</title>
 
<style type="text/css" >
    table {
      width: 90%;
      border:  1px solid #000;
      border-collapse: collapse;
      margin: auto;

    }

    th, td {
      width: 25%;
      text-align: center;
      vertical-align: top;
      
      border:  1px solid #000;
      padding: 0.3em;
      caption-side: bottom;
    }

    caption {
      padding: 0.3em;
      color: #fff;
      background-color: #000;
    }

    th {
      background: #eee;
    }

    p.titulo {
      font-family: monospace;
      font-size: 18px;
      font-weight: bolder;
      text-align:  center;
      
    }

    p.fecha {
      float: right;
    }

    div.head {

      display: flex;
      justify-content: center;
      align-items: center;
    }
</style>

</head>

<body>
<div class="container">
  <div class="head">
    <p class="titulo">Reporte de Ventas</p>
    <p class="fecha">15/12/2021</p>
  </div>
	
    <table>
      <thead id="1">
        <tr id="1">
          <th>ID</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        {{$ventasList = App\Models\Ventas::all();}}
        @foreach($ventasList as $item )
        <tr>
          <td>{{$item->id}}</td>
          <td>{{ $item->producto }}</td>
          <td>{{ $item->cantidad }}</td>
          <td>${{ $item->precio }}</td>
          <td>{{ $item->fecha }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

</div>

<footer>
  <div>
    <p>1</p>
  </div>
</footer>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
</body>
</html>
