<h1>create</h1>

<form method='POST' action='{{route('author.store')}}' >

    Name: <input type='text' name="author_name"/>
    Surname: <input type='text' name="author_surname"/>
    Description: <input type='text' name="author_description"/>
    Phone: <input type='text' name="author_phone"/>

    @csrf

    <button type='submit'>Add</button>

</form>