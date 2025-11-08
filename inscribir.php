<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_estudiante = $_POST['id_estudiante'];
    $id_curso = $_POST['id_curso'];
    $fecha = $_POST['fecha_inscripcion'];

    $sql = "INSERT INTO Inscripciones (id_estudiante, id_curso, fecha_inscripcion) 
            VALUES ('$id_estudiante', '$id_curso', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inscripción registrada con éxito');window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
