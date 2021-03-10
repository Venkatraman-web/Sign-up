
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Open+Sans:wght@600;700&family=Roboto&family=Roboto+Slab&family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Sign-up page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sign-up">
   <div class="h4">
      <h4 class="heading-4">Sign Up</h1>    
   </div>
   <div id="forms">
       <form action="Sign-upsuccess.php" method="POST">
       <div class="name">
           <input type="text" name="Name" id="name" placeholder="Name">
       </div>
       <div class="email">
           <input type="email" name="Email" id="email" placeholder="E-mail">
       </div>
       <div class="password">
           <input type="password" name="password" id="pass" placeholder="Password">
       </div>
       <div class="confirmpassword">
           <input type="password" name="confirm" id="confirm" placeholder="Confirm your Password">
       </div>
       <div class="checkbox">
       <input type="checkbox" name="check" id="check"><span class="span">I read and agree to the </span><span class="text">Terms & Conditions</span>
       </div>
       <div class="button">
          <button class="btn">CREATE ACCOUNT</button>
       </div>
       </form>
   </div>
    </div>
    

</body>
</html>