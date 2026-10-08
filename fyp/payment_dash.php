payment(dashboard):<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Amol Agencies - Payments</title>

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
font-size:24px;
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

/* MAIN */

.main{
margin-left:270px;
padding:25px;
}

/* TOPBAR */

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

.right{
font-weight:600;
color:#482683;
}

/* CARDS */

.cards{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-top:25px;
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

/* CONTENT */

.content{
display:grid;
grid-template-columns:2fr 1fr;
gap:20px;
margin-top:25px;
}

.payment-box{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.payment-box h2{
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

.status{
padding:5px 12px;
border-radius:20px;
color:white;
font-size:13px;
}

.paid{
background:#22c55e;
}

.pending{
background:#ef4444;
}

.partial{
background:#f59e0b;
}

.panel{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 3px 10px rgba(0,0,0,.08);
margin-bottom:20px;
}

.panel h3{
color:#482683;
margin-bottom:15px;
}

.btn{
width:100%;
padding:12px;
margin-bottom:10px;
border:none;
border-radius:8px;
background:#482683;
color:white;
cursor:pointer;
font-size:15px;
}

.btn:hover{
background:#5d2ca0;
}

.footer{
margin-top:20px;
text-align:center;
color:#666;
}

</style>

</head>
<body>

<?php include 'sidebar.php'; ?>
<!-- MAIN -->

<div class="main">

<div class="topbar">
<h1>Payment Management</h1>
<div class="right">Welcome Admin</div>
</div>

<!-- CARDS -->

<div class="cards">

<div class="card">
<h4>Total Collection</h4>
<h2>₹8.5 Lakh</h2>
</div>

<div class="card">
<h4>Pending Amount</h4>
<h2>₹1.2 Lakh</h2>
</div>

<div class="card">
<h4>Today's Collection</h4>
<h2>₹58,000</h2>
</div>

<div class="card">
<h4>Total Invoices</h4>
<h2>542</h2>
</div>

</div>

<div class="content">

<!-- TABLE -->

<div class="payment-box">

<h2>Payment Records</h2>

<table>

<tr>
<th>Invoice No</th>
<th>Retailer</th>
<th>Amount</th>
<th>Mode</th>
<th>Status</th>
</tr>

<tr>
<td>INV1001</td>
<td>Ganesh Stores</td>
<td>₹12,500</td>
<td>UPI</td>
<td><span class="status paid">Paid</span></td>
</tr>

<tr>
<td>INV1002</td>
<td>Shree Mart</td>
<td>₹8,000</td>
<td>Bank Transfer</td>
<td><span class="status pending">Pending</span></td>
</tr>

<tr>
<td>INV1003</td>
<td>Om Super Shop</td>
<td>₹15,500</td>
<td>Cash</td>
<td><span class="status paid">Paid</span></td>
</tr>

<tr>
<td>INV1004</td>
<td>Krishna Mart</td>
<td>₹10,000</td>
<td>UPI</td>
<td><span class="status partial">Partial</span></td>
</tr>

<tr>
<td>INV1005</td>
<td>Mahalaxmi Traders</td>
<td>₹18,500</td>
<td>Cheque</td>
<td><span class="status paid">Paid</span></td>
</tr>

</table>

</div>

<!-- RIGHT SIDE -->

<div>

<div class="panel">

<h3>Quick Actions</h3>

<button class="btn">Generate Invoice</button>
<button class="btn">Record Payment</button>
<button class="btn">Export Statement</button>

</div>

<div class="panel">

<h3>Payment Summary</h3>

<p>✅ Paid : ₹7.3 Lakh</p>
<br>
<p>⏳ Pending : ₹1.2 Lakh</p>
<br>
<p>📄 Invoices : 542</p>

</div>

<div class="panel">

<h3>Collection Efficiency</h3>

<h2 style="color:#482683;">89%</h2>

</div>

</div>

</div>

<div class="footer">
© 2026 Amol Agencies - Payment Management
</div>

</div>

</body>
</html>