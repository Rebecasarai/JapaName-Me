<html>
  <head>
    <title>Traductor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
  <div class=" header-trad">
  <div class="container header-">

    <div><img src="logojapones.png" class="img-responsive logo"></div>

  <h3>A que siempre quisiste saber cómo serías de Japonés!</h3>
  <p><a class="btn btn-danger btn-lg" href="#seccion-traductor" role="button">¡Empezar!</a></p>
</div>
</div>
    <div class="container">


    <div class="padding">
    <form method="post" action="index.php">
  		<div class="form-group">
		<label for="name" class="col-sm-10 control-label named">Escribe tu nombre:</label>


			<div class="row cented">
		<div class="col-sm-6 col-sm-offset-3">

				<?php 
							if (isset($_POST['nombre'])){
								echo "<input type='text' class='form-control' id='campo' name='nombre' placeholder='nombre' value='".$_POST['nombre']."'>";
								
							}else{
								echo "<input type='text' class='form-control' id='campo' name='nombre' placeholder='nombre' value=''>";
							}
							?>
				</div>
			
		</div>
	</div>
  		
		<section id="seccion-traductor">


<div class="centrado col-sm-12">
      <input id="botonjapones" name="submit" type="submit" value="Traducir al japonés" class="btn btn-primary">
    
  </div>
  <?php
          if (isset ( $_POST ['nombre'] )) {
            $nombre = strtoupper ( $_POST ['nombre'] );
            // Recorro la cadena $nombre
            $japones = "";
            for($i = 0; $i < strlen ( $nombre ); $i++) {
              $caracter = substr ( $nombre, $i, 1 );
              //echo $i."-".$caracter." ";
              switch ($caracter) {
                case 'A' :
                  $japones = $japones . "KA";
                  break;
                case 'B' :
                  $japones = $japones . "TU";
                  break;
                case 'C' :
                  $japones = $japones . "MI";
                  break;
                case 'D' :
                  $japones = $japones . "TE";
                  break;
                case 'E' :
                  $japones = $japones . "KU";
                  break;
                case 'F' :
                  $japones = $japones . "LU";
                  break;
                case 'G' :
                  $japones = $japones . "JI";
                  break;
                case 'H' :
                  $japones = $japones . "RI";
                  break;
                case 'I' :
                  $japones = $japones . "KI";
                  break;
                case 'J' :
                  $japones = $japones . "ZU";
                  break;
                case 'K' :
                  $japones = $japones . "ME";
                  break;
                case 'L' :
                  $japones = $japones . "TA";
                  break;
                case 'M' :
                  $japones = $japones . "RIN";
                  break;
                case 'N' :
                  $japones = $japones . "TO";
                  break;
                case 'Ñ' :
                  $japones = $japones . "TO";
                  break;
                case 'O' :
                  $japones = $japones . "MO";
                  break;
                case 'P' :
                  $japones = $japones . "NO";
                  break;
                case 'Q' :
                  $japones = $japones . "KE";
                  break;
                case 'R' :
                  $japones = $japones . "SHI";
                  break;
                case 'S' :
                  $japones = $japones . "ARI";
                  break;
                case 'T' :
                  $japones = $japones . "CHI";
                  break;
                case 'U' :
                  $japones = $japones . "DO";
                  break;
                case 'V' :
                  $japones = $japones . "RU";
                  break;
                case 'W' :
                  $japones = $japones . "MEI";
                  break;
                case 'X' :
                  $japones = $japones . "NA";
                  break;
                case 'Y' :
                  $japones = $japones . "FU";
                  break;
                case 'Z' :
                  $japones = $japones . "RA";
                  break;
                default :
                  ;
                  break;
              }
            }
            echo "<div class='col-sm-12 traducido' style='text-align:center;'><input type='text' id='campo' name='resultado' value='" . $japones . "' disabled> </div>";

  
          }
          ?>          
          </form>
                  
        
      
        </div>
</section>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>