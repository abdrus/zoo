<html>
    <head>
        <title>
            Создать животное
        </title>
    </head>
    <body>
        <form method="post" action="{{ route('animal-create') }}">

            {{ csrf_field() }}

            <label>Имя</label>
            <input type="text" name="name">

            <label>Возраст</label>
            <input type="text" name="age">

            <input type="submit" value="Сохранить">
        </form>
    </body>
</html>