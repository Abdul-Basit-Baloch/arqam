@extends('admin.layout')
@section('admin')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <a href="{{route('bayan.create')}}}"> <button class="btn-primary">ADD</button></a>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>CATEGORY</th>
                <th>IMAGE</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
                @foreach($bayans as $bayan)
                <tr>
                    <td scope="row">{{$bayan->id}}</td>
                    <td>{{$bayan->titile}}</td>
                    <td>{{$bayan->name}}</td>
                    <td>{{$bayan->category}}</td>
                    <td>{{$bayan->image}}</td>
                    <td>{{$bayan->status}}</td>
                    <td>
                        <button class="btn-primary">EDIT</button>
                        <button class="btn-danger">DELETE</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>

@endsection