<form action="" method="post">
    @csrf
    name <input type="text" value="{{$student->name}}" name="name"><br>
    class <input type="text" value="{{$student->class}}" name="class"><br>
    gender <input type="text" value="{{$student->gender}}" name="gender"><br>

    <input type="submit">
</form>