<?php
include("conexion.php");
$sql = "SELECT i.id_inscripcion, CONCAT(e.nombre, ' ', e.apellido) AS estudiante, 
               c.nombre_del_curso, i.fecha_inscripcion
        FROM Inscripciones i
        INNER JOIN Estudiantes e ON i.id_estudiante = e.id_estudiante
        INNER JOIN Cursos c ON i.id_curso = c.id_curso
        ORDER BY i.fecha_inscripcion DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Inscripciones</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container">
    <h1>Inscripciones Registradas</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Estudiante</th>
          <th>Curso</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['id_inscripcion']."</td>
                        <td>".$row['estudiante']."</td>
                        <td>".$row['nombre_del_curso']."</td>
                        <td>".$row['fecha_inscripcion']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay inscripciones registradas.</td></tr>";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
    <a class="link" href="index.php">← Volver al formulario</a>
  </div>
</body>
</html>
