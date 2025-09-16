<?php
// Credencial estilo INE con detalles extra
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Credencial del INE</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .credencial {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      width: 800px;
      border: 3px solid purple; /* Borde morado */
      overflow: hidden;
      position: relative;
    }
    .titulo {
      font-size: 22px;
      font-weight: bold;
      color: #4b3832;
      padding: 10px 0;
      background: #fff;
      border-bottom: 2px solid purple; /* Línea morada */
      text-align: center;
    }
    .contenido {
      display: flex;
      position: relative;
    }
    .izquierda {
      width: 250px;
      background: #fff; /* Fondo blanco foto y firma */
      text-align: center;
      padding: 20px;
      border-right: 2px solid purple;
    }
    .izquierda img {
      width: 200px;
      border-radius: 8px;
      margin-bottom: 15px;
    }
    .firma img {
      width: 180px;
      height: 60px;
      object-fit: contain;
    }
    .derecha {
      flex: 1;
      background: #fff;
      padding: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }
    .escudo {
      position: absolute;
      top: 15px;
      left: 15px;
      width: 80px;
      opacity: 0.9;
      z-index: 1;
    }
    .republica {
      position: absolute;
      bottom: 15px;
      right: 15px;
      width: 100px;
      opacity: 0.8;
      z-index: 1;
    }
    .dato {
      margin: 5px 0;
      font-size: 16px;
      z-index: 2;
      position: relative;
    }
    .dato strong {
      color: #2e2a27;
    }
    .invalida {
      color: red;
      font-weight: bold;
      margin-top: 15px;
      z-index: 2;
      position: relative;
    }
  </style>
</head>
<body>

  <div class="credencial">
    <div class="titulo">CREDENCIAL DEL INE</div>
    <div class="contenido">
      
      <!-- COLUMNA IZQUIERDA -->
      <div class="izquierda">
        <img src="foto.jpg" alt="Foto">
        <div class="firma">
          <img src="FIRMA.png" alt="Firma">
        </div>
      </div>

      <!-- COLUMNA DERECHA -->
      <div class="derecha">
        <!-- Escudo Nacional en parte superior derecha -->
        <img src="escudonacional.png" alt="Escudo Nacional" class="escudo">
        
        <!-- Mapa de la República en parte inferior derecha -->
        <img src="republicaMexicana.png" alt="República Mexicana" class="republica">

        <div class="dato"><strong>NOMBRE:</strong> DE LA CRUZ NICOLAS MICHELLE</div>
        <div class="dato"><strong>DOMICILIO:</strong> C SIN NOMBRE S/N, LOC SAN PABLO 5470</div>
        <div class="dato"><strong>IDENTIFICACIÓN:</strong> POIUYTREWQASDFGHJK</div>
        <div class="dato"><strong>CURP:</strong> CUNI050620MMCRCXA6</div>
        <div class="dato"><strong>AÑO DE REGISTRO:</strong> 2020</div>
        <div class="dato"><strong>FECHA NACIMIENTO:</strong> 2005-06-20</div>
        <div class="dato"><strong>SECCIÓN:</strong> 0537</div>
        <div class="dato"><strong>VIGENCIA:</strong> 2020-2030</div>
        <div class="invalida">CREDENCIAL NO VÁLIDA</div>
      </div>

    </div>
  </div>

</body>
</html>