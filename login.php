<html lang="en">
  <header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    
  </header>
  
  <body>
      <div> 
        <h2> iTask: TYDO </h2>
      </div>

      <div class="body">

        <form method="POST" action="index.php">

          <div class="form">
            <div>
              <input type="email" class="input" name="email" required placeholder="Email">
            </div>
          
            <div>
              <input type="password" class="input" name="password" required placeholder="Password">
            </div>
            
            <div class="pss">
                <input type="checkbox" id="remember"> 
                <label for="remember"> Remember Me </label>
            </div>
              
            <div> 
              <button type="submit" class="button" name="login"> Log In </button>
            </div>
              
          </div>
        </form>

      </div>

  </body>
</html>