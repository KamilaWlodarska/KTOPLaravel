<nav>
    <div>
        <div>
            <a href="<?=config('app.url'); ?>"><img src="{{ URL::asset('/images/ktop_logo.png') }}"></a>         
            @if(Auth::check())
                <a href="<?=config('app.url'); ?>/homes/list">Homes</a>
                <a href="<?=config('app.url'); ?>/products/list">Products</a>
                <a href="<?=config('app.url'); ?>/products_category/list">Products Category</a>
                <a href="<?=config('app.url'); ?>/logout">Sign out</a>
            @else
                <a href="<?=config('app.url'); ?>/login">Sign in</a>
                <a href="<?=config('app.url'); ?>/register">Sign up</a>
            @endif
        </div>
    </div>
</nav>