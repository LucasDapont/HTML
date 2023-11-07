<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-br">
</head>
<body>
    <form name="form2" method="post" action="recebe_dados.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" size="40">
        &nbsp;&nbsp;
        Sexo:
        <input type="radio" name="sexo" id="m" value="M"><label for="m">M</label>
        <input type="radio" name="sexo" id="f" value="F"><label for="f">F</label>
        <br>
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" size="40">
        <br>
        <br>
        <label for="nav">Navegador preferido:</label>
        <select name="browser" id="nav">
        <option selected>Browser</option>
            <option selected>Google chrome</option>
            <option selected>Internet Explorer</option>
            <option selected>Opera</option>
            <option selected>Mozilla firefox</option>
            <option selected>Safari</option>
        </select>
        <br><br>
        Esporte que aprecia:<br>
        <input type="checkbox" name="box[]" id="fut" value="Futebol">
        <label form="fut">Futebol</label> 
        <input type="checkbox" name="box[]" id="bas" value="Basquete">
        <label form="bas">Basquete</label>
        <input type="checkbox" name="box[]" id="vol" value="Volei">
        <label form="vol">Volei</label>
        <input type="checkbox" name="box[]" id="ten" value="Tenis">
        <label form="ten">Tenis</label> 
        <input type="checkbox" name="box[]" id="han" value="Handebol">
        <label form="han">Handebol</label>
        <input type="checkbox" name="box[]" id="nem" value="Nenhum deles">
        <label form="nem">Nenhum deles</label><br><br>
        <label form="com">Comentário sobre o esporte preferido:</label><br>
        <textarea name="comentario" id="com" cols="50" rows="5"></textarea>
        <br><br>
        <input type="submit" name="enviar" value="Enviar">&nbsp;&nbsp;
        <INPUT type="reset" name="limpar" value="Limpar">
    </body>
</html>
