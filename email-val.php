<?php
function validaEmail($email) {
    $conta = "/^[a-zA-Z0-9\._-]+@";
    $domino = "([gmailhotmailoutlookyahoo.com])+.";//[a-zA-Z0-9\._-]Aceitar todos os domínios
    $extensao = "([com.br]{2,4})$/";//[a-zA-Z]{2,4}Aceitar todas as extensões

    $pattern = $conta . $domino . $extensao;
    //var_dump($pattern);
    if (preg_match($pattern, $email)){
        return true;
    } else {
        return false;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de e-mail</title>
</head>
<body align="center">
    <h1>Validador de e-mail Gmail, Hotmail, Outlook e Yahoo</h1>
    <div>
        <form action="email-val.php" method="POST">
            <div>
                <input type="email" placeholder="Digite aqui seu e-mail" name="cont_email" required>
                <input type="submit" name="post_email" value="Ir">
            </div>
            
            <?php
            // Define uma variável para testar o validador
            if (isset($_POST['post_email'])) {
                $input = $_POST['cont_email'];
                // Faz a verificação usando a função
                if (validaEmail($input)) {
                    echo "<span style='color:green;'><h2>O e-mail: $input inserido é válido!</h2></span>";
                } else {
                    echo "<span style='color:red;'><h2>O e-mail inserido: $input é inválido!</h2></span1>";
                }
             }
            ?>
        </form>
    </div>
    
</body>
</html>