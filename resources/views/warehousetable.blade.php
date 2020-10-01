    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
<table class="table table-responsive  table-striped"id="example1">
    <thead>
        <th>Código</th>
        <th class="sorting_2">Nombre</th>
        <th>Description</th>
        <th>acciones</th>
    </thead>
    <tbody>

        @foreach ($warehouse as $warehouses)
            <tr>
                <td>{{ $warehouses->id }}</td>
                <td>{{ $warehouses->name }}</td>
                <td>{{ $warehouses->description }} </td>

                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="warehouseEdit({{ $warehouses->id }});Up();" class="btn btn-success note-icon-pencil" data-toggle="modal" data-target="#exampleModal">
                    </button>
              <!-- Button trigger modal -->
                    <button type="button"onclick="warehouseDestroy({{ $warehouses->id }})" class="btn btn-danger note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
 <!-- /.content -->
 {{ $warehouse->onEachSide(5)->links() }}
</div>
</div>
</div>
</div>
</div>
</section>
