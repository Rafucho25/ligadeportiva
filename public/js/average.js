function calcularAverage(){
    
    var equipo = document.getElementById("equipo").value;
    var ganados = document.getElementById("juegosGanados").value;
    var perdidos = document.getElementById("juegosPerdidos").value;
    var total = Number(ganados) + Number(perdidos); 
    var avgGanados = ganados / total;
    var avgPerdidos = perdidos / total;
    document.getElementById('total').innerHTML = 'El equipo ' + equipo  + ' tiene un average de ganados en : ' + avgGanados + 
    ' y de perdidos en: ' + avgPerdidos;
}