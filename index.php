<?php

//Meu código vem aqui.

$pg = isset($_GET['pg']);

if ($pg) {
    switch ($_GET['pg']) {

        case 'inicio':
            // Incluir a página inicio


            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'contatos':
            // Incluir a página contato

            include_once 'paginas/includes/header.php';
            include_once 'paginas/contatos.php';
            include_once 'paginas/includes/footer.php';

            break;



        case 'produtos':
            // Incluir a página produtos

            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos.php';
            include_once 'paginas/includes/footer.php';
            break;
        case 'obrigado':
            // Incluir a página produtos

            
            include_once 'paginas/obrigado.php';
            
            break;
        
        


        default:
            // Página de Erro.
            echo 'Página não encontrada';
            break;
    }
} else {
    include_once 'paginas/includes/header.php';
    include_once 'paginas/inicio.php';
    include_once 'paginas/includes/footer.php';
}
?>