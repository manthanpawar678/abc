<!DOCTYPE php>
<php>
<head>
    <title>Amol Agencies - Cadbury Distributor</title>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

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
            overflow:hidden;
            font-family:'Poppins',sans-serif;
            position:relative;
        }

        .container{
            width:85%;
            max-width:900px;
            text-align:center;

            background:rgba(255,255,255,0.08);
            backdrop-filter:blur(12px);

            border-radius:25px;

            padding:40px;

            color:white;

            box-shadow:0 0 30px rgba(0,0,0,0.4);

            z-index:10;
        }

        .logo{
            width:220px;
            margin-bottom:15px;
			border-radius: 160px;
            animation:glow 3s infinite alternate;
        }

        @keyframes glow{

            from{
                filter:drop-shadow(0 0 10px gold);
            }

            to{
                filter:drop-shadow(0 0 30px gold);
            }

        }

        h1{
    font-family:'Vivaldi',cursive;
    font-size:90px;
    color:#f5d28a;
    margin-bottom:10px;
}

        h2{
            color:#ffe082;
            letter-spacing:2px;
            margin-bottom:25px;
            font-size:24px;
        }

        p{
            font-size:18px;
            line-height:1.8;
            margin-bottom:35px;
        }

        button{
            background:#ffd700;
            color:#4b0082;

            border:none;

            padding:15px 40px;

            border-radius:40px;

            font-size:18px;

            font-weight:bold;

            cursor:pointer;

            transition:0.4s;
        }

        button:hover{
            transform:scale(1.08);
            box-shadow:0 0 25px gold;
        }

        .footer{
            position:absolute;
            bottom:15px;
            color:white;
            font-size:14px;
        }

        .choco{
            position:absolute;
            font-size:50px;
            opacity:0.45;
        }

        .c1{
            left:8%;
            top:18%;
            animation:float 8s infinite;
        }

        .c2{
            right:10%;
            top:12%;
            animation:float 12s infinite;
        }

        .c3{
            left:15%;
            bottom:15%;
            animation:float 10s infinite;
        }

        .c4{
            right:12%;
            bottom:20%;
            animation:float 9s infinite;
        }

        .c5{
            left:50%;
            top:5%;
            animation:float 11s infinite;
        }

        .c6{
            right:30%;
            bottom:8%;
            animation:float 13s infinite;
        }

        @keyframes float{

            0%{
                transform:translateY(0px) rotate(0deg);
            }

            50%{
                transform:translateY(-35px) rotate(15deg);
            }

            100%{
                transform:translateY(0px) rotate(0deg);
            }

        }

    </style>
</head>

<body>

    <div class="choco c1">🍫</div>
    <div class="choco c2">🍬</div>
    <div class="choco c3">🍫</div>
    <div class="choco c4">🍩</div>
    <div class="choco c5">🍫</div>
    <div class="choco c6">🍬</div>

    <div class="container">
         
        <img src="c_logo.jpeg" class="logo" alt="Amol Agencies Logo">
        
        <h1>Amol Agencies</h1>

        <h2>AUTHORIZED CADBURY DISTRIBUTOR</h2>

        <p>
            Welcome to the Distribution & Agency Management System.
            Manage inventory, retailers, orders, deliveries,
            sales tracking and agency operations through one
            centralized platform.
        </p>

        <button onclick="startApp()">
            Get Started
        </button>
		
	</br>
	</br>
	
		
		<button onclick="window.location.href='team.php'">
            View Our Team Information
        </button>


    </div>

    <div class="footer">
        © 2026 Amol Agencies | Distribution Management System
    </div>

    <script>

        function startApp()
        {
            alert("Welcome to Amol Agencies");
            Later:
            window.location.href='login.php';
            
        }

    </script>

</body>
</php>