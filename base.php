
<?php

//llamar campos
$correo = $_POST['mail'];
$P = $_POST['P'];
$D = $_POST['D'];
$M = $_POST['M'];
$C = $_POST['C'];
$NC = $_POST['NC'];
$NT = $_POST['NT'];
$B = $_POST['B'];
$CP = $_POST['CP'];
$A = $_POST['A'];

//// Datos de correo
$asunto = "Tu orden ha sido envíada";
$contenido = "Tu orden en Krusty Krab Pizza se realizo con éxito y quedo de la siguiente manera: $P\n Departamento de: $D\n Municipio de: $M\n Colonia o residencia: $C\n Numero de  casa: $NC \n
 Numero de  Tarjeta: $NT\n Sabor de Bebida: $B\n Cubierta de Pizza: $CP\nAcompañamiento de Pizza: $A \n ESPERAMOS LLEVAR TU ORDEN EN MENOS DE 30 MINUTOS :)";

//Enviar
mail($correo, $asunto, $contenido);

 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>La Pizza de Don Cangrejo</title>
   </head>
   <body>

 <!--Bootstrap-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="CSS/style.css">
 <!--Menu-->
 <div class="conatiner-fluid"><div class="row"><div class="col-md-12">
 <div class="shadow p-3 mb-5 bg-white rounded">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <img src="Images/logo.png" width="270" height="100" alt="La pizza de Don Cangrejo">

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>&nbsp;&nbsp;&nbsp;&nbsp;
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">

     </nav>
 </div>
 </div></div></div>
 <!--Exito-->
 <br><br>
 <center>
 <div class="card" style="width: 18rem;">
   <div class="card-body">
     <h5 class="card-title"><b>ORDEN REALIZADA CON EXITO!</b></h5>
     <p class="card-text" style="text-align: justify">Muchas gracias por confiar en nosotros, esperamos que puedas disfrutar de tu orden sin ningun problema.</p>
     <a href="https://krustykrabpizza.000webhostapp.com/" class="btn btn-primary">Realizar Otra Orden!</a>
   </div>
 </div>
 </center>
 <!--Creditos-->
 <br><br><br>
 <br><br><hr><div align="center"> © Krusty Krab Pizza 2019 </div>
 <div align="center"> Sitio creado por <b>Alejandro Avalos</b> </div><br>

 <!--Final-->
   </body>
 </html>
