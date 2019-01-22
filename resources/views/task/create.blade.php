<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Create new Task</h3>

    <form action="/task" method="POST">
        {{ csrf_field() }} 

        <div>
            <input type="text" name="time">
        </div>
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <button type="submit">Create Task</button>
        </div>
    </form>
</body>
</html>