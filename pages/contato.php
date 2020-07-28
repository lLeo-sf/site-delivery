<?php
include('../components/top.php');


@$nome = $_POST['name'];

@$mensagem = $_POST['mensagem'];


$corpo = "Olá me chamo, " . $nome . ". " . $mensagem;

if(!empty($nome) && !empty($mensagem)){
    echo '<script> window.location.href = ("https://api.whatsapp.com/send?phone=5535984282859&text=',$corpo,'") </script>';
}else{
    echo "<script> alert('Todos os campos precisam ser preenchidos!') </script>";
}







?>




<div class="contato">
    <h1>Entre em contato</h1>

    <form action="#" method="POST">
        <input type="text" name="name" placeholder="Nome..."><br>
        <textarea name="mensagem" placeholder="Mensagem"></textarea><br>
        <input type="submit" value="Enviar" id="send">
    </form>
  
    
</div>






<?php
include('../components/footer.php');
?>