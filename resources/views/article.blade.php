<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>{{$article->title}}</title>
    <style>
        main {
            width: 80%;
            margin: auto;
            margin-top: 15vmin
        }
        .article-image {
            height: 20vmin;
            width: auto;
        }
        .image-grid {
            display: flex;
            column-gap: 1vmin;
            justify-content: center;
            flex-wrap: wrap
        }
        .article-content {
            display: flex;
            align-items: center;
            margin-top: 5vmin;
            flex-direction: column
        }

    </style>
  </head>

<body>
    @include('subviews.navbar')
    <main>


        <div class="image-grid">
    @foreach($pathsToFiles as $path)
        <img class="article-image" src="<?php echo asset("storage/".$path->path)?>">
    @endforeach
</div>

<div class="article-content">
    <h1>{{$article->title}}</h1>
    <p>{{$article->content}}</p>
</div>


</main>
</body>

  </html>
