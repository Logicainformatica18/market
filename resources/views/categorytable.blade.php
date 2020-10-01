<table class="table table-responsive  table-striped">

    <th>Código</th>
    <th>Description</th>
    <th>acciones</th>
    <tbody>

        @foreach ($category as $categorys)
            <tr>
                <td>{{ $categorys->id }}</td>
                <td>{{ $categorys->description }} </td>

                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="categoryEdit({{ $categorys->id }});Up();" class="btn btn-success note-icon-pencil" data-toggle="modal" data-target="#exampleModal">
                    </button>
              <!-- Button trigger modal -->
                    <button type="button"onclick="categoryDestroy({{ $categorys->id }})" class="btn btn-danger note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
 <!-- /.content -->
 {{ $category->onEachSide(5)->links() }}
