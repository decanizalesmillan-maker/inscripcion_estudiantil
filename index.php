<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inscripción Estudiantil</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="container">
    <h1>Formulario de Inscripción</h1>

    <form action="inscribir.php" method="POST">
      <label for="id_estudiante">Estudiante:</label>
      <select name="id_estudiante" required>
        <option value="">Seleccione un estudiante</option>
        <?php
          include("conexion.php");
          $sql = "SELECT id_estudiante, CONCAT(nombre, ' ', apellido) AS nombre_completo FROM Estudiantes";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
              echo "<option value='".$row['id_estudiante']."'>".$row['nombre_completo']."</option>";
          }
        ?>
      </select>

      <label for="id_curso">Curso:</label>
      <select name="id_curso" required>
        <option value="">Seleccione un curso</option>
        <?php
          $sql = "SELECT id_curso, nombre_del_curso FROM Cursos";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
              echo "<option value='".$row['id_curso']."'>".$row['nombre_del_curso']."</option>";
          }
          $conn->close();
        ?>
      </select>

      <label for="fecha_inscripcion">Fecha de inscripción:</label>
      <input type="date" name="fecha_inscripcion" required>

      <button type="submit">Registrar Inscripción</button>
    </form>

    <a class="link" href="mostrar_inscripciones.php">Ver inscripciones registradas</a>
  </div>
</body>
</html>
