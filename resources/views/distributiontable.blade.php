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

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th></th>
                                    <th class="sorting">Código</th>
                                    <th class="sorting">Producto</th>
                                    <th class="sorting">Cantidad</th>
                                    <th class="sorting">Almacén</th>
                                    <th class="sorting">Fecha</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($distribution as $distributions)
                                        <tr>
                                            <td></td>
                                            <td>{{ $distributions->id }}</td>
                                            <td>{{ $distributions->product->description }}</td>
                                            <td>{{ $distributions->quantity }}</td>
                                            <td>{{ $distributions->warehouse->name }}</td>
                                            <td>{{ $distributions->created_at }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="distributionEdit('{{ $distributions->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="distributionDestroy('{{ $distributions->id }}'); return false"></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

