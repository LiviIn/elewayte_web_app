
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sigin Up</title>
        <link rel="icon" href="assets/image/32.png">
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  
        <?php include 'header.php';?>
        <section class="signup">
      
           <div class="container">
               <div class="row">
                   <div class="col-md-6 center">  
                    <form class="form-horizontal" role="form">
                        
                        <h2>Log In</h2>
                        <div class="form-group box">
                                <input type="email" id="email"  placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Type'" class="form-control" name= "email">
                        </div> 
                        <div class="form-group box">
                                <input type="password" id="password"  placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Type'" class="form-control">
                        </div>
                        <div class="form-group box">
                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <div class="form-group"  style="  margin-top: 10px;">
                            <p><a href="forget.php">Forget Password</a></p>
                        </div>
                        <div class="form-group"  style="display:flex;  margin-top: 10px;">
                            <p>New user? <a href="signup.php"> Create An Account</a></p>
                        </div>
                    </form> 
                    </div>
                       <div class="col-md-6 center-img">
                       <img src="assets\image\image.png" alt="">
                    </div>
               </div>
           </div>
        </section>
        <?php include 'footer.php';?>
    </body>