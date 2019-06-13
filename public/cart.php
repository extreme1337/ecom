<?php require_once("../resources/config.php"); ?>


<?php 

if(isset($_GET['add'])){
//    $_SESSION['product_' . $_GET['add']] +=1;
//    redirect("index.php");
    $query = query("SELECT * FROM products WHERE product_id=".escape_string($_GET['add'])."");
    confirm($query);
    
    while($row = fetch_array($query)){
        if($row['product_quantity'] != $_SESSION['product_'.$_GET['add']]){
            $_SESSION['product_'.$_GET['add']] +=1;
        }else{
            set_message("We only have ".$row['product_quantity']." "." Avaolable");
            redirect("checkout.php");
        }
    }
    
}


?>