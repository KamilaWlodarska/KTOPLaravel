<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/homes/list">Back</a>
            </div>
        </div>
        <h1>Add home</h1>
        <form class="form-inline" action="<?=config('app.url'); ?>/homes/save" method="post">
            @csrf
            <p>
                <label for="home_name">Name: </label>
                <input id="home_name" name="home_name" required>
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