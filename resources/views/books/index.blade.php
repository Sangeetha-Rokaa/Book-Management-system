<a href="{{ route('books.create') }}">Add New Book</a>

{{-- Flash Message --}}
@if(session('success'))
<div style="color:green; margin: 10px 0;">
    {{ session('success') }}
</div>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Published count</th>
        <th>Price</th>
        <th>Author picture</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @forelse ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->book_published }}</td>
            <td>{{ $book->book_price }}</td>
            <td>
                @if($book->author_picture)
                    <img src="{{ asset('storage/' . $book->author_picture) }}" width="50">
                @endif
            </td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" style="text-align:center;">No Books Available</td>
        </tr>
    @endforelse
</table>
