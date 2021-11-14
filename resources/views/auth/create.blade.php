<form method="post" action="/register">  
   @csrf     
          <div class="form-group">      
              <label for="first_name"> Name:</label><br/><br/>  
              <input type="text" class="form-control" name="name" /><br/><br/> 
            
          </div>  
<div class="form-group">      
<label for="first_name">Email</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
</div>
<br/>  
<div class="form-group">      
<label for="first_name">Password</label><br/><br/>  
              <input type="password" class="form-control" name="password"/><br/><br/>  
</div>
<div class="form-group">      
<label for="first_name">Confirm Password</label><br/><br/>  
              <input type="password" class="form-control" name="confirm-password"/><br/><br/>  
</div>
<button type="submit" class="btn-btn" >Register</button>  
</form>  