////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////// PRACTICA 1 ////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var idPasatiempo;

//Mostrar la hora 
function fechayHora() {
  var d = new Date();
  var n = d.toLocaleString();
  document.getElementById("fechayHora").innerHTML = n;

}

var contador = 3;
var arrayAlf = [];

function solicitud() {
  fetch('https://ordenalfabetix.unileon.es/aw/diccionario.txt', { crossorigin: "anonymous" })
    .then(response => response.text())
    .then(resultText => funcionArray(resultText))
    .catch(err => console.log(err));
}
solicitud();

function funcionArray(resultText) {
  console.log(resultText);
  arrayAlf = resultText.split("\n");
  //alert(arrayAlf);
  //comprobarPalabras(arrayAlf);
}


function pruebaArray(arrayAlf) {
  console.log("Separación")
  for (var i = 0; i < 10; i++) {
    var element = arrayAlf[i];
    console.log(element)

  }
  //console.log(arrayAlf[200]);
}




//comprobar palabras del tablero en dic
function comprobarPalabras() {

  var String_Aux = ""

  //BLOQUE DE TABLERO DE 4
  for (var i = 1; i <= 24; i += 4) {
    for (var j = i; j < i + 4; j++) {
      String_Aux += document.getElementById(j).value;
      //alert(String_Aux);
    }
    //alert(String_Aux.length);
    if (String_Aux.length == 4) {
      //if (i != 1 && i != 21) {
        var comprobar = buscarDic(String_Aux);
        if (comprobar == false) {
          alert("La palabra " + String_Aux + " no pertenece al dicc.");
        }
      /*} else if (i == 1) {
        if (String_Aux.toLowerCase() != "clan") {
          alert("La palabra clave " + String_Aux + " es erronea");
        }
      } else if (i == 21) {
        if (String_Aux.toLowerCase() != "pena") {
          alert("La palabra clave " + String_Aux + " es erronea");
        }
      }
      */
      String_Aux = "";//vaciamos el string para cada palabra

    }
  }
  //BLOQUE DEL TABLERO DE 6
  for (var i = 25; i <= 60; i += 6) {
    for (var j = i; j < i + 6; j++) {
      String_Aux += document.getElementById(j).value;
    }
    if (String_Aux.length == 6) {
      //if (i != 25 && i != 55) {
        var comprobar = buscarDic(String_Aux);
        if (comprobar == false) {
          alert("La palabra " + String_Aux + " no pertenece al dicc.");
        }
      /*} else if (i == 25) {
        if (String_Aux.toLowerCase() != "acorde") {
          alert("La palabra clave " + String_Aux + " es erronea");
        }
      } else if (i == 55) {
        if (String_Aux.toLowerCase() != "torero") {
          alert("La palabra clave " + String_Aux + " es erronea");
        }
      }
      */
      String_Aux = "";//vaciamos el string para cada palabra

    }

  }
}


function generarPista() {
  if (contador > 0) {
    contador--;
    var palabra = "";
    for (var i = 1; i <= 6; i++) {
      if (document.getElementById("Pista" + i).value) {
        palabra += document.getElementById("Pista" + i).value;
      }
    }

    //metemos la palabra en un array
    var stringAux = "";
    var listaFinal = [];
    var x = 0; //contador
    //identificamos las palabras del dic que tengan esas letras
    for (var i = 0; i < arrayAlf.length; i++) {
      var arrayDic = Array.from(arrayAlf[i].toLowerCase());
      stringAux = "";
      for (let j = 0; j < palabra.length; j++) {
        //arrayPalabra = Array.from(palabra.toLowerCase());
        for (var k = 0; k < arrayDic.length; k++) {
          if (palabra[j].toLowerCase() == arrayDic[k]) {
            stringAux += palabra[j];
            arrayDic[k] = " ";
            break;
          }

        }

      }

      if (stringAux.length == palabra.length) {
        //alert("hola buenas" + palabra)
        if (arrayAlf[i].length == palabra.length) {
          listaFinal[x] = arrayAlf[i];
          x++;
        }
      }

    }
    alert("Pistas: \n" + listaFinal);
    /*
    var elemento = document.createElement("span");
    var texto = document.createTextNode(listaFinal);
    elemento.appendChild(texto);
    document.getElementById("pistas").appendChild(elemento);
    */
    var elemento = document.createElement("span");
    elemento.setAttribute("id", "resto");
    var texto = document.createTextNode("Oportunidades de pista restantes: " + contador);
    elemento.appendChild(texto);
    var elementoOriginal = document.getElementById("resto");
    var padre = document.getElementById("resto").parentNode;
    padre.replaceChild(elemento, elementoOriginal);
  } else {
    alert("Se ha superdado el número de pistas.");
  }
}


//funcion para comparar el string con las del diccionario
function buscarDic(String_Aux) {
  for (var i = 0; i < arrayAlf.length; i++) {
    if (arrayAlf[i].localeCompare(String_Aux, undefined, { sensitivity: 'base' }) === 0) {
      return true;
    }

  }
  return false;

}

//almacenamiento local
function guardar() {
  for (var i = 1; i <= 60; i++) {//recorro todas las casillas
    localStorage.setItem(i + "-" + i, document.getElementById(i).value);
  }
  alert("Se ha guardado el tablero actual");
}


function cargar() {
  for (var i = 1; i <= 60; i++) {//recorro todas las casillas
    document.getElementById(i).value = localStorage.getItem(i + "-" + i);
  }
  alert("Carga completa del tablero en memoria");
}

function borrar() {
  localStorage.clear();
  alert("Se ha borrado el almacenamiento local");
}


function vaciarTablero(){
  for (var i = 1; i <= 60; i++) {//recorro todas las casillas
    document.getElementById(i).value = "";
  }
}


//fechayHora();
setInterval(fechayHora, 1000);



function pasatiempoCompleto(){
  var String_Aux = ""

  //BLOQUE DEL TABLERO DE 4
  for (var i = 1; i <= 24; i += 4) {
    String_Aux = "";
    for (var j = i; j < i + 4; j++) {
      String_Aux += document.getElementById(j).value;
    }
    if (String_Aux.length != 4) {
      String_Aux = "";
      alert("Debes rellenar todas las casillas")
      return false;
    }
  }

  //BLOQUE DEL TABLERO DE 6
  for (var i = 25; i <= 60; i += 6) {
    String_Aux ="";
    for (var j = i; j < i + 6; j++) {
      String_Aux += document.getElementById(j).value;
    }
    if (String_Aux.length != 6) {
      String_Aux = "";
      alert("Debes rellenar todas las casillas")
      return false;
    }
  }
  return true;
}


function compruebaSolucionValida(){
  
  var String_Aux = "";
  var palabrasolu = "";
  var cont = 1;
  var cont2 = 7;
   
  //BLOQUE DE TABLERO DE 4
  for (var i = 1; i <= 24; i += 4) {
    String_Aux = "";
    for (var j = i; j < i + 4; j++) {
      String_Aux += document.getElementById(j).value;
    
    }
    palabrasolu = document.getElementById("solu"+cont).value;
    if (i == 1) {
      if (String_Aux.toLowerCase() != palabrasolu) {
        alert("La palabra clave 1 " + String_Aux + " es erronea. La respuesta correcta sería: "+ palabrasolu);
      }
    }else if (i == 21) {
        if (String_Aux.toLowerCase() != palabrasolu) {
          alert("La palabra clave 2 " + String_Aux + " es erronea. La respuesta correcta sería: "+ palabrasolu);
        }
    }
      String_Aux = "";//vaciamos el string para cada palabra  
      palabrasolu = "";
      cont++;
  }

  
  //BLOQUE DEL TABLERO DE 6
  for (var i = 25; i <= 60; i += 6) {
    String_Aux = "";
    for (var j = i; j < i + 6; j++) {
      String_Aux += document.getElementById(j).value;
    
    }
    palabrasolu = document.getElementById("solu"+cont2).value;
    if (i == 25) {
      if (String_Aux.toLowerCase() != palabrasolu) {
        alert("La palabra clave 3 " + String_Aux + " es erronea. La respuesta correcta sería: "+ palabrasolu);
      }
    }else if (i == 55) {
        if (String_Aux.toLowerCase() != palabrasolu) {
          alert("La palabra clave 4 " + String_Aux + " es erronea. La respuesta correcta sería: "+ palabrasolu);
        }
    }
      String_Aux = "";//vaciamos el string para cada palabra  
      palabrasolu = "";
      cont2++;
  }



}


////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////// PRACTICA 2 ////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

////////////////////Peticion 1//////////////////////////


$(document).on("click", "#p1", function(){//jquery
  idPasatiempo = 1;
  $.ajax({//llamada ajax al servidor
    url: './conectar.php',
    type: 'POST',//tipo de llamada
    data: {//datos que se le pasan al servidor
      'funcionRespuesta': 'recibirPasatiempo',//metodo de pedir al servidor
      'id': 1,//id de la base de datos
    },
    dataType: "JSON",//tipo de datos que mandamos o recibidos codificados con json
  }).done(function(respuesta){//lo que se ejecuta cuando nos den la respuesta de la llamada
    $(".contenedor").html(respuesta.res);//.res carga el contenido de lo que se recibe del servidor

  })


})


////////////////////Peticion 2//////////////////////////

$(document).on("click", "#p2", function(){//jquery
  idPasatiempo = 2;
  $.ajax({//llamada ajax al servidor
    url: './conectar.php',
    type: 'POST',//tipo de llamada
    data: {//datos que se le pasan al servidor
      'funcionRespuesta': 'recibirPasatiempo',//metodo de pedir al servidor
      'id': 2,//id de la base de datos
    },
    dataType: "JSON",//tipo de datos que mandamos o recibidos codificados con json
  }).done(function(respuesta){//lo que se ejecuta cuando nos den la respuesta de la llamada
    $(".contenedor").html(respuesta.res);//.res carga el contenido de lo que se recibe del servidor

  })


})



////////////////////Peticion 3//////////////////////////

$(document).on("click", "#p3", function(){//jquery
  idPasatiempo = 3;
  $.ajax({//llamada ajax al servidor
    url: './conectar.php',
    type: 'POST',//tipo de llamada
    data: {//datos que se le pasan al servidor
      'funcionRespuesta': 'recibirPasatiempo',//metodo de pedir al servidor
      'id': 3,//id de la base de datos
    },
    dataType: "JSON",//tipo de datos que mandamos o recibidos codificados con json
  }).done(function(respuesta){//lo que se ejecuta cuando nos den la respuesta de la llamada
    $(".contenedor").html(respuesta.res);//.res carga el contenido de lo que se recibe del servidor

  })


})

/////////////////////Respuesta////////////////////// 

$(document).on("click", "#solu", function(){//jquery
  if(pasatiempoCompleto()){ 
    $.ajax({//llamada ajax al servidor
      url: './conectar.php',
      type: 'POST',//tipo de llamada
      data: {//datos que se le pasan al servidor
        'funcionRespuesta': 'getSolucion',//metodo de pedir al servidor
        'id': idPasatiempo,//id de la base de datos
      },
      dataType: "JSON",//tipo de datos que mandamos o recibidos codificados con json
    }).done(function(respuesta){//lo que se ejecuta cuando nos den la respuesta de la llamada
      $(".otrocontenedor").html(respuesta.res);//.res carga el contenido de lo que se recibe del servidor
      compruebaSolucionValida();
    })
  }


})
