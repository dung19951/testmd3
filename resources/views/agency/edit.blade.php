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

<div class="container">
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>edit </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('home.update',$agency->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label for="">ma dai li</label>
                        <input type="text" class="form-control" name="agent" value="{{$agency->agent_code}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tên đại lí</label>
                        <input type="text" class="form-control" name="name" value="{{$agency->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">số điện thoại</label>
                        <input type="text" class="form-control" name="phone" value="{{$agency->phone}}"  required>
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" class="form-control" name="email" value="{{$agency->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" name="add" value="{{$agency->address}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">tên người quản lí</label>
                        <input type="text" class="form-control" name="ten" value="{{$agency->manage}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">trạng thái</label>
                        <select name="status" id="">
                            @foreach($status as $key)
                                <option value="{{$key->id}}">{{$key->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
