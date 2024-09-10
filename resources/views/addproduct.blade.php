<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add product</title>
    <link rel="stylesheet" href="/css/category.css">
</head>
<body>
    <div>
        <form action="{{route('storproduct')}}" method="POST">
            @csrf
          <label for="fname">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">

          <label for="lname">descreption</label>
          <input type="text" id="lname" name="description" placeholder="description..">


          <label for="price">price</label>
          <input type="text" id="price" name="price" placeholder="Your price..">

          <label for="type">type</label>
          <select name="type" id="type">
            @foreach ($category as $item)
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
            @endforeach
          </select>



            <button type="submit">save</button>
        </form>
      </div>
</body>
</html>
