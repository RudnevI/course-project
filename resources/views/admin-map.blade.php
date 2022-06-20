<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление меток на карту</title>
    @include('subviews.head-content')
    @include('subviews.openlayers-cdn')
    <style>
        .map-view-container {
            display: flex
        }
        #side-menu {
            flex: 3;
            display: flex;
            flex-direction: column
        }
        #map {
            flex: 7;

        }
        form {
            width: 40% !important;
            margin: auto
        }


    </style>
</head>
<body>
<div class="map-view-container">
@include('subviews.admin-side-menu')
@include('subviews.map')

</div>

<form
                    action="/coordinates"
                    method="POST"
                    class="form-control"
                    enctype="multipart/form-data"
                >
                    <div>
                        <label for="name" class="form-label">Широта</label>
                        <input
                            type="number"
                            id="name"
                            name="latitude"
                            style="width: 40vw"
                            class="form-control"
                            required
                        />
                    </div>
                    <div>
                        <label for="email" class="form-label"
                            >Долгота</label
                        >
                        <input
                        type="number"
                        id="email"
                        name="longitude"
                        style="width: 40vw"
                        class="form-control"
                        required
                    />
                    </div>
                    <div>
                        <label for="description" class="form-label"
                            >Описание</label
                        >
                        <textarea
                        id="description"
                        name="description"
                        style="width: 40vw"
                        class="form-control"
                        required
                    ></textarea>
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
