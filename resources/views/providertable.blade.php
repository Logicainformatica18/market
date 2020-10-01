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
                            <table class="table table-responsive  table-striped" id="example1">
                                <thead>
                                    <th>Código</th>
                                    <th class="sorting">Nombre</th>
                                    <th>Descripción</th>
                                    <th>Celular</th>
                                    <th>Acciones</th>
                                </thead>

                                <tbody>

                                    @foreach ($provider as $providers)
                                        <tr>
                                            <td>{{ $providers->id }}</td>
                                            <td>{{ $providers->name }} </td>
                                            <td>{{ $providers->description }} </td>
                                            <td>{{ $providers->cellphone }} </td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" onclick="providerEdit({{ $providers->id }});Up();"
                                                    class="btn btn-success  note-icon-pencil" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                </button>
                                                <button type="button" onclick="providerDestroy({{ $providers->id }})"
                                                    class="btn btn-danger  note-icon-trash">
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- /.content -->
                            {{ $provider->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
