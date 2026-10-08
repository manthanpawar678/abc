<php>
<head>
    <title>Amol Agencies - Register</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#240046,#3c096c,#5a189a,#7b2cbf);
            font-family:Arial,sans-serif;
			animation:bgMove 8s infinite alternate;
            overflow:hidden;
            position:relative;
        }

     @keyframes bgMove{
	 
    0%{background-position:left;}
    100%{background-position:right;}
      }
	  
        .container{
            width:450px;
            background:rgba(255,255,255,0.08);
            backdrop-filter:blur(12px);
            border-radius:25px;
            padding:35px;
            text-align:center;
            color:white;
            box-shadow:0 0 30px rgba(0,0,0,0.4);
			 animation:zoomIn 1.2s;
            z-index:10;
        }
		
		@keyframes zoomIn{
    from{
        transform:scale(0.5);
        opacity:0;
    }
    to{
        transform:scale(1);
        opacity:1;
    }
}

        .logo{
            width:90px;
            height:90px;
            margin-bottom:10px;
			border-radius:50%;
			animation:glow 3s infinite alternate;
        }
		
		@keyframes glow{
    from{
        text-shadow:0 0 10px gold;
    }
    to{
        text-shadow:0 0 25px white;
    }
}


        h1{
            font-family:Cambria;
            font-size:45px;
            color:#f5d28a;
            margin-bottom:8px;
        }

        h2{
            color:#ffe082;
            margin-bottom:25px;
            letter-spacing:2px;
            font-size:18px;
        }

        .input-box{
            text-align:left;
            margin-bottom:15px;
        }

        label{
            color:#ffe082;
            font-weight:bold;
            display:block;
            margin-bottom:5px;
        }

        input{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            outline:none;
            font-size:15px;
        }

        button{
            width:100%;
            background:#ffd700;
            color:#4b0082;
            border:none;
            padding:12px;
            border-radius:30px;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            transition:0.4s;
        }

        button:hover{
            transform:scale(1.05);
            box-shadow:0 0 20px gold;
        }

        #msg{
            margin-top:15px;
            font-weight:bold;
        }

        .links{
            margin-top:18px;
        }

        .links a{
            color:#ffe082;
            text-decoration:none;
            font-size:14px;
        }

        .links a:hover{
            text-decoration:underline;
        }

        .icon{
            position:absolute;
            font-size:50px;
            opacity:0.4;
        }

        .i1{
            left:8%;
            top:15%;
            animation:float 8s infinite;
        }

        .i2{
            right:10%;
            top:20%;
            animation:float 10s infinite;
        }

        .i3{
            left:15%;
            bottom:15%;
            animation:float 12s infinite;
        }

        .i4{
            right:12%;
            bottom:20%;
            animation:float 9s infinite;
        }

        @keyframes float{
            0%{
                transform:translateY(0px);
            }

            50%{
                transform:translateY(-30px);
            }

            100%{
                transform:translateY(0px);
            }
        }

    </style>

</head>

<body>

    <div class="icon i1">🍫</div>
    <div class="icon i2">🍬</div>
    <div class="icon i3">🍩</div>
    <div class="icon i4">🍭</div>

    <div class="container">

        <img src="c_logo.jpeg" class="logo">

        <h1>Create Account</h1>

        <h2>🏭Join Amol Agencies</h2>

        <div class="input-box">
            <label>Full Name</label>
            <input type="text" id="name" placeholder="Enter Full Name">
        </div>

        <div class="input-box">
            <label>Email</label>
            <input type="email" id="email" placeholder="Enter Email">
        </div>

        <div class="input-box">
            <label>Username</label>
            <input type="text" id="user" placeholder="Create Username">
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" id="pass" placeholder="Create Password">
        </div>

        <div class="input-box">
            <label>Confirm Password</label>
            <input type="password" id="cpass" placeholder="Confirm Password">
        </div>

       <button onclick="window.location.href='dashboard.php'">Register</button>
	   
        <p id="msg"></p>

        <div class="links">
            <a href="login.php">Already have an account? Login</a>
        </div>

    </div>

    <script>

        function register()
        {
            var name =
            document.getElementById("name").value;

            var email =
            document.getElementById("email").value;

            var user =
            document.getElementById("user").value;

            var pass =
            document.getElementById("pass").value;

            var cpass =
            document.getElementById("cpass").value;

            if(name=="" || email=="" || user=="" || pass=="" || cpass=="")
            {
                document.getElementById("msg").innerphp =
                "Please fill all fields";

                document.getElementById("msg").style.color =
                "#ff8080";
            }
            else if(pass!=cpass)
            {
                document.getElementById("msg").innerphp =
                "Passwords do not match";

                document.getElementById("msg").style.color =
                "#ff8080";
            }
            else
            {
                document.getElementById("msg").innerphp =
                "Registration Successful!";

                document.getElementById("msg").style.color =
                "#90ee90";

                setTimeout(function(){
                    window.location.href="registerpageamol.php";
                },1500);
            }
        }

    </script>

</body>
</php>