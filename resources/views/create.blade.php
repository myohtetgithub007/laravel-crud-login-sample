<form method="post" action="store">  
   @csrf     
          <div class="form-group">      
              <label for="first_name"> Name:</label><br/><br/>  
              <input type="text" class=" @error('name') is-invalid @enderror form-control" name="name" /><br/><br/> 
              @error('name')
<div>{{ $name }}</div> 
          </div>  
<div class="form-group">      
<label for="first_name">Email</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
          
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  