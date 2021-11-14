<form method="post" action="{{ url('/update', $stu->id) }}">  
   @csrf     
          <div class="form-group">      
              <label for="first_name"> Name:</label><br/><br/>  
              <input type="text" class="form-control" name="name" value="{{$stu->name}}"/><br/><br/>  
          </div>  
<div class="form-group">      
<label for="first_name">Email</label><br/><br/>  
              <input type="text" class="form-control" name="email" value="{{$stu->email}}"/><br/><br/>  
          
<br/>  
<button type="submit" class="btn-btn" >upadate</button>  
</form>  