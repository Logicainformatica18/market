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
                                    <th>Cargo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->dni }}</td>
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->names }}</td>
                                            <td>{{ $user->cellphone }}</td>
                                            @if ($user->photo == '' && $user->sex == 'M')
                                                @php
                                                $user->photo = '../male.png'
                                                @endphp

                                            @elseif($user->photo == '' && $user->sex == 'F')
                                                @php
                                                $user->photo = '../female.png'
                                                @endphp
                                            @endif
                                            <td><img src="{{ asset('imageusers/' . $user->photo) }}" alt="" srcset=""
                                                    width="50"></td>
                                            <td>{{ $user->position }}</td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="userEdit('{{ $user->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash"
                                                    onclick="userDestroy('{{ $user->id }}'); return false"></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <!-- /.content -->
                            {{ $users->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
