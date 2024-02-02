<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap">


    <style>
         body {
  
            background: url('bg.jpg') no-repeat center center fixed; 
            background-size: cover;
            text-align:center;
            justify-content: center;
            align-items: center;
            display: flex;


        }
    
        h2 {
            font-size: 24px;
            position: relative;
            display: inline-block;
        }
        h2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; 
            height: 100%;
            background-color: white;
            animation: expandBackground 2s ease-out forwards;
        }
        @keyframes expandBackground {
            to {
                width: 0;
                background-color: white; 
            }
        }
        input{
            height: 6%;
            background-color:#ffffff00;
            border:none;
            border-bottom:2px solid white;
            width: 90%;
            color:white;
            

        }
        input:focus{
            outline:none;
        }

        button{
            width:100%;
            background-color:white;
            border:none;
            height: 7%;
            margin-top:100px;
            font-family: 'Roboto', sans-serif;

        }
        button:hover{
            background-color:#bbc5bb;
            transition:1s
        }
        .form{
            background-color:#ffffff0d;
            width: 30%;
            border-radius:6px;
            box-shadow: 13px 15px 16px 14px rgba(0, 0, 0, 0.1);
            
        }
        .redtxt{
            color:#ff000000;
            font-family: 'Roboto', sans-serif;
            position: absolute;
            margin-top:40%;
            background-color:#ff000000;
            border-top-left-radius: 0px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 0px;

            width: 0%;
            height:6%;
            justify-content: center;
            align-items: center;
            display: flex;
            animation: redtxt 2s ease-out forwards;


        }
        @keyframes redtxt {
            to {
                background-color:white;
                color:black;
                width: 30%;
                transition:2s;
                border-left:6px solid red;
                


            }
            
        }

    </style>

    </head>
    <body>
        <div class="form">
            <h2 style="font-family: 'Roboto', sans-serif;color:white">Admin</h2>
        <!-- Form for login -->
        <form action="server.php" method="post" class="">
        <span class="input-group-text bg-primary text-white"  style="color:white"><i class="fas fa-user"></i></span>
            <input type="name" class="form-control" placeholder="Username" name="username"><p></p>
            <span class="input-group-text bg-primary text-white" style="color:white"><i class="fas fa-lock"></i></span>
            <input type="password" placeholder="Password" name="password"><p></p>
            <!--<h6 style="font-family: 'Roboto', sans-serif;color:white;"><span style="color:red;">Note: </span>After login this page is shown then <span style="color:red">Something Went Wrong..</span> </h6>-->

            <button class="btn-primary" type="submit" name="login">Login</button>

        </form>
    </div>
    <?php if(isset($_GET['err'])=="true") { ?>
				<span class="redtxt">Check your username or password</span>
				<?php  }?>
    </body>
</html>
