<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Создание пользователя</title>
        @include('subviews.head-content')
        <link rel="stylesheet" href="css/admin.css" />
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
                row-gap: 2vmin;
            }

            .form-control > div {
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        @include('subviews.nkn-navbar')
        <div id="main-container">
            @include('subviews.admin-side-menu')
            <div id="main-admin-container">
                <form
                    action="/users"
                    method="POST"
                    class="form-control"
                    enctype="multipart/form-data"
                >
                    <div>
                        <label for="name" class="form-label">Имя</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            style="width: 40vw"
                            class="form-control"
                            required
                        />
                    </div>
                    <div>
                        <label for="email" class="form-label"
                            >Email</label
                        >
                        <input
                        type="email"
                        id="email"
                        name="email"
                        style="width: 40vw"
                        class="form-control"
                        required
                    />
                    </div>
                    <div>
                        <label for="password" class="form-label"
                            >Пароль</label
                        >
                        <input
                        type="password"
                        id="password"
                        name="password"
                        style="width: 40vw"
                        class="form-control"
                        required
                    />
                    </div>

                        <div>
                            <button
                            class="btn btn-primary"
                            type="submit"
                            id="save-button"
                            style="margin-top: 2vmin; align-self: center"

                        >
                            Сохранить
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
<script>

</script>
</html>
