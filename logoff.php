<?php

    session_start();


    /*
    //remover indices do array de sessão
    //unset()
    
    unset($_SESSION['x']); //para remover o índice apenas se existir


    //destruir a varável de sessão
    //session_destroy()

    session_destroy(); //será destruida
    //forçar um redirecionamento

    */

    session_destroy();
    header('Location: index.php');


?>