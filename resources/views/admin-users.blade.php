<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e4d51f1203.js" crossorigin="anonymous"></script>

    @include('subviews.head-content')

    <title>Список пользователей</title>
    <style>
        #main-container {
            display: flex
        }
        #side-menu {
            flex: 2;
            display: flex;
            flex-direction: column;
            background-color: #F8F9FA;
            margin-top: 0;
            min-height: 100vmin
        }
        #main-admin-container {
            flex: 7;
        }
        .side-menu-button {
            border-bottom: 0.5vmin solid grey;
            width: 100%;
        }
        nav {
            margin-bottom: 0 !important;

        }

        #links-panel {
            width: 40%;
            height: 10vmin;
            display: flex
        }
        #links-panel * {
            display: none
        }
        #links-panel a {
            display: block
        }
    </style>
</head>
<body>
@include('subviews.nkn-navbar')
<div id="main-container">
    @include('subviews.admin-side-menu')
    <div id="main-admin-container" class="container">
<table class="table">
    <thead>
      <tr>

        <th scope="col">Имя</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <form action="/users/{{ $user->id }}" method="post">
                    @method('DELETE')

                    <button type="button" class="btn btn-danger" title="Удаление" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" id="deleteButton"><img src="icons/trash.svg"></button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Удалить пользователя?</h5>

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                          <button type="submit" class="btn btn-danger" >Подтвердить удаление</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
            </td>
            <td>
                <form action="/admin-edit-user/{{ $user->id }}" method="get">

                    <button class="btn btn-primary" title="Редактирование"><img src="icons/pencil-square.svg" ></button></td>
                    </form>
            </td>
        </tr>
        @endforeach

    </tbody>

  </table>
  <div class="d-flex justify-content-center" >
    {{ $users->links() }}
</div>
</div>

</div>

</body>
<script>
</script>
</html>
