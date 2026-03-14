<form method="post" action="/contato">
    {{ csrf_field() }}

    nome
    <input type="text" name="nome">
    <br>
    senha
    <input type="password" name="senha">
    <br>
    <input type="submit" value="Enviar">
</form>