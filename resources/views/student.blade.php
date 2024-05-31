<a href="praktek/create">tambah siswa</a>

<table border="1">
    <tr>
        <td>name</td>
        <td>class</td>
        <td>gender</td>
        <td>action</td>
        <td>edit</td>
    </tr>
    @foreach($student as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->gender}}</td>
        <td><a href="praktek/{{$student->id}}/delete">Hapus</a></td>
        <td><a href="praktek/{{$student->id}}/edit">Edit</a></td>
        
        
    </tr>
    @endforeach
</table>