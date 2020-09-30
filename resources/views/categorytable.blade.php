<table class="table table-responsive">

    <th>id</th>
    <th>Description</th>
    <th>acciones</th>
    <tbody>

        @foreach ($category as $categorys)
            <tr>
                <td>{{ $categorys->id }}</td>
                <td>{{ $categorys->description }} </td>

                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="categoryEdit({{ $categorys->id }})" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                       edit
                    </button>
                </td>
                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="categoryDestroy({{ $categorys->id }})" class="btn btn-danger">
                       delete
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
