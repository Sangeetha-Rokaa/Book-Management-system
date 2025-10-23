<h2>Edit Book</h2>
<form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <label>Book title</label>
    <input type="text" name="title" value="{{ $book->title }}"><br><br>

    <label>Author</label>
    <input type="text" name="author" value="{{ $book->author }}"><br><br>

    <label>Publisher</label>
    <input type="text" name="publisher" value="{{ $book->publisher }}"><br><br>

    <label>Book Published</label>
    <input type="number" name="book_published" value="{{ $book->book_published }}"><br><br>

    <label>Book Price</label>
    <input type="number" name="book_price" value="{{ $book->book_price }}"><br><br>

    <label>Author Picture</label>
    <input type="file" name="author_picture"><br>
    
    @if($book->author_picture)
        <img src="{{ asset('storage/' . $book->author_picture) }}" width="50">
    @endif
    <br><br>

    <button type="submit">Update Book</button>
</form>

<a href="{{ route('books.index') }}">Back to list</a>
