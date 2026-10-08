<!DOCTYPE html>
<html>
<head>
<title>About Us - Amol Agencies</title>

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
    padding:25px;
}

/* HEADER */

.header{
    background:linear-gradient(135deg,#4b0082,#6a0dad);
    color:white;
    text-align:center;
    padding:30px;
    border-radius:15px;
    margin-bottom:25px;
}

.header h1{
    color:#ffd700;
    margin-bottom:10px;
}

/* TEAM SECTION */

.section-title{
    color:#4b0082;
    margin-bottom:20px;
    font-size:28px;
}

.team-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
    margin-bottom:30px;
}

.card{
    background:white;
    border-radius:15px;
    padding:25px;
    text-align:center;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
    border-top:5px solid #4b0082;
}

.photo{
    width:120px;
    height:120px;
    border-radius:50%;
    margin:auto;
    margin-bottom:15px;
    border:4px solid #ffd700;
    object-fit:cover;
}

.card h2{
    color:#4b0082;
    margin-bottom:10px;
}

.info{
    color:#555;
    line-height:1.8;
}

/* DISTRIBUTOR */

.distributor{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
    margin-bottom:30px;
    border-left:6px solid #ffd700;
}

.distributor h2{
    color:#4b0082;
    margin-bottom:15px;
}

/* PROJECT */

.project{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.project h2{
    color:#4b0082;
    margin-bottom:15px;
}

.project p{
    color:#555;
    line-height:1.8;
}

.footer{
    text-align:center;
    margin-top:25px;
    color:#666;
}

</style>

</head>

<body>

<!-- HEADER -->

<div class="header">

    <h1>Project Team</h1>

    <p>
        Amol Agencies Management System
    </p>

</div>

<!-- TEAM MEMBERS -->

<h2 class="section-title">Our Team</h2>

<div class="team-container">

    <div class="card">

        <img src="member1.jpg" class="photo">

        <h2>Shrawani Gandhi(Project Leader)</h2>

        <div class="info">

            Government Polytechnic, Ahilyanagar.<br>

            Diploma in Computer Technology Student<br>

            📧 gandhishrawani@gmail.com<br>

            📞 8767929955

        </div>

    </div>

    <div class="card">

        <img src="member1.jpg" class="photo">

        <h2>Anuja Rode</h2>

        <div class="info">

            Government Polytechnic, Ahilyanagar.<br>

            Diploma in Computer Technology Student<br>

            📧 arode@gmail.com<br>

            📞 9226599924

        </div>

    </div><div class="card">

        <img src="member1.jpg" class="photo">

        <h2>Grishma Dabi</h2>

        <div class="info">

            Government Polytechnic, Ahilyanagar.<br>

            Diploma in Computer Technology Student<br>

            📧 grishmadabi@gmail.com<br>

            📞 7796313323

        </div>

    </div><div class="card">

        <img src="member1.jpg" class="photo">

        <h2>Samruddhi Wade</h2>

        <div class="info">

            Government Polytechnic, Ahilyanagar.<br>

            Diploma in Computer Technology Student<br>

            📧 wadesamruddhi@gmail.com<br>

            📞 9834808257

        </div>

    </div>

    </div>

</div>

<!-- DISTRIBUTOR INFO -->

<div class="distributor">

    <h2>Distributor Information</h2>

    <p><b>Agency Name:</b> Amol Agencies</p>

    <p><b>Distributor:</b> Mr. Amol Gandhi</p>

    <p><b>Business Type:</b> Cadbury Product Distribution</p>

    <p><b>Location:</b> Ahmednagar, Maharashtra</p>

    <p><b>Contact:</b> +91 72498 50522</p>

</div>

<!-- PROJECT INFO -->

<div class="project">

    <h2>About The Project</h2>

    <p>
        Amol Agencies Management System is a web-based
        distributor management platform developed as an
        academic project. The system helps manage
        inventory, orders, retailers, deliveries and
        reports through a centralized dashboard.
    </p>

</div>

<div class="footer">

    © 2026 Amol Agencies Management System

</div>

</body>
</html>