<?php 
require_once('MySql.php');

function criaEstrutura($imobiliariaID, $conteudoID = 0){
    $sql = MySql::conect()->prepare("SELECT * FROM conteudo WHERE `imobiliariaID` = $imobiliariaID AND `conteudoID` = $conteudoID");
    $sql->execute();
    $conteudo = $sql->fetchAll();

    echo "<ul>";
    foreach ($conteudo as $key => $value) {
        echo "<li><a href='#'>$value[Titulo]</a>";
        criaEstrutura($imobiliariaID, $value['ID']);
        echo "</li>";
    }
    echo"</ul>";

}

criaEstrutura(99901);