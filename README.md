# Монолитное веб-приложение для организации ЮНЕСКО

Данное приложение представляет собой одну из кандидатур на становление официальным лицом ЮНЕСКО в Республике Казахстан. Состоит из двух ресурсов: внешнего - фактически полностью состоящего из статических страниц, что служат для получения общей информации о ЮНЕСКО - и внутреннего, статические страницы которого еще не полностью готовы, и на котором прописана основная логика приложения, то есть: создание/считывание/обновление/удаление страниц статей, пользователей системы и прочее. **Покрытие тестами составляет 64%**

## Админ-панель

Группа форм, использующаяся для редактирования данных

N.B: для получения доступа к админ-панели необходимо **зайти под учетной записью администратора**, данные для входа по умолчанию:

```
email: admin@admin.com
пароль: test
```

На данный момент имеются следующие формы:

-   `/admin-articles` - получение пагинированного списка статей с интуитивно понятным интерфейсом и возможностью удаления статьи прямо из формы

    ![Alt text](./docs/images/article-list.png?raw=true "Articles")

-   `/admin-create-article` - создание новой статьи
    ![Alt text](./docs/images/article-create.png?raw=true "Articles")

-   `/admin-update-article` - форма для обновления данных статьи
    ![Alt text](./docs/images/article-update.png?raw=true "Articles")

-   `/admin-users` - получение пагинированного списка пользователей

    ![Alt text](./docs/images/user-list.png?raw=true "Articles")

-   `/admin-create-user` - создание нового пользователя
    ![Alt text](./docs/images/user-create.png?raw=true "Articles")

При создании статьи ей назначается, уникальный url; указав url в качестве параметра по пути `/article/{url}`, можно получить заполненный вариант статьи. Пример:
![Alt text](./docs/images/article-create-url-example.PNG?raw=true "Articles")
![Alt text](./docs/images/article-create-url-example-list.PNG?raw=true "Articles")
![Alt text](./docs/images/article-create-example-article-page.PNG?raw=true "Articles")
