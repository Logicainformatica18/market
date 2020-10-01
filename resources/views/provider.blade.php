@extends('template')

@section('content')


       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Proveedores</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Tablas</a></li>
                            <li class="breadcrumb-item active">Proveedores</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"onclick="New();$('#provider')[0].reset();">
       Gestionar Proveedores
    </button>
    <p></p>
    Buscar
    <form  name="for"id="show">
        <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="providerShow();">
    </form>

    <p></p>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Proveedores</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="" name="provider" id="provider">
                        <input type="hidden" name="id">
                        Nombres
                        <input type="text" name="name" class="form-control">
                        Description
                        <input type="text" name="description" class="form-control">
                        Celular
                        <input type="number" name="cellphone" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button"id="update" onclick="providerUpdate()" class="btn btn-warning">Modificar</button>
                    <button type="button"id="create" onclick="providerStore()" class="btn btn-success">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div id="mycontent">
        @include('providertable')
    </div>

@endsection
