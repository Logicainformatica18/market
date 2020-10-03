@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Distribución de Productos - Almacen</h1>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Distribución de Productos - Almacen</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" onclick="New();$('#distribution')[0].reset();">
                                Agregar
                            </button>
                            <p></p>
                            Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="distributionShow();">
                            </form>

                            <p></p>
                            <div id="mycontent">
                                @include("distributiontable")
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" role="form" id="distribution" name="form">
                                                <input type="hidden" name="id" id="id">
                                                {{ csrf_field() }}


                                                Producto :

                                                <div class="autocomplete" style="width:100%;">
                                                    <input id="criterio2" type="text" name="products_id" placeholder="Ingrese texto" class="form-control" autocomplete="off">
                                                </div>
                                                Almacen
                                                <select name="warehouses_id" id="warehouses_id" class="form-control">
                                                    @foreach ($warehouse as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <p></p>
                                                Cantidad :      <input type="text" name="quantity" id="quantity"
                                                    class="form-control">



                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" value="Nuevo" class="btn btn-warning"
                                                onclick="New();$('#distribution')[0].reset();" name="new">
                                            <input type="button" value="Guardar" class="btn btn-success"id="create"
                                                onclick="distributionStore()" name="create">
                                            <input type="button" value="Modificar" class="btn btn-danger"id="update"
                                                onclick="distributionUpdate();" name="update">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                var countries = [""];
                            </script>
                            <script>
                                autocomplete(document.getElementById("criterio2"), countries);
                            </script>

                                        @foreach ($product as $item)
                                        <script>
                                            countries.push();
                                        </script>
                                        <?php
                                        echo "<script>";
                                        echo "countries.push('".$item->description."  -".$item->id."');";
                                        echo "</script>";

                                        ?>
                                        @endforeach
                                        <style>
                                            .autocomplete {
                                                /*the container must be positioned relative:*/
                                                position: relative;
                                                display: inline-block;
                                            }

                                            input {
                                                border: 1px solid transparent;

                                                padding: 10px;
                                                font-size: 16px;
                                            }

                                            input[type=text] {

                                                width: 100%;
                                            }



                                            .autocomplete-items {
                                                position: absolute;
                                                border: 1px solid #d4d4d4;
                                                border-bottom: none;
                                                border-top: none;
                                                z-index: 99;
                                                /*position the autocomplete items to be the same width as the container:*/
                                                top: 100%;
                                                left: 0;
                                                right: 0;
                                            }

                                            .autocomplete-items div {
                                                padding: 10px;
                                                cursor: pointer;
                                                background-color: #fff;
                                                border-bottom: 1px solid #d4d4d4;
                                            }

                                            .autocomplete-items div:hover {
                                                /*when hovering an item:*/
                                                background-color: #e9e9e9;
                                            }

                                            .autocomplete-active {
                                                /*when navigating through the items using the arrow keys:*/
                                                background-color: DodgerBlue !important;
                                                color: #ffffff;
                                            }
                                        </style>
@endsection
