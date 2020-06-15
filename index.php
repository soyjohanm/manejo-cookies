<?php
  date_default_timezone_set('America/Caracas');
  if (isset($_COOKIE['eventos'])) { $array = explode("/n",$_COOKIE['eventos']); }
  else { $array = array(); }

  if (isset($_POST['borrar'])) {
    $id = $_POST['borrar'];
    unset($array[$id]);
    $array = array_values($array);
    setcookie("eventos",implode("/n",$array));
  } elseif (isset($_POST['agregar'])) {
    $nuevo = $_POST['dia']."|".$_POST['hora']."|".$_POST['evento'];
    $array[] = $nuevo;
    setcookie("eventos",implode("/n",$array));
  } else {
    setcookie("eventos",null);
    $array = array();
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manejo de cookies</title>
	<style>
	  .orange {
		background-color: #ff9800 !important;
	  }
	  html {
		line-height: 1.15;
		/* 1 */
		-ms-text-size-adjust: 100%;
		/* 2 */
		-webkit-text-size-adjust: 100%;
		/* 2 */
	  }
	  body {
		margin: 0;
	  }
	  button, input, optgroup, select, textarea {
		font-family: sans-serif;
		/* 1 */
		font-size: 100%;
		/* 1 */
		line-height: 1.15;
		/* 1 */
		margin: 0;
		/* 2 */
	  }
	  button, input {
		/* 1 */
		overflow: visible;
	  }
	  button, select {
		/* 1 */
		text-transform: none;
	  }
	  button, html [type="button"], [type="reset"], [type="submit"] {
		-webkit-appearance: button;
		/* 2 */
	  }
	  html {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	  }
	  *, *:before, *:after {
		-webkit-box-sizing: inherit;
		box-sizing: inherit;
	  }
	  button, input, optgroup, select, textarea {
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
	  }
	  .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-small, .btn-floating, .dropdown-content, .collapsible, .sidenav {
		-webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
	  }
	  .z-depth-1-half, .btn:hover, .btn-large:hover, .btn-small:hover, .btn-floating:hover {
		-webkit-box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
		box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
	  }
	  table, th, td {
		border: none;
	  }
	  table {
		width: 100%;
		display: table;
		border-collapse: collapse;
		border-spacing: 0;
	  }
	  tr {
		border-bottom: 1px solid rgba(0, 0, 0, 0.12);
	  }
	  td, th {
		padding: 15px 5px;
		display: table-cell;
		text-align: left;
		vertical-align: middle;
		border-radius: 2px;
	  }
	  .container {
		margin: 0 auto;
		max-width: 1280px;
		width: 90%;
	  }
	  @media only screen and (min-width: 601px) {
		.container {
          width: 85%;
		}
	  }
	  @media only screen and (min-width: 993px) {
		.container {
          width: 70%;
		}
	  }
	  html {
		line-height: 1.5;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
		font-weight: normal;
		color: rgba(0, 0, 0, 0.87);
	  }
	  @media only screen and (min-width: 0) {
		html {
          font-size: 14px;
		}
	  }
	  h1, h2, h3, h4, h5, h6 {
		font-weight: 400;
		line-height: 1.3;
	  }
	  h2 {
		font-size: 3.56rem;
		line-height: 110%;
		margin: 2.3733333333rem 0 1.424rem 0;
	  }
	  .btn, .btn-large, .btn-small, .btn-flat {
		border: none;
		border-radius: 2px;
		display: inline-block;
		height: 36px;
		line-height: 36px;
		padding: 0 16px;
		text-transform: uppercase;
		vertical-align: middle;
		-webkit-tap-highlight-color: transparent;
	  }
	  .btn, .btn-large, .btn-small, .btn-floating, .btn-large, .btn-small, .btn-flat {
		font-size: 14px;
		outline: 0;
	  }
	  .btn, .btn-large, .btn-small {
		text-decoration: none;
		color: #fff;
		background-color: #26a69a;
		text-align: center;
		letter-spacing: .5px;
		-webkit-transition: background-color .2s ease-out;
		transition: background-color .2s ease-out;
		cursor: pointer;
	  }
	  .btn:hover, .btn-large:hover, .btn-small:hover {
		background-color: #2bbbad;
	  }
	  input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
		background-color: transparent;
		border: none;
		border-bottom: 1px solid #9e9e9e;
		border-radius: 0;
		outline: none;
		height: 3rem;
		width: 100%;
		font-size: 16px;
		margin: 0 0 8px 0;
		padding: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
		-webkit-box-sizing: content-box;
		box-sizing: content-box;
		-webkit-transition: border .3s, -webkit-box-shadow .3s;
		transition: border .3s, -webkit-box-shadow .3s;
		transition: box-shadow .3s, border .3s;
		transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
	  }
	</style>
  </head>
  <body>
    <div class="container">
      <center><h2 style="text-transform:uppercase">calendario de eventos</h2></center>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
          <thead>
            <tr>
              <th>Día</th>
              <th>Hora</th>
              <th>Evento</th>
              <th>Operación</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i=0; $i < sizeof($array); $i++) {
                $valores = explode("|",$array[$i]);
                echo "<tr>
                      <td>".$valores[0]."</td>
                      <td>".$valores[1]."</td>
                      <td>".$valores[2]."</td>
                      <td><button name='borrar' class='btn orange' value='".$i."'>Borrar</button></td>
                     </tr>";
              }
            ?>
            <tr>
              <td><input type="date" name="dia" size="10" max="<?php echo date('Y-m-d'); ?>"></td>
              <td><input type="time" name="hora" size="10" value="<?php echo date('H:i'); ?>"></td>
              <td><input type="text" name="evento" size="40"></td>
              <td><button name="agregar" class="btn orange">Agregar</button></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </body>
</html>
