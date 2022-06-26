
<form name="form_inserir_voluntario" method="post" action="inserir_voluntario.php">
        <h2>Cadastro de Voluntário</h2>
        <p>Email:
            <input name="email" type="text">
        </p>
        <p>Nome completo:
            <input name="nome" type="text">
        </p>
        <p>Telefone:
            <input name="telefone" type="text">
        </p>
        <p>Idade:
            <input name="idade" type="text">
        </p>
        <p>Data de nascimento:
            <input name="data_nasc" type="date">
        </p>
        <p>Por onde conheceu a Iniciativa Íris?<br>
            <input type="radio" name="onde_con" value="Instagram da Iniciativa">Instagram da Iniciativa Íris<br>
            <input type="radio" name="onde_con" value="Grupo do Whatsapp">Grupo do Whatsapp<br>
            <input type="radio" name="onde_con" value="Twitter">Twitter<br>
            <input type="radio" name="onde_con" value="Amigo/familiar">Amigo/familiar<br>
        </p>
        <p>Você fez parte da Comunidade Íris em 2021?<br>
            <input type="radio" name="comunidade" value="sim">Sim<br>
            <input type="radio" name="comunidade" value="nao">Não<br>
        </p>
        <p>LinkedIn: 
            <input name="linkedin" type="text">
        </p>
        <input name="enviar" type="submit" value="Salvar"><br><br>
        <input name="cancelar" type="reset" value="cancelar">
        <a href="form_inserir_voluntario_2.php">Página 2</a>
    </form>
