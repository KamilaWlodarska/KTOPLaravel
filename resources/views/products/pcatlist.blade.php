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
        <h1>List of users in {{$products->home_name}}</h1>
        <table>
            <thead>
                <tr> <th>User_id</th> </tr>
            </thead>
            <tbody>
                @foreach($usersHomes as $el)
                <tr>
                    <td>{{$el->useruser->name}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>