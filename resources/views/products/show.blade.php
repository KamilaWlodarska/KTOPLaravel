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
        <h1>Confirmation - Delete Id: {{$products->id}}</h1>
        <form class="form-inline" action="<?=config('app.url'); ?>/products/delete/{{$products->id}}" method="post">
            @csrf
            <p>
                <label for="pcat_id">Id: </label>
                <input id="id" name="id" value="{{$products->id}}" readonly>
            </p>
            <p>
                <label for="pcat_id">PCat id: </label>
                <input id="pcat_id" name="pcat_id" value="{{$products->pcat_id}}" readonly required>
            </p>
            <p>
                <label for="purchase_date">Purchase Date: </label>
                <input id="purchase_date" name="purchase_date" value="{{$products->purchase_date}}" readonly required>
            </p>
            <p>
                <label for="open_date">Open Date: </label>
                <input id="open_date" name="open_date" value="{{$products->open_date}}" readonly required>
            </p>
            <p>
                <label for="deadline">Deadline: </label>
                <input id="deadline" name="deadline" value="{{$products->deadline}}" readonly required>
            </p>
            <p><button type="submit" class="btn btn-primary mb-2 tbtn">Delete</button></p>
        </form>
    </div>
</body>
</html>