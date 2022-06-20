<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование статьи</title>
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
        <form action="/articles/{{$article->id}}" method="POST" class="form-control" enctype="multipart/form-data">
            @method('PUT')
            <div>
            <label for="title" class="form-label" >Заголовок</label>
            <input type="text" id="title" name="title" style="width: 40vw" class="form-control" required value="{{ $article->title }}">
        </div>
        <div>
            <label for="content" class="form-label">Содержимое</label>
            <textarea class="form-control" id="content" name="content"  style="width: 40vw" required>
                {{$article->content}}
            </textarea>
        </div>
        <div>
            <label for="article-image" class="form-label">Изображение</label>
            <input class="form-control" type="file" id="article-image" name="article-image">
        </div>
        <div>
            <label for="url" class="form-label">Ссылка</label>
            <input type="text" class="form-control" name="url" id="url" style="width: 40vw" required value="{{ $article->url }}">
        </div>
        <div>
            <label for="author_full_name" class="form-label">Имя автора</label>
            <input type="text" class="form-control" name="author_full_name" id="author_full_name" style="width: 40vw" required value="{{ $article->author_full_name }}">
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </div>
        </form>
    </div>
</div>

</body>
</html>
