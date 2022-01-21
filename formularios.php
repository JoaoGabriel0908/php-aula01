<?php
    /* Comentários 
    em 
    bloco
    */ 
    // Comentários em linhas
    // Escreve um conteúdo na tela
    // echo('Testando o PHP');

    // isset() - permite verificar a existencia de uma variavel ou de um objeto.

    // Validação para identificar se o botão foi clicado e disponibilizado na ação do GET.
    if(isset($_GET['btnSalvar']))
    {
        // Recuperando dados via GET do formulário
        $nome = $_GET["txtNome"];
        $cidade = $_GET["sltCidade"];
        $sexo = $_GET["rdoSexo"];
        $obs = $_GET["txtObs"];

        // Foi criado essas váriaveis para resolver o problemas de váriavel
        // indefinida na exibição dos dados
        $idiomaPortugues = null;
        $idiomaIngles = null;
        $idiomaEspanhol = null;

        // Tratamento para recuperar os checkbox que foram selecionados no formulário
        if(isset($_GET['chkPortugues'])) {
            $idiomaPortugues = $_GET['chkPortugues'];
        }
        if(isset($_GET['chkIngles']))
        {
            $idiomaIngles = $_GET['chkIngles'];
        }
        if(isset($_GET['chkEspanhol']))
        {
            $idiomaEspanhol = $_GET['chkEspanhol'];
        }
        
        // Escrevendo o conteudo das variaveis
        echo('<b>Nome:</b>' .$nome . '<br>');
        echo('<b>Cidade:</b>' . $cidade . '<br>');
        echo('<b>Sexo:</b>' . $sexo . '<br>');
        echo('<b>Obs: </b>' . $obs . '<br>');
        echo('<b>Idiomas: </b>' . $idiomaPortugues. ' ' .$idiomaIngles. ' ' . $idiomaEspanhol);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- - <Style> = Essa tag é um CSS incorporado que pode ser utilizado
                já dentro do HTMl. 
    -->
    <style>
        /* Código para desativar o redimensionamento da textarea */
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <!-- 
        Métodos dos Formulários:
        - GET > Permite retirar os dados dos formulários e disponibilizar
        na URL da página.

        - POST > Permite retirar os dados dos formulários e disponiblizar 
        em váriaveis locais.

        - ACTION > é utilizado para especificar em qual arquivo ou página
        será disponibilizado os dados do FORM.
        
     -->
    <form name="formCadastro" method="GET" action="formularios.php">
        <!-- - Input type = "text" - permite colocar uma caixa do tipo texto.
        - Size = "" - permite especificar o tamanho da caixa.
        - Maxlenght = "" - permite configurar a quantidade de caracteres que
        será digitado. 
        -->
        Nome: <input type="text" name="txtNome" size="50" maxlength="30">
        <br><br>

        <!-- - <select> - permite criar uma lista de opções
            <option> - É através dela que podemos criar itens dentro
                da lista.
            <option value = ""> - A propriedade value é obrigatória
                para que o formulário consiga resgatar o valor do item
                selecionado pelo usuário e disponibilizar para o back-end.
        -->
        Cidade: 
        <select name="sltCidade" id="">

        <!-- - Selected e Checked = Esses métodos faz com que, quando uma 
            pessoa abra a página ja deixa a opção pré-selecionado. 
        -->
            <option value=""selected>Selecione sua cidade</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
            <option value="carapicuíba">Carapicuíba</option>
            <option value="osasco" >Osasco</option>
        </select>
        <br><br>

        <!-- - <input type = "radio"> - Permite criar opções de escolha.
            Obs: Para configurar o radio fazendo com que permita
            apenas uma opção de escolhe é obrigatório todas as inputs
            terem o mesmo nome.
        -->
        Sexo: 
        <input type="radio" name="rdoSexo" value="F"> Feminino
        <input type="radio" name="rdoSexo" value="M"> Masculino
        <input type="radio" name="rdoSexo" value="O"> Outro
        <br><br>

        Idioma:
        <input type="checkbox" name="chkPortugues" value="PT" checked>Portugues
        <input type="checkbox" name="chkIngles" value="EN">Inglês
        <input type="checkbox" name="chkEspanhol" value="ES">Espanhol
        <br><br>

        <!-- - <Textarea> = Essa tag é um bloco de texto maiores. Ela tem uma
                quantidade de coluna (COLS) e linhas (ROW). 
        -->
        Observação:
        <textarea name="txtObs" id="" cols="30" rows="5"></textarea>
        <br><br>

        <!-- <input type = "submit"> - permite retirar os dados do formulário
                atarvés do próprio HTML, fazendo um submit nos dados.

            <input type = "button" - somente será possivel retirar os dados 
                do formulário através do JavaScript.
        
            <input type = "reset" - permite limpar todos os elementos do
                formulário.
        -->
        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">
    </form>
</body>
</html>