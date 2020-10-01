<table class="table table-responsive table-striped">

    <th>Código</th>
    <th>Descripción</th>
    <th>Categorias</th>
    <th>Acciones</th>
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
                <td>
                <button type="button" onclick="category_productEdit('{{$products->id }}');category_product.product_id.value='{{$products->id}}'" class="btn btn-warning" data-toggle="modal" data-target="#modal_category_product">Categoria</button>
                    <!-- Button trigger modal -->
                    <button type="button" onclick="productEdit({{ $products->id }})" class="btn btn-success note-icon-pencil"
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
