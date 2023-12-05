<?php

$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";
include MODEL . "/user.php";
include MODEL . "/database.php";
if (!isset($_SESSION["adm"])) {

    header("location:".ROOT);

}

?>

<button type="button" onclick="window.location.href='<?= ROOT ?>/src/controller/logout.php'">Finalizar sessão 🚪</button>

<h1>Lista de Usuários</h1>

<form action="<?=ROOT?>/src/controller/status_change.php" method="get" onsubmit="return confirm('Esta certo disso?')">

    <table>

        <thead>
            <tr>

                <th>Inativo</th>
                <th>Cod</th>
                <th>Usuário</th>
                <th>Email</th>
                <th>Telefone</th>

            </tr>
        </thead>
        <tbody>

            <?php
            
            $db = new Database();
            $list = $db->select(

                "SELECT * FROM users"

            );

            //var_dump($list);
            
            foreach($list as $u):
            ?>

            <tr>
                <td><input type="checkbox" name="status" id="status" <?= ($u->user_status == null) ? "" :  "checked" ?>></td>
            </tr>    

            <?php endforeach?>    
        </tbody>

    </table>

</form>

<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";