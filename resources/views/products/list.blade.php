<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
    @include('partials.navi')
    <div id="content">
        <div id="join">
            <div id="back">
                <a href="<?=config('app.url'); ?>/products/add">Add product</a>
            </div>
        </div>
        <h1>Products list</h1>
        <table>
            <thead>
                <tr> <th>Id</th> <th>Pcat_id</th> <th>Purchase_date</th> <th>Open_date</th> <th>Deadline</th> </tr>
            </thead>
            <tbody>
                @foreach($products as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->pcat_id}}</td>                    
                    <td>{{$el->purchase_date}}</td>
                    <td>{{$el->open_date}}</td>
                    <td>{{$el->deadline}}</td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/products/edit/{{$el->id}}">Edit</a></td>
                    <td class="tbtn"><a href="<?=config('app.url'); ?>/products/show/{{$el->id}}">Del</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>