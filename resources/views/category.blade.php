@extends('template')

@section('content')


       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Categorías</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Tablas</a></li>
                            <li class="breadcrumb-item active">Categorías</li>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"onclick="New();$('#category')[0].reset();">
       Gestionar Categorías
    </button>
    <p></p>
    Buscar
    <form  name="for"id="show">
        <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="categoryShow();">
    </form>

    <p></p>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Categorías</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="" name="category" id="category">
                        <input type="hidden" name="id">
                      Description
                        <input type="text" name="description" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button"id="update"  onclick="categoryUpdate()" class="btn btn-warning">Modificar</button>
                    <button type="button"id="create" onclick="categoryStore()" class="btn btn-success">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div id="mycontent">
        @include('categorytable')
    </div>

@endsection
