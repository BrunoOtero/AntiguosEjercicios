<?php 
   $Nombre=$_GET["nombre"];
   $Apellido=$_GET["apellido"];
   $DNI=$_GET["DNI"];
    
    echo "
    <!doctype html>
    <html lang='en'>
      <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0' crossorigin='anonymous'>
    <title>Formulario</title>
      </head>
      <body>
      <h3 class='text-center'>Formulario</h3>
      <hr>
      <table class='table table-hover'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'>Nombre</th>
            <th scope='col'>Apellido</th>
            <th scope='col'>DNI</th>
        </tr>
    </thead>
        <tr>
            <td>$Nombre</td>
            <td>$Apellido</td>
            <td>$DNI</td>
        </tr>
    </table>
    </body>
    </html> "
      
?>