@extends('.home')

@section('contenido')

<div class="row justify-content-center">
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total de ventas</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
                <li>
                    <div id="sparklinedash"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </li>
                <li class="ms-auto"><span class="counter text-success">{{  $venT }}</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total de Ganancia</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
                <li>
                    <div id="sparklinedash2"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </li>
                <li class="ms-auto"><span class="counter text-purple">{{ $ventS }} pesos</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total de Iventarios</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
                <li>
                    <div id="sparklinedash3"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </li>
                <li class="ms-auto"><span class="counter text-info">911</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Datos del home page-->
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Ultimas Ventas</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                        <option>March 2021</option>
                        <option>April 2021</option>
                        <option>May 2021</option>
                        <option>June 2021</option>
                        <option>July 2021</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#ID</th>
                            <th class="border-top-0">#ID-USER</th>
                            <th class="border-top-0">Producto</th>
                            <th class="border-top-0">Cantidad</th>
                            <th class="border-top-0">Precio</th>
                            <th class="border-top-0">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ventasList as $item )
                        <tr>
                            <td>{{$item->id}}</td>
                            <td class="txt-oflo">{{ $item->id_user }}</td>
                            <td>{{ $item->producto }}</td>
                            <td class="txt-oflo">{{ $item->cantidad }}</td>
                            <td><span class="text-success">{{ $item->precio }}</span></td>
                            <td>{{ $item->fecha }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection
