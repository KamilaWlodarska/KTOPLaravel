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
        <h1>Add product category</h1>
        <form class="form-inline" action="<?=config('app.url'); ?>/products_category/save" method="post">
            @csrf
            <p>
                <label for="pcat_name">Name: </label>
                <input id="pcat_name" name="pcat_name" required>
            </p>
            <p>
                <label for="type">Type: </label>
                <select id="type" name="type">
					<option value="żywność">żywność</option>
					<option value="leki">leki</option>
					<option value="chemia">chemia</option>
					<option value="inne">inne</option>
				</select> 
            </p>
            <p>
                <label for="home_id">Home Id: </label>
                <input id="home_id" name="home_id">
            </p>
            <p>
                <button type="submit" class="btn btn-primary mb-2 tbtn">Add</button>
            </p>
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