<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/products_category/add">Add product</a>
            </div>
        </div>
        <h1>Products Category list</h1>
        <table>
            <thead>
                <tr> <th>Id</th> <th>Name</th> <th>Type</th> <th>Home Id</th> </tr>
            </thead>
            <tbody>
                @foreach($products_category as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->pcat_name}}</td>
                    <td>{{$el->type}}</td>
                    <td>{{$el->home_id}}</td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/products_category/edit/{{$el->id}}">Edit</a></td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/products_category/show/{{$el->id}}">Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>