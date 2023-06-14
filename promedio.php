<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Promedio de notas</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Promedio de notas</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <label for="nombre">Nombre del estudiante:</label>
      <input type="text" id="nombre" name="nombre" required>

      <div class="curso 1">
        <h1>Curso 1</h1>
            <label>Asistencia</label>
            <input type="number" name="curso1_asistencia" min="0" max="20" required>
            <label>Examen</label>
            <input type="number" name="curso1_examen" min="0" max="20" required>
            <label>Práctica</label>
            <input type="number" name="curso1_practica" min="0" max="20" required>
      </div>

      <div class="curso 2">
        <h1>Curso 2</h1>
            <label>Asistencia</label>
            <input type="number" name="curso2_asistencia" min="0" max="20" required>
            <label>Examen</label>
            <input type="number" name="curso2_examen" min="0" max="20" required>
            <label>Práctica</label>
            <input type="number" name="curso2_practica" min="0" max="20" required>
      </div>

      <div class="curso 3">
        <h1>Curso 3</h1>
        <label>Asistencia<label>
        <input type="number" name="curso3_asistencia" min="0" max="20" required>
        <label>Examen</label>
        <input type="number" name="curso3_examen" min="0" max="20" required>
        <label>Práctica</label>
        <input type="number" name="curso3_practica" min="0" max="20" required>
      </div>  
      <div>
        <input type="submit" name="submit" value="Calcular promedio">
      </div>
    </form>
    <div>

        <?php
        if (isset($_POST["submit"])) {

            $nombre = $_POST["nombre"];

            // Curso 1
            $curso1_asistencia = $_POST["curso1_asistencia"];
            $curso1_examen = $_POST["curso1_examen"];
            $curso1_practica = $_POST["curso1_practica"];
            $promedio_curso1 = ($curso1_asistencia + $curso1_examen + $curso1_practica) / 3;

            // Curso 2
            $curso2_asistencia = $_POST["curso2_asistencia"];
            $curso2_examen = $_POST["curso2_examen"];
            $curso2_practica = $_POST["curso2_practica"];
            $promedio_curso2 = ($curso2_asistencia + $curso2_examen + $curso2_practica) / 3;

            // Curso 3
            $curso3_asistencia = $_POST["curso3_asistencia"];
            $curso3_examen = $_POST["curso3_examen"];
            $curso3_practica = $_POST["curso3_practica"];
            $promedio_curso3 = ($curso3_asistencia + $curso3_examen + $curso3_practica) / 3;

            // Promedio ponderado final
            $promedio_final = ($promedio_curso1 + $promedio_curso2 + $promedio_curso3) / 3;

            // Verificar condición de aprobación
            if ($promedio_final >= 13) {
                $condicion = "Aprobado";
            } elseif ($promedio_final >= 10) {
                $condicion = "Repitencia";
            } else {
                $condicion = "Desaprobado";
            }
        
            // Mostrar resultados
            echo "Nombre del estudiante: $nombre<br>";
            echo "Promedio Curso 1: $promedio_curso1<br>";
            echo "Promedio Curso 2: $promedio_curso2<br>";
            echo "Promedio Curso 3: $promedio_curso3<br>";
            echo "Promedio Ponderado Final: $promedio_final<br>";
            echo "Condición: $condicion";
        } 
        ?>
    </div>
    </div>
    

</body>
</html>


?>
