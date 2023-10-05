<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="assets/css/animate.css">

	<style>
		body {
            display: block;
		background-image: url(assets/images/b0dc8f35-3126-4eae-b575-38285553c9a4-thumb.jpg);
		background-size: cover;
		background-position:center;
	
        background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        
        opacity: 80%;
        background-color: #e9ddda;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
	.un:hover, .pass:hover {
        border: 2px solid red !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #e93b0f, #f37830);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(240, 236, 30, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(245, 228, 136, 0.12);
        color: #fdf039;
        padding-top: 15px;
    }
    .submit:hover{
        background: linear-gradient(to right, #e9ddda, #f8572e);
  
 
    }
    .btn:hover{
            background-color: ;
            animation: pulse ;
            animation-duration: 3s;
            
            
        }
       
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #f01a12;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
        
	}

	</style>
</head>
<body>
   
	<div class="main">
        <h1 style="text-align: center; padding-top: 30px; ">signIn</h1>
	  <form class="form1">
		<input class="un " type="text" align="center" placeholder="Username">
		<input class="pass" type="password" align="center" placeholder="Password">
		<a class="submit" href="home.php" align="center">Sign in</a>
		<p class="forgot" align="center"><a href="register.php">Register Now</p>
			  
				  
	  </div>
	   
  </body>
</html>