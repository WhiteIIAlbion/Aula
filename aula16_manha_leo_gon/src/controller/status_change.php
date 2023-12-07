<?php

$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";
include MODEL . "/user.php";
include MODEL . "/database.php";
 
if(!isset($_SESSION["adm"])){
    header("location:".ROOT);
}
//
//Recebendo dados da página adm.php

if(isset($_GET["status"])){

    $status = $_GET["status"];

}else{

    $status = null;

}

//var_dump($status);

//Conectando com o banco

$db = new Database();

$db->update(

    "UPDATE users SET user_status = null"
    
);

if($status!=null){

    foreach($status as $s) {
        
        $db->update(

            "UPDATE users SET user_status = 1 WHERE user_cod = $s"
            
        );      

    }

};

echo "<p>Atualizando...</p>";
echo "<meta http-equiv='refresh' content='2; url=".ROOT."/src/view/adm.php'>";

//
//Importação do rodapé
include $dir."/src/controller/footer.php";


?>