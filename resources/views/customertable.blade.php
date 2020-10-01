<table class="table table-responsive  table-striped"id="example1">
    <thead>
        <th>Código</th>
        <th class="sorting_2">Description</th>
        <th>acciones</th>
    </thead>
    <tbody>

        @foreach ($customer as $customers)
            <tr>
                <td>{{ $customers->id }}</td>
                <td>{{ $customers->description }} </td>

                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="customerEdit({{ $customers->id }});Up();" class="btn btn-success note-icon-pencil" data-toggle="modal" data-target="#exampleModal">
                    </button>
              <!-- Button trigger modal -->
                    <button type="button"onclick="customerDestroy({{ $customers->id }})" class="btn btn-danger note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
 <!-- /.content -->
 {{ $customer->onEachSide(5)->links() }}
