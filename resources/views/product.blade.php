<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add category</title>
    <link rel="stylesheet" href="/css/category.css">
</head>
<body>
    <div>
        <form action="{{route('stor')}}" method="POST">
            @csrf
          <label for="fname">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">

          <label for="lname">descreption</label>
          <input type="text" id="lname" name="desc" placeholder="Your last name..">



            <button type="submit">save</button>
        </form>
      </div>
</body>
</html>
