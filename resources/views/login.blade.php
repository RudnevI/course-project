<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="imported-scripts/fit-text/jquery.fittext.js"></script>

    <link href="index-main.css" rel="stylesheet" />
    <title>Вход</title>
    <style>
        main {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center
        }
        #login-form {
            margin-top: 20vmin;
            width: 60%
        }


    </style>
  </head>
  <body>
    @include('subviews.nkn-navbar')
    <main>
        <form method="POST" action="/login" id="login-form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Электронная почта</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            @error('email')
                <p style="color: darkred">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Пароль</label>
            <input class="form-control" type="password" id="exampleFormControlTextarea1" rows="3" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Войти</button>

        </form>
    </main>
</html>
