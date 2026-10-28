<?php
include 'conn.php';
function criarTopo(){
    $topo = '
            <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="global.css">
        <title>WestMart</title>
    </head>
    <body>
        <header>
            <h1>WestMart</h1>

            <nav>
                '.criarMenu().'
            </nav>

            <div>
                <input type="text" placeholder="Buscar produtos">
                <button>Buscar</button>
                <a href="carrinho.html">Carrinho</a>
            </div>
        </header>
        ';
        echo $topo;
}
function criarMenu(){
            $menu = '<nav>
            '.criarLinkMenu("cadastro.php", 'paper-plane-outline', 'Criar sua Conta West').'
                    </nav>' ;
            // if($logado == 1){
            //     $menu = '<nav>
            //             '.criarLinkMenu("index.php", 'person-outline', "Início").'            
            //             '.criarLinkMenu("produtos.php", 'add-outline', "Produtos em Oferta").'    
            //             '.criarLinkMenu("compras.php", 'exit-outline', "Minhas Compras").'                                
            //             </nav>';
            // }else{
            //     $menu = '<nav>
            //             '.criarLinkMenu("index.php", 'home-outline', "Início").'   
            //             '.criarLinkMenu("cadastro.php", 'paper-plane-outline', "Criar sua Conta West").'     
            //             '.criarLinkMenu("login.php", 'lock-closed-outline', "Acessar").'                          
            //             </nav>';
            // }
           return $menu;
}
function  linkAtivo($pagina){
        $link = basename($_SERVER['PHP_SELF']);
        $paginaAtiva = "";
        if($link == $pagina){
            $paginaAtiva = "ativo";
        }else{
            $paginaAtiva = "";
        }
        return $paginaAtiva;
    };
function criarLinkMenu ($pagina,$icon,$nome){
        $html = '<a class="btn '.linkAtivo($pagina).'" href="'.$pagina.'"><ion-icon name="'.$icon.'"></ion-icon>'.$nome.'</a>';

        return $html;
    };
?>