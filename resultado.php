<! DOCTYPE html >

<html>
<head>
  <mota charset="utt-8">
  <litle>Sueldo</litle>
</head>
<?php>
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$tipo =$_POST["tipo"];
$salario= floatvel($_POST["salario"]);
$dias= intval(=$_POST["dias"]);
$bono= 0;
$isr= 0;
$quincena=$salario=$dias;
if($tipo=="A"){
  $tipoEmp="Administrativo";
  $bono=$salario=10;
  $isr =$quincena= 0.25;
}
else{
  $tipoEmp= "Operativo";
  $bono=$salario=5;
  $isr=$quincena= 0.15;
}
if ($dias <15){
  $bono=0;
}
$importe1= $quincena=$bono;
$importe2= $quincena=$bono=$isr;
?>
<body>
  <header>
  <h1>Resultados</h1>
</header>
<section>
  <div id="nomina">
    <ul>
      <li>Nombre; <? echo "$nombre $apellido"; ?> </li>
      <li>Tipo Emp.; <? echo "$tipoEmp"; ?> </li>
      <li>Salario; <? echo "$salario"; ?> </li>
      <li>Dias trab.; <? echo "$dias"; ?> </li>
      <li>Sueldo Antes Impuesto <? echo "$importe1"; ?> </li>
      <li>Sueldo Despues Impuesto <? echo "$importe2"; ?> </li>
</ul>
</div>
</section>
</body>
</html>
