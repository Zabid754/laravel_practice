<div>
    <h1>Student List</h1>
    <!--{{print_r($data)}}-->

    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
@foreach($data as $student)
<tr>
    <td>{{$student->Name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->Phone}}</td>
</tr>
@endforeach

    </table>





</div>
