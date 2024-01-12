<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>
<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
        @foreach($supports as $support)
        <td>{{ $support->subject }}</td>
        <td>{{ $support->status }}</td>
        <td>{{ $support->body }}</td>
        <td>
            <a href="{{ route('supports.show', $support->id) }}">Ir</a>
            <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>