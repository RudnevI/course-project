<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Создание статьи</title>
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
                    action="/articles"
                    method="POST"
                    class="form-control"
                    enctype="multipart/form-data"
                >
                    <div>
                        <label for="title" class="form-label">Заголовок</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            style="width: 40vw"
                            class="form-control"
                            required
                        />
                    </div>
                    <div>
                        <label for="content" class="form-label"
                            >Содержимое</label
                        >
                        <textarea
                            class="form-control"
                            id="content"
                            name="content"
                            style="width: 40vw"
                            required
                        ></textarea>
                    </div>
                    <div>
                        <label for="article-image" class="form-label"
                            >Изображение</label
                        >
                        <input
                            class="form-control"
                            type="file"
                            id="article-image"
                            name="article-images[]"
                            required
                            multiple
                        />
                    </div>
                    <div>
                        <label for="url" class="form-label">Ссылка</label>
                        <input
                            type="text"
                            class="form-control"
                            name="url"
                            id="url"
                            style="width: 40vw"
                            required
                        />
                        <div class="invalid-feedback">
                            Статья с такой ссылкой уже существует
                        </div>
                    </div>
                    <div>
                        <label for="author_full_name" class="form-label"
                            >Имя автора</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            name="author_full_name"
                            id="author_full_name"
                            style="width: 40vw"
                            required
                        />
                    </div>
                    <div>
                        <button
                            class="btn btn-primary"
                            type="submit"
                            id="save-button"
                        >
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    <script>
        const urlForm = document.querySelector("#url");
        const saveButton = document.querySelector("#save-button");


        const validate = (isInvalid) => {

            if(isInvalid) {
                urlForm.classList.add("is-invalid");
                  saveButton.disabled = true;
                  return;
            }
            urlForm.classList.remove("is-invalid");
            saveButton.disabled = false;
        }

        urlForm.addEventListener("change", async (event) => {
            let existingUrls = await fetch("/articles").then((res) =>
                res.json()
            );
            let isInvalid = Array.from(existingUrls).filter(
                (url) => url.url === event.target.value
            ).length !== 0;
            validate(isInvalid);
        });
    </script>
</html>
