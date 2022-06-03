<?php
include "config.php";
include DIR_PATH."./template/header.php";
include DIR_PATH."./template/nav.php";
?>
<main>
    
    <form action="envio.php" methof="post">
        <label for="nome">Destinatario: </label><br />
        <input type="text" name="nome" placeholder="nome"><br /><br />
        
        <label for="email">Assunto: </label><br />
        <input type="text" name="email" placeholder="nome"><br /><br />

        <label for="mensagem">Mensagem</label><br />
        <textarea name="msg" placeholder="nome"></textarea><br /><br /><br />
        <button type="submit" name="enviar" >Enviar</button>
    </form>
    
</main>
<?php
require DIR_PATH."/template/footer.php";
?>