<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="webdoor contato">
    <div class="center">
        <!-- <h1>Seja bem-vindo a<br>Mais Cabello!</h1> -->
    </div>
</div>

<div class="areaContato">
    <div class="center">
        <div class="left">
            <h2>Entre em contato conosco.</h2>
            <p class="preencha">Preencha o formulário ao lado e retornaremos.</p>
            <p>Se preferir ligue para nós ou façca-nos uma visita.</b>
        </p>
        <div class="tel">
            <img src="images/telefone.png" alt="">
            <p>
                <a class="telContato" href="tel:2130301251">(21) 3030-1251</a>&nbsp;&nbsp;<a class="telContato" href="tel:21967396041">(21) 96739-6041</a>
            </p>
        </div>
        <div class="local">
            <img src="images/placeholder.png" alt="">
            <p>Estrada do Joá, 3884, 2 andar<br>Barra da Tijuca - RJ</p>
        </div>
    </div>
    <div class="right">
        <h5>Dados Pessoais</h5>

        <form
            id="avaliationForm"
            class="avaliationForm"
            action="envia.php"
            method="post"
            enctype="multipart/form-data">

            <div class="dadosPessoais">
                <input type="text" name="nome" placeholder="Qual o seu nome?">
                <input type="email" name="email" placeholder="Informe seu e-mail">
                <input
                    id="telefone"
                    type="text"
                    name="telefone"
                    placeholder="Telefone para contato">
            </div>
            <div class="avaliacao">
                <h5>Avaliação</h5>
                <h3>Envie uma foto de rosto de frente e outra do topo da cabeça.</h3>
                <!-- <h6 style="font-weight: 100;">Caso queira enviar mais imagens, utilize o
                último quadro.<br>Selecione quantas precisar.</h6> -->

                <img id="foto_frente" class="mini_foto" src="images/Anexar_FotoFrente.png"/>
                <input
                    class="enviarFoto"
                    type="file"
                    id="imageFrente"
                    name="userfile[]"
                    onchange="readURL(this,'foto_frente');"/>
                <img id="foto_topo" class="mini_foto" src="images/Anexar_FotoCostas.png"/>
                <input
                    class="enviarFoto"
                    type="file"
                    id="imageTopo"
                    name="userfile[]"
                    onchange="readURL(this,'foto_topo');"/>

                <!-- <img id="foto_outros" class="mini_foto" src="images/Anexar_FotoOutros.png"
                /> <input class="enviarFoto" type="file" id="imageOutros" name="userfile[]"
                multiple="multiple" onchange="readURL(this,'foto_outros');" /> -->

                <div class="msgChangePhoto">
                    <p>Clique nas imagens acima se precisar alterá-las...</p>
                </div>

                <br>
                <h3>Agora nos conte brevemente sua história.</h3>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            </div>
            <input class="btn btnSubmit" type="submit" value="Enviar">
        </form>

    </div>
</div>
</div>
<br><br>
<div class="clear"></div>

<?php include 'footer.php'; ?>

<script>
$("#telefone").mask("(99) 99999 9999");
</script>