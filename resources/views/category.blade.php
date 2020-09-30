@extends('template')

@section('content')





    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Gestionar category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                    <button type="button" onclick="categoryUpdate()" class="btn btn-warning">Modificar</button>
                    <button type="button" onclick="categoryStore()" class="btn btn-success">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div id="mycontent">
        @include('categorytable')
    </div>

@endsection
