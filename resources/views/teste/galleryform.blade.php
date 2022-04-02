<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
        @csrf
        Selecione a categoria:
        <select name="select">
            <option value="valor1">Valor 1</option>
            <option value="valor2" selected>Valor 2</option>
            <option value="valor3">Valor 3</option>
          </select>
        <br>
        <input type="file"  name="images[]" multiple>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>