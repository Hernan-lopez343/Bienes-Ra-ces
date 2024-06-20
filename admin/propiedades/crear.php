<?php

require '../../includes/config/database.php';
$db = conectarDB();

    $errores = [];
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedores_id = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   // echo "<pre>";
   // var_dump($_POST);
    //echo "<pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedores_id = $_POST['vendedor'];

        if(!$titulo){
            $errores[] = "Debes añadir un Título";
        }
        if(!$precio){
            $errores[] = "Debes añadir un Precio";
        }
        if (strlen($descripcion) < 50) {
            $errores[] = "Debes añadir una Descripción mínima de 50 caracteres";
        }
        if(!$habitaciones){
            $errores[] = "Las habitaciones son Obligatorias";
        }
        if(!$wc){
            $errores[] = "Ingrese la cantidad de Baños";
        }
        if(!$estacionamiento){
            $errores[] = "Ingrese la cantidad de estacionamientos";
        }
        if(!$vendedores_id){
            $errores[] = "Elige un Vendedor";
        }

       // echo "<pre>";
       // var_dump($errores);
        //echo "<pre>";
        
        // Revisar errores

            if(empty($errores)){
                 // Insertar datos en la DB
        $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id')";
        echo $query;

        $enviarDB = mysqli_query($db, $query);
        if($enviarDB){
            echo "Enviado con éxito"; 
       
        } 
            }

      

}

require '../../includes/funciones.php'; 


    
    incluirtemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Registrar Propiedad</h1>
        <a href="/admin"class="boton boton-verde">Regresar</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error"> 
        <?php echo $error; ?>
        </div>
          <?php endforeach; ?> 

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value=" <?php echo $titulo; ?>">
                <label for="titulo">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la Propiedad" value="<?php echo $precio; ?>">
                <label for="imagen">imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">
                <label for="descripcion">Descripcion:</label>
                <textarea id="descripción" name="descripcion" ><?php echo $descripcion; ?></textarea>
            </fieldset>
            <fieldset>
                <legend>Información de la Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" 
                id="habitaciones" 
                name="habitaciones" 
                placeholder="Cantidad de habitaciones (Ej: 3)" 
                value="<?php echo $habitaciones; ?>" 
                min="1" max="9">
                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" 
                placeholder="Cantidad de baños (Ej: 1)" 
                value= "<?php echo $wc; ?>" 
                min="1" max="9">
                <label for="estacionamiento">Estacionamientos:</label>
                <input type="number" 
                id="estacionamientos" 
                name="estacionamiento" 
                placeholder="Cantidad de Estacionamientos (Ej: 1)" 
                value= "<?php echo $estacionamiento; ?>" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                <option value="">>-- Seleccione --<</option>
                <option value="1">Hernan</option>
                <option value="2">Cristobal</option>
            </select>
            </fieldset>
           <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
     </main>
     <?php
   
   incluirtemplate('footer');
   ?>