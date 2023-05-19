<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/homes/add">Add home</a>
            </div>
        </div>
        <h1>Homes list</h1>
        <table>
            <thead>
                <tr> <th>Home Id</th> <th>Home Name</th> </tr>
            </thead>
            <tbody>
                @foreach($homes as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->home_name}}</td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/homes/userslist/{{$el->id}}">Users</a></td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/homes/edit/{{$el->id}}">Edit</a></td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/homes/show/{{$el->id}}">Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>