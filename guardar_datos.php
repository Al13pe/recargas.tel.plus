<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recargas_telcel";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = $_POST['monto'];
    $tipoTarjeta = $_POST['tipoTarjeta'];
    $numeroTarjeta = $_POST['numeroTarjeta'];
    $nombreTitular = $_POST['nombreTitular'];
    $cvv = $_POST['cvv'];
    $vencimientoMes = $_POST['vencimientoMes'];
    $vencimientoAno = $_POST['vencimientoAno'];
    $telefono = $_POST['telefono'];
    $banco = $_POST['banco'];

    $sql = "INSERT INTO recargas (monto, tipo_tarjeta, numero_tarjeta, nombre_titular, cvv, vencimiento_mes, vencimiento_ano, telefono, banco)
    VALUES ('$monto', '$tipoTarjeta', '$numeroTarjeta', '$nombreTitular', '$cvv', '$vencimientoMes', '$vencimientoAno', '$telefono', '$banco')";

    if ($conn->query($sql) === TRUE) {
        echo "Recarga realizada con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
