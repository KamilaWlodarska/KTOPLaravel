<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/products_category/list">Back</a>
            </div>
        </div>
        <h1>Edit product category</h1>
        <form class="form-inline" action="<?=config('app.url'); ?>/products_category/update/{{$products_category->id}}" method="post">
            @csrf
            <p>
                <label for="pcat_name">Id: </label>
                <input id="id" name="id" value="{{$products_category->id}}" readonly>
            </p>
            <p>
                <label for="pcat_name">Name: </label>
                <input id="pcat_name" name="pcat_name" value="{{$products_category->pcat_name}}" required>
            </p>
            <p>
                <label for="type">Type: </label>
                <input id="type" name="type" value="{{$products_category->type}}" required>
            </p>
            <p>
                <label for="home_id">Home id: </label>
                <input id="home_id" name="home_id" value="{{$products_category->home_id}}" required>
            </p>
            <p><button type="submit" class="btn btn-primary mb-2 tbtn">Update</button></p>
        </form>

        <p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </p>
    </div>
</body>
</html>