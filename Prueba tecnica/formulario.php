<?php


    /**Creacion de las consultas a la base de datos de regiones, comunas y candidato
     *
     */
    /**
     * En esta línea de código, se está realizando una consulta a la base de datospara seleccionar todos los registros de la tabla "regiones" en la base de datos
     */
    /*$sentencia = $conn->query('SELECT * FROM `regiones`');
    /** 
     * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$region" 
     */

    /*$region = $sentencia->fetchAll(PDO::FETCH_OBJ);

    /**
     * En esta línea de código, se está realizando una consulta a la base de datos para seleccionar todos los registros de la tabla "comunas" en la base de datos
     */
     
    /*$sentenciaco = $conn->query('SELECT * FROM `comunas`');
    /**
     * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$comuna" 
     */ 
    /*$comuna = $sentenciaco->fetchAll(PDO::FETCH_OBJ);
    /**
     * En esta línea de código, se está realizando una consulta a la base de datospara seleccionar todos los registros de la tabla "candidato" en la base de datos
     */
    /*$sentenciacandidato = $conn->query('SELECT * FROM `candidato`');
    /**
     * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$candidato" 
     */
    /*$candidato = $sentenciacandidato->fetchAll(PDO::FETCH_OBJ);*/

        /**
     * session_start(); es una función en PHP que inicia una sesión en el servidor web y almacenar información de sesión en variables
     */
    session_start();
    
    /* el codigo require lo utilizo para incluir la conexion de la base de datos, en este caso el archivo conexion.php
     * donde se encuentra el codigo de la conexion a la base de datos 
     */
    require "./conexion.php";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet"/>

    <!--En esta línea de código se está agregando un archivo JavaScript llamado "validaciones.js" a la página HTML-->
    <script src="validaciones.js"></script>
    
    <title>Formulario</title>
</head>

<body class="bg-green-100 font-semibold text-center">
<div class="flex items-center justify-center p-12">
  <div class="mx-auto w-full max-w-[550px]">
    

    <!-- se crea un formulario HTML que enviará los datos ingresados por el usuario al archivo "procesar.php" en el servidor web.-->
    <form id="miformulario" action="" method="POST" onsubmit="return validacion()">
    
      <div class="mb-5">
        <label
          for="name"
          class="mb-3 block text-base font-medium text-black"
        >
        Nombre y Apellido
        </label>
        <input
          type="text"
          name="txt_nombre"
          id="name"
          placeholder="Ingrese su nombre y apellido"
          class="text-center w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="subject"
          class="text-center mb-3 block text-base font-medium text-black"
        >
          Alias
        </label>
        <input
          type="text"
          name="txt_alias"
          id="alias"
          placeholder="ingrese su alias"
          class="text-center w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
      </div>
      <div class="mb-5">
        <label
          for="subject"
          class=" mb-3 block text-base font-medium text-black"
        >
          Rut
        </label>
        <input
          type="text"
          name="txt_rut"
          id="rut"
          placeholder="ej 1111111-1"
          class="text-center w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        <!-- Creo boton para validar el rut ingresado por el usuario -->
        <script src="validaRut.js"></script>
        <button class=" py-1 my-1 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" onclick="validarFormulario()">Validar Rut</button>
        <script>
          function validarFormulario() {
            var rut = document.getElementById("rut").value;
            if (validarRut(rut)) {
              // Aquí puedes agregar código adicional para enviar el formulario, etc.
            }
          }
        </script>
      </div>
      <div class="mb-5">
        <label
          for="subject"
          class="mb-3 block text-base font-medium text-black"
        >
          Email
        </label>
        <input
          type="email"
          name="txt_email"
          id="email"
          placeholder="correo electronico"
          class="text-center w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>

        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

        <!-- En este div se realiza el llenado del combo box "cbo_region" para visualizar todas las regiones extraidas
             directamente desde la base de datos-->
        <div class=" max-w-2xl mx-auto">

            <label for="countries" class="mb-3 block text-base font-medium text-black">Region</label>
                <select name="cbo_region" id="countries" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                >
            
            
            <?php
             /*En esta línea de código, se está realizando una consulta a la base de datospara seleccionar todos los registros de la tabla "regiones" en la base de datos
             */
            $sentencia = $conn->query('SELECT * FROM `regiones`');
            /** 
             * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$region" 
             */
        
            $region = $sentencia->fetchAll(PDO::FETCH_OBJ);
            /**
             * se está utilizando el bucle "foreach" para recorrer el array "$region",
             * que contiene los resultados de la consulta SQL realizada anteriormente a la base de datos. 
             * En cada iteración del bucle, el valor actual del array se asigna a la variable "$dato" 
             */ 
            foreach ($region as $dato) {
              
            ?> 
            <!--muestra todas las regiones recuperadas de la base de datos como opciones. 
                La opción que se muestra por defecto es la primera región en el array "$region".
            --> 
                <option selected required><?php echo $dato->region;?></option>
            <?php
            
            }
            ?>
            </select>
            
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
            


        <!-- En este div se realiza el llenado del combo box "cbo_comuna" para visualizar todas las regiones extraidas
             directamente desde la base de datos-->
        <div class="max-w-2xl mx-auto">

            <label for="countries" class="mb-3 block text-base font-medium text-black">Comuna</label>
                <select name="cbo_comuna" id="countries" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                >
            <?php
            /**
            * En esta línea de código, se está realizando una consulta a la base de datos para seleccionar todos los registros de la tabla "comunas" en la base de datos
            */
            $sentenciaco = $conn->query('SELECT * FROM `comunas`');
            /**
             * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$comuna" 
             */ 
            $comuna = $sentenciaco->fetchAll(PDO::FETCH_OBJ);
            /** 
             * se está utilizando el bucle "foreach" para recorrer el array "$comuna", 
             * que contiene los resultados de la consulta SQL realizada anteriormente a la base de datos. 
             * En cada iteración del bucle, el valor actual del array se asigna a la variable "$dato" 
            */ 
            foreach ($comuna as $dato) {
            ?> 
            <!--muestra todas las regiones recuperadas de la base de datos como opciones. 
                La opción que se muestra por defecto es la primera región en el array "$comuna".
            -->
                <option selected ><?php echo $dato->comuna; ?></option>
                
            <?php
            }
            ?>
            </select>
            
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

        <!-- En este div se realiza el llenado del combo box "cbo_candidato" para visualizar todas las regiones extraidas
        directamente desde la base de datos-->
        <div class="max-w-2xl mx-auto">

            <label for="countries" class="mb-3 block text-base font-medium text-black">Candidato</label>
                <select name="cbo_candidato" id="countries" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                required>
            <?php

            /**
             * En esta línea de código, se está realizando una consulta a la base de datospara seleccionar todos los registros de la tabla "candidato" en la base de datos
             */
            $sentenciacandidato = $conn->query('SELECT * FROM `candidato`');
            /**
             * se está recuperando el resultado de la consulta SQL que se ejecutó previamente y se está almacenando en la variable "$candidato" 
             */
            $candidato = $sentenciacandidato->fetchAll(PDO::FETCH_OBJ);
                    /**
             * se está utilizando el bucle "foreach" para recorrer el array "$candidato", 
             * que contiene los resultados de la consulta SQL realizada anteriormente a la base de datos. 
             *  En cada iteración del bucle, el valor actual del array se asigna a la variable "$dato" 
            */
            foreach ($candidato as $dato) {
            ?> 
            <!--muestra todas las regiones recuperadas de la base de datos como opciones. 
                La opción que se muestra por defecto es la primera región en el array "$candidato".
            -->   
                        
                <option selected><?php echo $dato->Nombre; ?></option>
            <?php
            }
            ?>
            </select>
            
            
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
        <div class='flex flex-col gap-6'>
        
        <label for="countries" class="mb-3 block text-base font-medium text-black">Como se entero de nosotros</label>
    <div class='flex flex-row'>        
        <input type="checkbox" name="checkbox[]" id="cb1" value="web"
        class='
            appearance-none h-6 w-6 bg-white-400 rounded-full 
            checked:bg-green-300 checked:scale-75
            transition-all duration-200 peer
        '
    />
        <div class='h-6 w-6 absolute rounded-full pointer-events-none
        peer-checked:border-green-300 peer-checked:border-2
        '>
        </div>
        <label for='cb1' class='flex flex-col justify-center px-2 peer-checked:text-green-400  select-none'>Web</label>
            
    </div>
    <div class='flex flex-row'>
        <input type="checkbox" name="checkbox[]" id="cb2" value="tv" checked
        class='
            appearance-none h-6 w-6 bg-white-400 rounded-full 
            checked:bg-green-300 checked:scale-75
            transition-all duration-200 peer
        '
    />
        <div class='h-6 w-6 absolute rounded-full pointer-events-none
        peer-checked:border-green-300 peer-checked:border-2
        '>
        </div>
        <label for='cb1' class='flex flex-col justify-center px-2 peer-checked:text-green-400  select-none'>TV</label>
            
    </div>
    <div class='flex flex-row'>
        <input type="checkbox" name="checkbox[]" id="cb3" value="redessociales"
        class='
            appearance-none h-6 w-6 bg-white-400 rounded-full 
            checked:bg-green-300 checked:scale-75
            transition-all duration-200 peer
        '
    />
        <div class='h-6 w-6 absolute rounded-full pointer-events-none
        peer-checked:border-green-300 peer-checked:border-2
        '>
        </div>
        <label for='cb1' class='flex flex-col justify-center px-2 peer-checked:text-green-400  select-none'>Redes Sociales</label>
            
    </div>
    <div class='flex flex-row'>
        <input type="checkbox" name="checkbox[]" id="cb4" value="amigo"
        class='
            appearance-none h-6 w-6 bg-white-400 rounded-full 
            checked:bg-green-300 checked:scale-75
            transition-all duration-200 peer
        '
    />
        <div class='h-6 w-6 absolute rounded-full pointer-events-none
        peer-checked:border-green-300 peer-checked:border-2
        '>
        </div>
        <label for='cb1' class='flex flex-col justify-center px-2 peer-checked:text-green-400  select-none'>Amigo</label>
            
    </div>
      <div>
            
        <button 
        type="submit" onclick="guardarDatos()"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"

        >Votar
        <!-- Agrego un boton para realizar las validaciones de los campos alias y nombre -->
        <button 
        type="button" onclick="validacion()"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"

        >Validar datos
        <!-- utilizo sweetalert una vez que se haya enviado correctamente el formulario a la base de datos -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>swal("Datos enviados!", "Datos Agregados Correctamente!", "success");</script> 
      </button>


      </div>

    </form>
  </div>
</div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="envio.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>