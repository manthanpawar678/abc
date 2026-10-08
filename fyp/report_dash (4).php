report(dashboard):<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amol Agencies - Reports</title>

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

/* ================= SIDEBAR ================= */

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

.logo-circle img{
    width:38px;
    height:38px;
}

.logo-circle{
width:60px;
height:60px;
border-radius:50%;
background:white;
display:flex;
justify-content:center;
align-items:center;
font-size:26px;
}

.sidebar-header h2{
font-size:22px;
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

.active{
background:#4b0082;
border-left:5px solid #ffd700;
}

/* ================= MAIN ================= */

.main{
margin-left:270px;
padding:25px;
}

/* ================= TOPBAR ================= */

.topbar{
background:white;
padding:18px 25px;
border-radius:15px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.topbar h1{
color:#482683;
}

.admin{
font-weight:600;
color:#482683;
}

/* ================= CARDS ================= */

.cards{
margin-top:25px;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
border-top:5px solid #482683;
}

.card h4{
color:#666;
margin-bottom:10px;
}

.card h2{
color:#482683;
}

/* ================= CONTENT ================= */

.content{
display:grid;
grid-template-columns:2fr 1fr;
gap:20px;
margin-top:25px;
}

.report-table{
background:white;
border-radius:15px;
padding:25px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.report-table h2{
margin-bottom:20px;
color:#482683;
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#f1f5f9;
}

th,td{
padding:14px;
text-align:left;
border-bottom:1px solid #eee;
}

.side-panels{
display:flex;
flex-direction:column;
gap:20px;
}

.panel{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.panel h3{
color:#482683;
margin-bottom:15px;
}

.sales-box{
background:#482683;
color:white;
padding:20px;
border-radius:15px;
text-align:center;
}

.sales-box h2{
font-size:34px;
margin-top:10px;
}

.footer{
margin-top:25px;
text-align:center;
color:#666;
}

/* ================= RESPONSIVE ================= */

@media(max-width:1000px){

.cards{
grid-template-columns:repeat(2,1fr);
}

.content{
grid-template-columns:1fr;
}

}

@media(max-width:700px){

.sidebar{
display:none;
}

.main{
margin-left:0;
}

.cards{
grid-template-columns:1fr;
}

}

</style>
</head>

<body>

<?php include 'sidebar.php'; ?>

<div class="main">

<div class="topbar">

<h1>Sales Reports & Analytics</h1>

<div class="admin">
Welcome Admin
</div>

</div>

<!-- CARDS -->

<div class="cards">

<div class="card">
<h4>Total Sales</h4>
<h2>₹12.4 Lakh</h2>
</div>

<div class="card">
<h4>Total Orders</h4>
<h2>1240</h2>
</div>

<div class="card">
<h4>Retailers</h4>
<h2>245</h2>
</div>

<div class="card">
<h4>Best Seller</h4>
<h2>Dairy Milk</h2>
</div>

</div>



<div class="content">



<div class="report-table">

<h2>Top Selling Chocolates</h2>

<table>

<tr>
<th>Chocolate</th>
<th>Units Sold</th>
<th>Revenue</th>
</tr>

<tr>
<td>Dairy Milk</td>
<td>2500</td>
<td>₹2.8 Lakh</td>
</tr>

<tr>
<td>Silk</td>
<td>1800</td>
<td>₹2.1 Lakh</td>
</tr>

<tr>
<td>5 Star</td>
<td>1700</td>
<td>₹1.8 Lakh</td>
</tr>

<tr>
<td>Perk</td>
<td>1450</td>
<td>₹1.2 Lakh</td>
</tr>

<tr>
<td>Bournville</td>
<td>980</td>
<td>₹95,000</td>
</tr>

<tr>
<td>Fuse</td>
<td>850</td>
<td>₹72,000</td>
</tr>

</table>

</div>



<div class="side-panels">

<div class="sales-box">

<h4>Monthly Revenue</h4>
<h2>₹12.4L</h2>

</div>

<div class="panel">

<h3>Monthly Summary</h3>

<p>January : ₹7.5 Lakh</p>
<br>

<p>February : ₹8.2 Lakh</p>
<br>

<p>March : ₹9.4 Lakh</p>
<br>

<p>April : ₹10.8 Lakh</p>
<br>

<p>May : ₹12.4 Lakh</p>

</div>

<div class="panel">

<h3>Top Retailers</h3>

<p>🥇 Ganesh Stores</p>
<br>

<p>🥈 Om Super Shop</p>
<br>

<p>🥉 Shree Mart</p>
<br>

<p>🏅 Krishna Mart</p>

</div>

<div class="panel">

<h3>Chocolate Category Performance</h3>

<p>* Milk Chocolates : 48%</p>
<br>

<p>* Premium Chocolates : 32%</p>
<br>

<p>* Wafer Chocolates : 20%</p>

</div>

</div>

</div>

<div class="footer">
© 2026 Amol Agencies Dashboard | Reports & Analytics
</div>

</div>

</body>
</php>