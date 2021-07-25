<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U2 php</title>
</head>

<style>
    entry
    {
        color: red;
    }
</style>

<body style="width: 25%;">
    <h1 style="text-align: center;">Bienvenidos al Sistema</h1>
    <p style="background-color: teal; color: white; text-indent: 3px;">Los datos ingresados:</p>

    <?php
        $nombre = "Juan";
        $apellido = "Gonzalez";
        $edad = 28;
        $hobbie = "Robotica";
        $editor = "Visual Studio Code";
        $so = "windows";

        echo "<entry> Nombre: " . $nombre . "<br>" . "<br>" . "Apellido: " . $apellido . "<br>" . "<br>" . "Edad: " . $edad . "<br>" . "<br>" . "Hobbie: " . $hobbie . "<br>" . "<br>" . "Editor de código: " . $editor . "<br>" . "<br>" . "Sistema operativo:" . $so . "</entry>";
    ?>
</body>
</html>