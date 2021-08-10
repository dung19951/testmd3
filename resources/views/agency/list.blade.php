<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="{{route('home.search')}}"method="get">
    @csrf
    <input type="text" name="input_search">
    <button type="submit">tim kiem</button>
</form>
<form method="get" action="{{route('home.create')}}">
    <button type="submit">Add </button>
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">agent code</th>
        <th scope="col">name</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">address</th>
        <th scope="col">manage</th>
        <th scope="col">status</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($agencys) == 0)
        <tr><td colspan="4">Không có dữ liệu</td></tr>
    @else
        @foreach($agencys as $key => $agency)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $agency->agent_code}}</td>
                <td>{{ $agency->name}}</td>
                <td>{{ $agency->phone}}</td>
                <td>{{ $agency->email}}</td>
                <td>{{ $agency->address}}</td>
                <td>{{ $agency->manage}}</td>
                <td>{{ $agency->status->name}}</td>
                <td><a href="{{route('home.edit',$agency->id)}}">sửa</a></td>
                <td><a href="{{route('home.delete',$agency->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
