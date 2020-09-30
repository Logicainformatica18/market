<table class="table table-responsive">

    <th>id</th>
    <th>Description</th>
    <th>Category</th>
    <th>acciones</th>
    <tbody>

        @foreach ($product as $products)
            <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->description }} </td>
                <td>{{ $products->category->description }} </td>
                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="productEdit({{ $products->id }})" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                       edit
                    </button>
                </td>
                <td>    <!-- Button trigger modal -->
                    <button type="button"onclick="productDestroy({{ $products->id }})" class="btn btn-danger">
                       delete
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
