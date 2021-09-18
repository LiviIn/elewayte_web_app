
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Sigin Up</title>
        <link rel="icon" href="assets/image/32.png">

        <?php include 'header.php';?>
        <section class="signup">
      
           <div class="container">
               <div class="row">
                   <div class="col-md-6 center">  
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                                <h2>Create An Account</h2>
                        </div>
                        <div class="form-group box">
                            <input type="email" id="email" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" class="form-control" name= "email">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group box">
                                     <input type="text" id="firstName" placeholder="First Name" onfocus="this.placeholder=''" onblur="this.placeholder='First Name'"     class="form-control" autofocus style="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group box">
                                    <input type="text" id="firstName" placeholder="last Name" onfocus="this.placeholder=''" onblur="this.placeholder='last Name'" class="form-control" autofocus style="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group box">
                                <input type="email" id="email" onfocus="this.placeholder=''" onblur="this.placeholder='Type'" placeholder="Email" class="form-control" name= "email">
                        </div> 
                        <div class="form-group box">
                                <input type="password" id="password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group box">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                        <div class="form-group"  style="display:flex;  margin-top: 10px;">
                            <p>Already an user?</p>
                            <p><a href="login.php">&nbsp;Sign In</a></p>
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