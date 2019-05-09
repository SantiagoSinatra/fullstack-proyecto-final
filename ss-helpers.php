<?php
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}

function persistirInputUsuario($campoAPersistir)
{
    if (isset($_POST[$campoAPersistir])) {
        return $_POST[$campoAPersistir];
    }
}
?>