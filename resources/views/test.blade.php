<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="{{route('register')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" placeholder="NAME" name="name"><br>
    <span>@error('name') {{$message}} @enderror</span>

    <label for="email">Email</label>
    <input type="email" placeholder="EMAIL" name="email"><br>
    <span>@error('email') {{$message}} @enderror</span>

    <input type="submit" value="submit">
   </form> 
</body>
</html>