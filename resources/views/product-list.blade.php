@vite(["resources/sass/app.scss"])
<h4>list product</h4>
<table class="table table-bordered table-striped table-hover">
    @foreach($product as $obj)
        <tr>
            <td>{{ $obj->id }}</td>
            <td>{{ $obj->product_name }}</td>
            <td>{{ $obj->price }}</td>
        </tr>
    @endforeach
</table>
