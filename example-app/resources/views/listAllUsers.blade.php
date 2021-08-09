<table>

    <tr>
        <td>#ID</td>
        <td>Nome:</td>
        <td>EMail:</td>
        <td>Ações:</td>
    </tr>

    @foreach($users as $user)

    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>


    </tr>
    @endforeach
</table>
