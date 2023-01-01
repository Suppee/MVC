<div class="border rounded border-dark userbox" > 
<h1 class="display-1">Register</h1>
<h3>
  <small class="text-muted">Opret en profil for at se billeder og videoer fra dine venner.</small>
</h3>
<br>
<form method="post" action"/user/register">
    <div class="form-floating mb-2">  
        <input pattern="^[a-zA-Z0-9_.-]*${4,12}" type="text" name="username" class="form-control" placeholder="John Jane" title="Must be between 4 and 12 characters, can only contain numbers and letters">
        <label for="username" class="form-label"> Username</label>
    </div>


    <div class="form-floating mb-2">  
        <input type="email" name="email" class="form-control" placeholder="name@example.com" title="">
        <label for="email" class="form-label"> Email Address</label> 
    </div>

    <!-- PASSWORD INPUT -->
    <div class="form-floating mb-3">            
        <input pattern="^(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d@$!%*#?&]{4,}$" id="password" name="password" type="password" class="form-control" placeholder="Password" title="Must be atleast 4 and contain atleast one letter and one digit">
        <label for="password" class="form-label">Password</label>
    </div>

    <div class="d-grid">
    <input type="submit" class="btn btn-primary" value="Register">
    </div>
    
</form>
</div>

<div class="border rounded border-dark userbox">
    <p>Already have an account? <a href="/user/login"> Login here!</a></p>     
</div>


