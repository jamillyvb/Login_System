<?php

if (isset($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['password']);

    if (!empty($email) && !empty($senha)) {
        $u->conectar("hostname", "server", "usuario", "senha");
        if ($u->msgErro == "") //se esta tudo ok
        {
            if ($u->logar($email, $senha)) {
                header("location: pagina_que_vai_se_direcionar_depois_do_login.php");
            } else {
?>
                <div id="msg-erro"> 
                    Email e/ou senha estão incorretos
                </div>
            <?php
            }
        } else {
            ?>
            <div id="msg-erro">
                <?php echo "Erro: " . $u->msgErro; ?>
            </div>
        <?php
        }
    } else {
        ?>
        <div id="msg-erro"> Preencha todos os campos!
        </div>
<?php
    }
}
?>