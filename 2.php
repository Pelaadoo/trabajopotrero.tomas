<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>notas de alumnos</title>
    <link rel="stylesheet" href="2.css">
  </head>
  <body>
    <div class="peladon">


       <h1>Calificación de Alumnos</h1>
       <br>
       <br>
       <h2>colegio Instituto Gasparcampos</h2>
       <br>
       <h2>2ndo cuatrimestre</h2>
       <form id="formulario">
           <label for="nombre">Nombre del Alumno:</label>
           <input type="text" id="nombre" required>
           <br>
           <label for="nota">Nota Numérica:</label>
           <input type="number" id="nota" min="0" max="10" step="0.1" required>
           <br>
           <button type="button" onclick="calcularCalificacion()">Calcular Calificación</button>






       </form>

       <p id="resultado"></p>

       <script>
           function calcularCalificacion() {
               const nombre = document.getElementById("nombre").value;
               const nota = parseFloat(document.getElementById("nota").value);

               let calificacion = "";

               if (nota >= 0 && nota <= 2) {
                   calificacion = "muy deficiente";
               } else if (nota >= 3 && nota <= 5) {
                   calificacion = "Insuficiente";
               } else if (nota >= 6 && nota <= 7) {
                   calificacion = "Bien";
               } else if (nota >= 8 && nota <= 9) {
                   calificacion = "Notable";
               } else if (nota === 10) {
                   calificacion = "Sobresaliente";
               } else {
                   calificacion = "error en la nota del alumno";

               }

               const resultado = `El alumno ${nombre} tiene una nota de ${nota}. Su calificación es: ${calificacion}`;
               document.getElementById("resultado").textContent = resultado;
           }
       </script>
     </div>


  </body>
</html>
