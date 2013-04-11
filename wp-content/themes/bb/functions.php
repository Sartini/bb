<?php 

/** Funcao Carrega Javascript 
 *  Exemplo: loadJS("http://google.com/jquery.js; js/backbone; jquery; accordion");
 *  Para efetuar chamada de JS externo, informar o caminho externo, 
 *  para chamar JS local, informar a pasta + o nome do arquivo 
 */
if ( !function_exists(loadJS)){
    function loadJS($arrJS){

            $js = explode(';', $arrJS);
            if (is_array($js) && count($js)){
                echo '<!-- Include Javascript -->' . chr(10);
            }

            foreach ($js as $item) {
                    $pos = strrpos($item, "http");

                    if ( is_numeric($pos) ) {
                        echo '<script type="text/javascript" src="' .  trim($item) . '"></script>' .  chr(10);
                    } else {
                        $caminhoJS =  get_bloginfo('template_url');
                        echo '<script type="text/javascript" src="' . $caminhoJS . '/' . trim($item) . '.js"></script>' .  chr(10); 
                    }
            }
    }

}


/** Funcao Carrega CSS 
 *  Exemplo: loadCSS("http://google.com/jquery.css; js/backbone; jquery; accordion");
 *  Para efetuar chamada de CSS externo, informar o caminho externo, 
 *  para chamar CSS local, informar a pasta + o nome do arquivo 
 */

if ( !function_exists(loadCSS)){

    function loadCSS($arrCSS){

            $css = explode(';', $arrCSS);
            if (is_array($css) && count($css)){
                echo '<!-- Include Style CSS -->' . chr(10);
            }

            foreach ($css as $item) {
                    $pos = strrpos($item, "http");

                    if ( is_numeric($pos) ) {
                        echo '<link rel="stylesheet" href="' .  trim($item) . '.css" type="text/css" media="screen" />' .  chr(10);
                    } else {
                        $caminhoCSS =  get_bloginfo('template_url');
                        echo '<link rel="stylesheet" href="' . $caminhoCSS . '/' . trim($item) . '.css"  type="text/css" media="screen" />' .  chr(10); 
                    }
            }
    }
    
}


//Retorna a pagina corrente
if ( !function_exists(curPageURL)){
  function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
     $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
     $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
  }
}

 ?>