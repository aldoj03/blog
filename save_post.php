<?php 


if(isset($_POST)){
    require_once 'includes/conexion.php';
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']) : false;
    $categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($db,$_POST['categoria']) : false;
    $contenido = isset($_POST['contenido']) ? ltrim(mysqli_real_escape_string($db,$_POST['contenido'])) : false;  
}
if($_SESSION){
    $id_usuario = $_SESSION['usuario']['id'];    
    $sql_id_cat = "SELECT id FROM categorias WHERE nombre = '$categoria' ";
    $id = mysqli_query($db, $sql_id_cat);
    $id_cat = mysqli_fetch_assoc($id);
}


if($_GET['accion'] == "crear"){
    
if($categoria && $titulo && $contenido && $id_cat && $id_usuario){
$sql_insert_category = "INSERT INTO entradas values(null, '$id_usuario', '$id_cat[id]', '$titulo', '$contenido', CURRENT_DATE());";
mysqli_query($db, $sql_insert_category);
$_SESSION['correcto_post'] = "post creado correctamente";
}
else{
    $_SESSION['errores_post'] = "error al crear post";
}
header("location: add_post.php");
}



if($_GET['accion'] == "modificar"  && isset($_POST) ){
     $id_post = $_GET['id_post'];
    if(!empty($_GET['id_post']) && !empty($categoria) && !empty($titulo) && !empty($contenido) && !empty($id_cat) ){      
        $sql_update_post = "UPDATE entradas SET titulo = '$titulo', categoria_id = $id_cat[id], descripcion = '$contenido' WHERE id = $id_post ";
        mysqli_query($db, $sql_update_post);
        
        $_SESSION['correcto_post'] = "post actualizado correctamente";
    }
    else{
       $_SESSION['errores_post'] = "error al modificar post";
        
    }
   header("location: modify-post.php?id_post=$id_post");
}
