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

                                    <th>Código</th>
                                    <th>Dni</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Nombres</th>
                                    <th>Celular</th>
                                    <th>Foto</th>
                                    <th>Rol ó Cargo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users)
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                            <td>{{ $users->dni }}</td>
                                            <td>{{ $users->firstname }}</td>
                                            <td>{{ $users->lastname }}</td>
                                            <td>{{ $users->names }}</td>
                                            <td>{{ $users->cellphone }}</td>
                                            @if ($users->photo == '' && $users->sex == 'M')
                                                @php
                                                $users->photo = '../male.png'
                                                @endphp

                                            @elseif($users->photo == '' && $users->sex == 'F')
                                                @php
                                                $users->photo = '../female.png'
                                                @endphp
                                            @endif
                                            <td><img src="{{ asset('imageusers/' . $users->photo) }}" alt="" srcset=""
                                                    width="50"></td>
                                            <td>

                                                @foreach ($users->roles_ as $item)
                                                {{ $item->name }}
                                                @endforeach
                                            </td>

                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="userEdit('{{ $users->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash"
                                                    onclick="userDestroy('{{ $users->id }}'); return false"></button>
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
