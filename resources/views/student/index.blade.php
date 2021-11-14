{{-- <a href="/create">Create</a>
<table>
   <tr>
       <td>Name</td>
       <td>Email</td>
       @foreach ($aa as $stu)
       <tr><td>{{$stu->id}}</td>
           <td>{{$stu->name}}</td>
          <td>{{$stu->email}}</td>
          <td><a href="{{ url('/edit', $stu->id) }}">EDIT</a></td>
       </tr>
       @endforeach
   </tr>
</table> --}}
<a href="/register">Register</a>