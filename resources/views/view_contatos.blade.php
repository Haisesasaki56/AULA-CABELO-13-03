<form method="post" action="/contatosSalvar">
    {{ csrf_field() }}

    nome
    <input type="text" name="nome">
    <br>
    Celular
    <input type="number" name="cel">
    <br>
    <input type="submit" value="Enviar">
</form>