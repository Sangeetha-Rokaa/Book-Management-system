<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        a {
            margin-right: 15px;
            text-decoration: none;
            color: #007BFF;
        }

        form {
            max-width: 400px;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
        }

        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input {
            width: calc(100% - 130px);
            padding: 5px;
            margin-bottom: 12px;
        }

        button {
            margin-left: 120px;
            padding: 8px 15px;
            border: none;
            background: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <a href="{{route('home')}}">Home</a>
    <a href="{{ route('books.index')}}">List of book</a>

    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
        <strong>Ooops ! something went wrong:</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
    </ul>
    @endif
        <label for="Title">Title</label> 
        <input type="text" name="title" value="{{old('title')}}"><br>

        <label for="Author">Author</label>
        <input type="text" name="author" value="{{old('author')}}"><br>

        <label for="Publisher">Publisher</label>
        <input type="text" name="publisher" value="{{old('publisher')}}"><br>

        <label for="Book published">Book published</label>
        <input type="number" name="book_published" value="10000" min="1" value="{{old('book_published')}}"><br>

        <label for="Book price">Book price</label>
        <input type="number" name="book_price" value="599" min="1" value="{{old('book_price')}}"><br>

        <label for="Author picture">Author Picture</label>
        <input type="file" name="author_picture"><br>

        <button type="submit">Add new Book</button>
    </form>
</body>
</html>
