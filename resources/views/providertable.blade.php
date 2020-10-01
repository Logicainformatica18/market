<table class="table table-responsive  table-striped">

    <th>Código</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Celular</th>
    <th>Acciones</th>
    <tbody>

        @foreach ($provider as $providers)
            <tr>
                <td>{{ $providers->id }}</td>
                <td>{{ $providers->name }} </td>
                <td>{{ $providers->description }} </td>
                <td>{{ $providers->cellphone }} </td>

                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="providerEdit({{ $providers->id }});Up();" class="btn btn-success  note-icon-pencil" data-toggle="modal" data-target="#exampleModal">
                    </button>
                    <button type="button"onclick="providerDestroy({{ $providers->id }})" class="btn btn-danger  note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>