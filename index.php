<?php
$title = "Página Inicial";
include "header.php";
?>

<?php
    $nome = "Caio";
    $saudacao = "Olá";
    // echo $saudacao . $nome;
    $idade = 20; // escreva a idade do nome
    // echo "Sua idade é:" . $idade;
?>
<h1>Olá <?php echo $nome; ?></h1>
<br>
<p>Bem vindo a página da minha empresa!</p>
<br>
<p>Na Jar Drug, transformamos a simplicidade dos frascos em arte. Somos apaixonados por criar soluções
    criativas para armazenar, organizar e decorar o seu espaço. Cada frasco que oferecemos é uma fusão
    de funcionalidade e design, ideal para quem valoriza estilo e praticidade no dia a dia. Descubra
    nossa coleção única e adicione um toque de elegância ao seu ambiente com a Jar Drug. </p>
<?php
include "footer.php";
?>