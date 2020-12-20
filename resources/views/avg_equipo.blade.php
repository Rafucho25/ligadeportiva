@extends('layout')

@section('body')
<div class="container"><br><br>
    <div class="row">
      <div class="col-sm-3">
        <label for="equipos" class="form-label">Seleccione el equipo</label>
        <select class="form-control" name="equipo" id="equipo">
          @foreach ($equipos as $eq)
              <option value="{{$eq->nombre}}">{{$eq->nombre}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-3">
        <label for="ganados" class="form-label">Juegos Ganados</label>
        <input type="number" class="form-control" id="juegosGanados">
      </div>
      <div class="col-sm-3">
        <label for="perdidos" class="form-label">Juegos Perdidos</label>
        <input type="number" class="form-control" id="juegosPerdidos">
      </div>
      <div class="col-sm-3">
        <label for="total" class="form-label">Total</label>
        <label for="total" name="total" id="total"></label>
      </div>
    </div>
</div>
<div class="container"><br><br>
  <div class="row">
    <div class="col-sm-2">
      <button class="btn btn-primary" onclick="calcularAverage()">Calcular</button>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="/js/average.js"></script>
@endsection