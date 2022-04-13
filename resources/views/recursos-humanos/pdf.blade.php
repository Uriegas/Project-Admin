<?php use App\Models\Departamentos;
?>
<!DOCTYPE html>
<html>
   <head>
      <title>PDF</title>
   </head>
   <body>
      <header>
         <h1>FOSTER INTELLIGENCE</h1>
      </header>
      <main>
      <?php $departamentos=Departamentos::get();?>
          <label><h3>Nombre del empleado: <?php echo $empleado['nombre']; echo $empleado['apellido'];?></label></h3>
          <label><h3>Trabaja en el departamento de 
          <?php 
          foreach($departamentos as $dep){
                if($empleado['departamento_id']==$dep['id']){ 
                   echo $dep['nombre']; } 
            }?>
          </label></h3>
          <label><h3>Cuyo puesto es de <?php echo $empleado['puesto'];?></label></h3>
          <label><h3>El tipo de contrato con el que cuenta es <?php echo $empleado['tipo_contrato'];?></label></h3>
          <label><h3>Las prestaciones del empleado son las siguientes: </h3> 
          <?php $prestaciones=explode(',',$empleado['prestaciones']);?>
          @foreach ($prestaciones as $prestacion)
              <?php echo $prestacion;?><br>
           @endforeach
            </label>
          <label><h3>El cual cuenta con un salario de $<?php echo $empleado['salario'];?> al mes.</label></h3>     
    </main>
      <footer>
      </footer>
   </body>
</html>