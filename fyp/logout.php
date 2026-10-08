<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amol Agencies - Logout</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f4f6fb;
}

/* SIDEBAR */
.sidebar{
position:fixed;
left:0;
top:0;
width:270px;
height:100vh;
background:#482683;
color:white;
}

.sidebar-header{
display:flex;
align-items:center;
gap:15px;
padding:25px 20px;
border-bottom:1px solid rgba(255,255,255,0.1);
}

.logo-circle{
width:60px;
height:60px;
border-radius:50%;
background:#ffd700;
display:flex;
justify-content:center;
align-items:center;
font-size:24px;
}

.menu{
list-style:none;
padding-top:20px;
}

.menu li{
padding:16px 25px;
cursor:pointer;
transition:.3s;
}

.menu li:hover{
background:#5b33a0;
}

/* MAIN */
.main{
margin-left:270px;
padding:25px;
}

.topbar{
background:white;
padding:18px 25px;
border-radius:15px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.topbar h1{
color:#482683;
}

/* LOGOUT CARD */
.logout-box{
margin-top:30px;
background:white;
padding:40px;
border-radius:15px;
text-align:center;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.logout-btn{
padding:12px 20px;
background:#482683;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
margin-top:20px;
}

.logout-btn:hover{
background:#5d2ca0;
}

/* MODAL */
.modal{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.5);
justify-content:center;
align-items:center;
}

.modal-content{
background:white;
padding:30px;
border-radius:15px;
width:350px;
text-align:center;
}

.modal-content h2{
color:#482683;
margin-bottom:10px;
}

.modal-content p{
color:#666;
margin-bottom:20px;
}

.modal-buttons{
display:flex;
flex-direction:column;
gap:10px;
}

.modal-buttons button{
padding:12px;
border:none;
border-radius:8px;
cursor:pointer;
font-size:15px;
}

.confirm{
background:#d11a2a;
color:white;
}

.cancel{
background:#eee;
color:#333;
}

.confirm:hover{
background:#b50f1d;
}

.cancel:hover{
background:#ddd;
}

</style>
</head>

<body>

<?php include 'sidebar.php'; ?>
<!-- MAIN -->
<div class="main">

<div class="topbar">
<h1>Logout Page</h1>
</div>

<div class="logout-box">
<h2>Ready to leave?</h2>
<p>Click below to securely logout from your account.</p>
<button class="logout-btn" onclick="openModal()">Logout</button>
</div>

</div>

<!-- MODAL -->
<div class="modal" id="logoutModal">
<div class="modal-content">
<h2>Logout your account?</h2>
<p>You will need to login again to access dashboard.</p>

<div class="modal-buttons">
<button class="confirm" onclick="logout()">Logout</button>
<button class="cancel" onclick="closeModal()">Not Now</button>
</div>

</div>
</div>

<script>

function openModal(){
document.getElementById("logoutModal").style.display = "flex";
}

function closeModal(){
document.getElementById("logoutModal").style.display = "none";
}

function logout(){
// redirect to login/welcome page
window.location.href = "welcome.html";
}

</script>

</body>
</html>