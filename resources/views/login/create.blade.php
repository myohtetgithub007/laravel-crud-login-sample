<form method="post" action="/login">  
   @csrf     
          
<div class="form-group">      
<label for="first_name">Email</label><br/><br/>  
              <input type="text" class="form-control" name="email"/><br/><br/>  
</div>
<br/>  
<div class="form-group">      
<label for="first_name">Password</label><br/><br/>  
              <input type="password" class="form-control" name="password"/><br/><br/>  
</div>

<button type="submit" class="btn-btn" >login</button>  
</form>  