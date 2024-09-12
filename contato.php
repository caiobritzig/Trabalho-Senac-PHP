<?php
$title = "Contato";
include "header.php";
?>

<div>
                <h1>Contato</h1>
                <br>
                <p>Fale com a nossa empresa</p>
                <br>
                <div>
                    <form action="" method="get">
                        <div>
                            <label for="form_nome">Digite seu nome</label>
                            <input type="text" id="form_nome"><br><br>
                        </div>
                        <div>
                            <label for="form_email">Digite seu e-mail</label>
                            <input type="text" id="form_email"><br><br>
                        </div>
                        <div>
                            <label for="form_mensagem">Digite sua mensagem</label><br>
                            <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                        </div><br>
                        <button type="submit" id="botao">Enviar via botão</button>
                    </form>
                </div>
            </div>
<?php
include "footer.php";
?>