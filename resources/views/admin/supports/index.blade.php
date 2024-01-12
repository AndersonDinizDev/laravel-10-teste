<h1>Listagem dos suportes</h1>

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
    </tr>
        @endforeach
    </tbody>
</table>