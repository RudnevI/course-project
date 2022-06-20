<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование записи пользователя</title>
    @include('subviews.head-content')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        #main-admin-container {
            display: flex;
            flex-direction: column;
            align-content: center;


        }

        .form-control {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 2vmin
        }

        .form-control > div {
            display: flex;
            flex-direction: column
        }

    </style>
</head>
<body>
    @include('subviews.nkn-navbar')
<div id="main-container">
    @include('subviews.admin-side-menu')
    <div id="main-admin-container">
        <form action="/users/{{$user->id}}" method="POST" class="form-control" enctype="multipart/form-data">
            @method('PUT')
            <div>
            <label for="title" class="form-label" >Имя</label>
            <input type="text" id="title" name="name" style="width: 40vw" class="form-control" required value="{{ $user->name }}">
        </div>
        <div>
            <label for="content" class="form-label">Email</label>
            <input class="form-control" type="email" id="content" name="email"  style="width: 40vw" value="{{$user->email}}" required>


        </div>
       <label for="password">Пароль</label>
       <input class="form-control" type="password" id="password" name="password"  style="width: 40vw" required>
        <div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </div>
        </form>
    </div>
</div>

</body>
</html>
