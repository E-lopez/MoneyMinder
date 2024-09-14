<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Minder - Bienvenido</title>
    <link rel="stylesheet" href="/MoneyMinder/public/css/1pagina principal.css">
</head>
<body>
    <header id="index-header">                                                                                                                                                                                                                     <img src="/MoneyMinder/public/img/logo.jpeg" alt="Money Minder Logo" class="logo-login">
       <nav class="button-container">
           <form action="/MoneyMinder/index.php/inicioSesion" method="GET">
              <button type="submit">Iniciar sesión</button>
           </form>


           <form action="/MoneyMinder/index.php/crearCuenta" method="GET">
              <button type="submit">Crear cuenta</button>
           </form>
        </nav>
    </header>

    <main id="index-main-section">
        <section class="intro">
            <h2>Money Minder</h2>

            <?php
                if(array_key_exists('button1', $_POST)) {
                    button1();
                }
                else if(array_key_exists('button2', $_POST)) {
                    button2();
                }
                function button1() {
                    echo "This is Button1 that is selected";
                }
                function button2() {
                    echo str_pad("Hello World!", 4096);
                    flush();

                }
            ?>

            <form method="post">
                <input type="submit" name="button1"
                        class="button" value="Button1" />
                
                <input type="submit" name="button2"
                        class="button" value="Button2" />
            </form>
           
            <p>Estamos emocionados de tenerte como parte de nuestra
            comunidad de ahorro. En Money Minder, eras
            de manera fácil y efectiva.<br> Con nuestra aplicación, podrás realizar un seguimiento de tus ingresos y gastos,
            establecer metas de ahorro personalizadas y recibir
            consejos financieros útiles para mejorar tu situación
            económica.</p>
        </section>
        <section id="index-main-image">
        <img src="/MoneyMinder/public/img/principalimagen.jpeg" alt="imagen principal">
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Money Minder</p>
    </footer>
    <script src="/MoneyMinder/public/js/paginaPrincipal.js"></script>
</body>
</html>  




