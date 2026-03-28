<h3>Essa é a visão Contatos</h3>

@foreach ($contatos as $contato)
<p>{{ $contato['nome'] }} </p>
<p>{{ $contato['cel'] }} </p>
@endforeach