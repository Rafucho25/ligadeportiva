@extends('layout')

@section('body')
<div class="container"><br><br>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <label for="equipos" class="form-label">Nombre del Jugador</label>
        <input type="text" class="form-control" name="nombreJugador" id="nombreJugador"><br><br>
        <button class="btn btn-primary" onclick="buscarJugador()">Buscar</button><br><br>
        <label for="resultado" name="resultado" id="resultado"></label>
      </div>
    </div>
</div>
@endsection

@section('script')
<script>
function buscarJugador(){
    
    var jugador = document.getElementById("nombreJugador").value;

    $.ajax({
        type: "get",
        url: "{!! route('findplayer') !!}" + "/" + jugador 
    }).done(function(data){
        if(Object.entries(data).length !== 0){
            document.getElementById('resultado').innerHTML = 'El jugador ' + data.nombre_jugador + ' pertenece al ' + data.nombre_equipo;
        }else{
            document.getElementById('resultado').innerHTML = 'Jugador no encontrado, favor verificar el nombre.';
        }
    })
}
</script>
@endsection