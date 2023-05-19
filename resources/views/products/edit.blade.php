<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/products/list">Back</a>
            </div>
        </div>
        <h1>Edit product</h1>
        <form class="form-inline" action="<?=config('app.url'); ?>/products/update/{{$products->id}}" method="post">
            @csrf
            <p>
                <label for="pcat_id">Id: </label>
                <input id="id" name="id" value="{{$products->id}}" readonly>
            </p>
            <p>
                <label for="pcat_id">PCat id: </label>
                <input id="pcat_id" name="pcat_id" value="{{$products->pcat_id}}" required>
            </p>
            <p>
                <label for="purchase_date">Purchase Date: </label>
                <input type="date" id="purchase_date" name="purchase_date" value="{{$products->purchase_date}}" required>
            </p>
            <p>
                <label for="open_date">Open Date: </label>
                <input type="date" id="open_date" name="open_date" value="{{$products->open_date}}" required>
            </p>
            <p>
                <label for="deadline">Deadline: </label>
                <input type="date" id="deadline" name="deadline" value="{{$products->deadline}}" required>
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