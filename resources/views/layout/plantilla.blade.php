<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Plantilla</title>
    </head>
    <body>
        <header style="width: 700px; height: 150px; background-color: #FEFFEA; border: 1px solid black">
            <h1 style="font-size: 2em; font-weight: bold">NOOK DEVELOPMENT</h1>
            <ul style="  list-style-type: none; ">
                <li style="  list-style-type: none; display: inline-block; "><a href="/">PAGINA PRINCIPAL</a></li>
                <li style="  list-style-type: none; display: inline-block; "><a href="about">ACERCA DEL SITIO</a></li>
                <li style="  list-style-type: none; display: inline-block; "><a href="contactos">CONTACTA CON NOSOTROS</a></li>
                <li style="  list-style-type: none; display: inline-block; "><a href="productos">PRODUCTOS  </a></li>
            </ul>
        </header>

        <div style="width: 700px; background-color: #A5A5A5; border: 1px solid black">
            @yield("about")
            @yield("contacto")
            @yield("general")
            @yield("productos")
        </div>

        <footer style="width: 700px;  height: 100px; background-color: #FEFFEA; border: 1px solid black">
            {{$hora}}
        </footer>
    </body>
</html>

