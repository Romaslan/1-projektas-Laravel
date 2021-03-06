<h1>index</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach ($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->surname}}</td>
            <td>{{$author->description}}</td>
            <td>{{$author->phone}}</td>
            <td>
                <a href="{{route('author.edit', [$author])}}">Edit</a>
                <form method="post" action='{{route('author.destroy', [$author])}}'>
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>