<?php 
require_once("../../resources/config.php");


if(isset($_GET['delete_slide_id'])){
    $query1 = query("SELECT slide_image FROM slides WHERE slide_id = ".escape_string($_GET['delete_slide_id']));
    confirm($query1);
    $row = fetch_array($query1);
    $target_path = UPLOAD_DIRECTORY . DS . $row['slide_image'];
    unlink($target_path);
    
    $query = query("DELETE FROM slides WHERE ".escape_string($_GET['delete_slide_id'] . " LIMIT 1"));
    confirm($query);
    set_message("Slide Deleted");
    redirect("../../public/admin/index.php?slides");
    
}else{
    redirect("../../public/admin/index.php?slides");
}

?>