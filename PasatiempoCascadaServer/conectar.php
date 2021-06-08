<?php

require("connectionn.php");

//objeto de la clase connectionn
$connectionn = new connectionn();

$funcion = $_REQUEST["funcionRespuesta"];//request le pdes a la llamada que te de esa informacion
$id = $_REQUEST["id"];

if($funcion == "recibirPasatiempo"){
    $querySelect = "SELECT pistas1, pistas2, pistas3, pistas4 FROM pasatiempos WHERE identificadorPas='" . $id. "'";
    $recogeLlamada = $connectionn->SQL($querySelect);//metodo en connectionn
    $html = "<table class=tablaInicial >
    <tr><!-- filas -->
      <td class=a width='30%'> <!-- columnas -->
  
            <!-- Tabla 3 para contener unicamente el tablero -->        
            <table id='tabla' width='200' height='400px'; border='2' cellspacing='1' cellpadding='5'>
            <tr align='center'>
            <td ><input type='text' id='1' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='2' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='3' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='4' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td>1</td>
            </tr>


            <tr align='center'>
            <td ><input type='text' id='5' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='6' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='7' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='8' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>


            <tr align='center'>
            <td ><input type='text' id='9'  name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='10' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='11' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='12' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='13' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='14' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='15' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='16' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='17' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='18' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='19' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='20' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='21' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='22' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='23' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='24' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td>2</td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='25' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='26' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='27' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='28' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='29' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='30' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td>3</td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='31' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='32' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='33' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='34' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='35' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='36' name=nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='37' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='38' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='39' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='40' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='41' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='42' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='43' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='44' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='45' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='46' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='47' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='48' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='49' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='50' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='51' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='52' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='53' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='54' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            </tr>

            <tr align='center'>
            <td ><input type='text' id='55' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='56' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='57' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='58' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='59' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td ><input type='text' id='60' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
            <td>4</td>
            </tr>
          </table><!-- Fin Tabla 3 --> 

          <button onclick=comprobarPalabras()>Compruebame</button>
          <button onclick=vaciarTablero()>Vaciar Tablero</button>
          <button id='solu'>Solucion</button>

      </td> 

      <td vertical-align= 'text-top'>
        <h2 class=a>
          <b>Descripción:</b><br>
        </h2>
        <p class=a>
          Identifique la primera palabra y la ultima de cada bloque con ls pistas que se dan.
          A continuación trate de descubir las palabras intermedias.
          Para lograrlo cambie una letra de la primera palabra para obtener la próxima y, después, altere el orden de una o varias letras para encontrar la siguiente.
          Siga así sucesivamente hasta que logre completar ambos casilleros. 
          Todas las palabras intermedias deberan tener significado.
        </p>
        
        <h2 class=a>
          <b>Definiciones:</b><br>
        </h2>
        <p class=a>
        <strong>1 Primera fila:</strong>".$recogeLlamada[0]["pistas1"]."<br>
        <strong>2 Sexta fila:</strong>".$recogeLlamada[0]["pistas2"]."<br>
        <strong>3 Septima fila:</strong>".$recogeLlamada[0]["pistas3"]."<br>
        <strong>4 Última fila:</strong>".$recogeLlamada[0]["pistas4"]."<br>
        </p>


        <p id= 'resto'>Oportunidades de pista restantes: 3</p>

        <button onclick='generarPista()'>Pista</button><br>
        <table id='tabla' width='20' height='20px'; border='2' cellspacing='1' cellpadding='5'>
          <tr align='center'>
          <td ><input type='text' id='Pista1' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
          <td ><input type='text' id='Pista2' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
          <td ><input type='text' id='Pista3' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
          <td ><input type='text' id='Pista4' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
          <td ><input type='text' id='Pista5' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>
          <td ><input type='text' id='Pista6' name='nombre' maxlength='1' style='width : 25px; heigth : 2px'></td>

          </tr>
        </table><br>
        <!-- <p id='pistas'> </p> -->

        <button onclick='guardar()'>Guardar</button>
        <button onclick='cargar()'>Cargar</button>
        <button onclick='borrar()'>Borrar memoria</button>


     </td>    


    </tr>   
      
    <div class='otrocontenedor'>
       

    </div>



</table><!-- Fin Tabla 1 -->
";//variable donde vamos a guardar todo el codigo

    $solucion = $html;
}else if($funcion == "getSolucion"){
  $queryRespuesta = "SELECT * FROM pasatiempos WHERE identificadorPas='" . $id. "'";
  $recogeRespuesta = $connectionn->SQL($queryRespuesta);
  $solucion ="<div>
  <strong>1 Primera palabra:</strong><input type='text' id= 'solu1' value=".$recogeRespuesta[0]["palabra1"]."><br>
  <strong>2 Segunda palabra:</strong><input type='text' id= 'solu2' value=".$recogeRespuesta[0]["palabra2"]."><br>
  <strong>3 Tercera palabra:</strong><input type='text' id= 'solu3' value=".$recogeRespuesta[0]["palabra3"]."><br>
  <strong>4 Cuarta palabra:</strong><input type='text' id= 'solu4' value=".$recogeRespuesta[0]["palabra4"]."><br>
  <strong>5 Quinta palabra:</strong><input type='text' id= 'solu5' value=".$recogeRespuesta[0]["palabra5"]."><br>
  <strong>6 Sexta palabra:</strong><input type='text' id= 'solu6' value=".$recogeRespuesta[0]["palabra6"]."><br>
  <strong>7 Septima palabra:</strong><input type='text' id= 'solu7' value=".$recogeRespuesta[0]["palabra7"]."><br>
  <strong>8 Octava palabra:</strong><input type='text' id= 'solu8' value=".$recogeRespuesta[0]["palabra8"]."><br>
  <strong>9 Novena palabra:</strong><input type='text' id= 'solu9' value=".$recogeRespuesta[0]["palabra9"]."><br>
  <strong>10 Decima palabra:</strong><input type='text' id= 'solu10' value=".$recogeRespuesta[0]["palabra10"]."><br>
  <strong>11 Undecima palabra:</strong><input type='text' id= 'solu11' value=".$recogeRespuesta[0]["palabra11"]."><br>
  <strong>12 Doceaba palabra:</strong><input type='text' id= 'solu12' value=".$recogeRespuesta[0]["palabra12"]."><br>

  </div>
  ";
}

$result = ["res"=>$solucion];
echo json_encode($result, JSON_UNESCAPED_UNICODE);








