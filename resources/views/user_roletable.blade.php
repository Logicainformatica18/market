<table class="table table-responsive">
    <th>id</th>
    <th>Descripción</th>
    <th>Eliminar</th>
    <tbody>


        @foreach ($user->roles as $item)
            <tr>
                <td>
                    {{ $item->pivot->role_id }}
                </td>
                <td>
                    {{ $item->name}}
                </td>
                <td>
                 <!-- Button trigger modal -->
                <button type="button" onclick="userRoleDestroy('{{ $item->name }}',{{ $item->pivot->user_id }});" class="btn btn-danger">
                    delete
                </button>
                </td>

            </tr>
        @endforeach
</tbody>
</table>
