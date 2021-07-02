<! DOCTYPE html >
<html  lang = " es " dir = " ltr ">
  <head>
    <meta  charset = " utf-8 ">
    <título> Formulario en PHP </título >
    <link  rel = " stylesheet " href = " css / style.css " >
    <script  type = " text/javascript " src = " js / funciones.js " ></script>
    </script>
    </head>
  <body>
      <header>
        <h1> Formulario </h1>
      </header>
      <nav> <--- Aqui va el menu -- > </nav>
      <section>
      <form action="include/resultado php" method="post" name"form1" id="form1" consulmit"return valideNum1ne()">
      <div  id = " datosGenerales ">
          <h2> Datos Generales </h2>
          <p> <label form= " clave " > Cve. Empleado </label>
          <input  type = " text " name = " clave " id = " clave " size = " 8 " maxlength = " 5 " placeholder = " Alfanumérico " required >
          </p>
          <p> <label  para = " passw ">Contraseña </label>
          <input  type = " password " name = " passw " id = " nombre " size = " 10 " maxlength = " 10 " placeholder = " 8-10 caracteres">
          </p>
          <p> <label  para = " nombre " > Nombre </label>
          <input  type = " text " name = " nombre " id = " apellido " size = " 20 " maxlength = " 50 " placeholder = " Nombre(s) " required >
          </p >
          <p> <label  para = " apellidos " > Apellido </label>
          <input  type = " text " name = " apellido " id = " apellido " size = " 20 " maxlength = " 50 " placeholder = " Apellido(s) " required >
         </p>
         <p> <label  para = " fechaNac " > Fecha Nacimiento </label>
         <input  type = " date " name = " fechaNac " id = " fechaNac ">
       </p
       <p>Actividaades Extras</p>
       <p>
         <label> Brigadas<type input= "checkbox" name="brigada" id="brigada"> </label>
        <label> Futbol<type input= "checkbox" name="futbol" id="futbol"> </label>
         <label> Lectura<type input= "lectura" name="brigada" id="lectura"> </label>
         </p>
        </div >
        <div  id = " datosTrabajo " >
          <p >
            <label  for = " salario " > Salario </p >
            <input  type = " number " class = " numero " name = " salario " id = " salario " size = " 10 " maxlength = " 10 " placeholder = " Mayor a cero" required  onchange =" return validaNomina() ">
          </p>
          <p>
            <label  for = " dias "> Dias trabajados </p>
            <input  type = " number " class = " numero " name = " dias " id = " dias " size = " 5 " maxlength = " 8 " value = " 15 " placeholder ="15" required  onchange = "return validaNomina () " >
          </p >
          <p> Tipo Empleado </p >
           <p> <label><input  type=" radio " name = " tipo" id = " tipoA" value = " A " chacked onchange = " generaOtions() "> Administrativo</label></p>
           <p> <label><input  type=" radio " name = " tipo" id = " tipoO" value = " O " chacked onchange = " generaOtions() "> Operativo</label></p>
        </div >
        <label  for = "depto ">
          <p>Departamento;
            <select name="depto" id="depto">
              <option value="COM"> Compras</option>
              <option value="DIR"> Dirección</option>
              <option value="INF"> Informática</option>
              <option value="PER"> personal</option>
              <option value="VEN"> Ventas</option>
            </select>
          </p>
        </label>
    </div>
        <div  id = " botones " >
          <p > <label for= "observaciones"> Comentarios </label ></p>
          <p>
          <textarea name= "observaciones" id = "observaciones" cols= "34" >
          <textarea>
          </p>
          <p>
          <input type="submit" name="calcular" id="calcular" value="calcular">
          <input type="reset" name="Limpiar" id="Limpiar" value="Limpiar">
       </p>
        </div >
      </form>
    </section >
    <footer></footer>
  </body>
</html >
