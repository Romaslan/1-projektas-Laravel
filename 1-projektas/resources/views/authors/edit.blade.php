<h1>edit</h1>

<form method='POST' action='{{route('author.update', [$author])}}' >

Name: <input class="form-control" type='text' name="author_name" value='{{$author->name}}'/>
        Surname: <input class="form-control" type='text' name="author_surname" value='{{$author->surname}}'/>
        Description: <input class="form-control" type='text' name="author_description" value='{{$author->description}}'/>
        Phone: <input  class="form-control" type='text' name="author_phone" value='{{$author->phone}}'/>

    @csrf

    <button type='submit'>Edit</button>

</form>