<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/posts" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" >
    <input type="submit" name="submit">
</form>

</body>
</html>
