<div class="border rounded border-dark userbox" > 
<h1 class="display-1">Login</h1>

<form method="post" action="/user/login" >
    <div id="login" class="form-floating mb-2">           
    <input id="email" class="form-control" name="email" placeholder="name@example.com">
    <label for="email" class="form-label">Email Address</label>
    </div>

    <div class="form-floating mb-3">            
    <input id="password" name="password" type="password" class="form-control" placeholder="Password" >
    <label for="password" class="form-label"> Password</label>
    </div>

    <div class="d-grid mb-3">
    <input type="submit" class="btn btn-primary" value="Log On">
    </div>
</form>    
</div>

<div class="border rounded border-dark userbox">
    <p>Don't have an account yet? <a href="/user/register"> Register</a></p> 
    
</div>
