<form method="post" action="/store">  
   @csrf     
          <div class="form-group">      
              <label for="first_name"> Name:</label><br/><br/>  
              <input type="text" class="form-control" name="name"/><br/><br/>  
              @error('name')
          <div class="alert alert-danger">{{ $message }}</div> 
    @enderror 
          </div>  
<div class="form-group">      
<label for="first_name">Email</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
                 @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
              @enderror  

          
<br/>  
<button type="submit" class="btn-btn" >Insert</button>  
</form>  

