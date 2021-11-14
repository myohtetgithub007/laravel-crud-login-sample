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
@auth
 <span>welcome {{auth()->user()->name}}</span>  
 <a href="/logout">Logout</a>

 @else
   <a href="/register">Register</a>  
      <a href="/login">login</a>  
@endauth
