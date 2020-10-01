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
        <th class="sorting_2">Descripción</th>
        <th>Categorias</th>
        <th>Proveedor</th>
        <th>Acciones</th>
    </thead>


    <tbody>

        @foreach ($product as $products)
            <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->description }} </td>
                <td>
                    @foreach ($products->categorys as $item)
                        {{ $item->description }} <b> -</b>
                    @endforeach
                </td>
                <td>{{ $products->provider->name}} </td>
                <td>
                <button type="button" onclick="category_productEdit('{{$products->id }}');category_product.product_id.value='{{$products->id}}'" class="btn btn-warning" data-toggle="modal" data-target="#modal_category_product">Categoria</button>
                    <!-- Button trigger modal -->
                    <button type="button" onclick="productEdit({{ $products->id }});Up();" class="btn btn-success note-icon-pencil"
                        data-toggle="modal" data-target="#exampleModal">
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" onclick="productDestroy({{ $products->id }})" class="btn btn-danger note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
                                <!-- /.content -->
                                {{ $product->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
