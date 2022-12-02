<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Test</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="{{url('destroy/'.$data->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>