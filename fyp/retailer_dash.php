<php>
<head>
<title>Retailers Management</title>

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

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.header h1{
    color:#4b0082;
}

.add-btn{
    background:#ffd700;
    color:#4b0082;
    border:none;
    padding:12px 20px;
    border-radius:8px;
    font-weight:bold;
    cursor:pointer;
}

/* Cards */

.cards{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:25px;
}

.card{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
    border-top:5px solid #4b0082;
}

.card h3{
    color:#666;
    margin-bottom:10px;
}

.card h2{
    color:#4b0082;
}

/* Search */

.search-section{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
    margin-bottom:25px;
}

.search-box{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
}.retailers{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.retailers h2{
    color:#4b0082;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#f1f5f9;
}

th,td{
    padding:15px;
    text-align:left;
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#fafafa;
}

/* Status */

.activ{
    background:#22c55e;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

.inactive{
    background:red;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}


/* Buttons */

.action{
    padding:8px 14px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    margin-right:5px;
}

.view{
    background:#4b0082;
    color:white;
}

.edit{
    background:#ffd700;
    color:#4b0082;
}

/* Responsive */

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

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="sidebar-header">

        <div class="logo-circle">
		<img src="c_logo.jpeg">
       </div>

        <h2>Amol Agencies</h2>

    </div>

    <ul class="menu">

<li onclick="window.location.href='dashboard.php'" >🏠 Dashboard</li>
<li onclick="window.location.href='inventory_dash.php'">📦 Inventory</li>
<li onclick="window.location.href='orders_dash.php'">🛒 Orders</li>
<li class ="active">🏪 Retailers</li>
<li onclick="window.location.href='catalog_dash.php'" >🛍Product Catalog</li>
<li onclick="window.location.href='delivery_dash.php'">🚚 Deliveries</li>
<li onclick="window.location.href='report_dash.php'">📊 Reports</li>
<li onclick="window.location.href='payment_dash.php'" >💰 Payments</li>
<li onclick="window.location.href='settings_dash.php'">⚙ Settings</li>
<li onclick="window.location.href='logout.php'">🚪 Logout</li>

    </ul>

</div>

<!-- MAIN -->

<div class="main">

<div class="header">

    <h1>Retailers Management</h1>

<button class="add-btn" onclick="addRetailer()">
    + Add Retailer
</button>

</div>

<!-- Summary Cards -->

<div class="cards">

    <div class="card">
        <h3>Total Retailers</h3>
        <h2>245</h2>
    </div>

    <div class="card">
        <h3>Active Retailers</h3>
        <h2>220</h2>
    </div>

    <div class="card">
        <h3>Inactive Retailers</h3>
        <h2>25</h2>
    </div>

    <div class="card">
        <h3>New This Month</h3>
        <h2>18</h2>
    </div>

</div>

<!-- Search -->

<div class="search-section">

<input type="text"
id="searchRetailer"
class="search-box"
onkeyup="searchRetailer()"
placeholder="Search Retailer Name...">

</div>

<!-- Retailers Table -->

<div class="retailers">

    <h2>Retailers List</h2>

<table id="retailerTable">


        <tr>
            <th>ID</th>
            <th>Retailer Name</th>
            <th>Owner</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>R101</td>
            <td>Ganesh Stores</td>
            <td>Ganesh Patil</td>
            <td>9876543210</td>
            <td>Ahmednagar</td>
            <td><span class="activ">Active</span></td>
            <td>
<button class="action view" onclick="viewRetailer(this)">
View
</button>

<button class="action edit" onclick="editRetailer(this)">
Edit
</button>
            </td>
        </tr>

        <tr>
            <td>R102</td>
            <td>Shree Mart</td>
            <td>Suresh Jadhav</td>
            <td>9876543201</td>
            <td>Pune</td>
            <td><span class="activ">Active</span></td>
            <td>
<button class="action view" onclick="viewRetailer(this)">
View
</button>

<button class="action edit" onclick="editRetailer(this)">
Edit
</button>
            </td>
        </tr>

        <tr>
            <td>R103</td>
            <td>City Traders</td>
            <td>Rohan Shah</td>
            <td>9876543222</td>
            <td>Nashik</td>
            <td><span class="inactive">Inactive</span></td>
            <td>
<button class="action view" onclick="viewRetailer(this)">
View
</button>

<button class="action edit" onclick="editRetailer(this)">
Edit
</button>

</td>
        </tr>

        <tr>
            <td>R104</td>
            <td>Om Super Shop</td>
            <td>Omkar Kale</td>
            <td>9876543233</td>
            <td>Aurangabad</td>
            <td><span class="activ">Active</span></td>
            <td>
<button class="action view" onclick="viewRetailer(this)">
View
</button>

<button class="action edit" onclick="editRetailer(this)">
Edit
</button>
            </td>
        </tr>

    </table>

</div>

</div>
<script>


// ADD RETAILER

function addRetailer(){


let id = prompt("Enter Retailer ID");

let name = prompt("Enter Retailer Name");

let owner = prompt("Enter Owner Name");

let phone = prompt("Enter Phone Number");

let location = prompt("Enter Location");

let status = prompt("Enter Status (Active/Inactive)");



if(id && name)
{


let table=document.getElementById("retailerTable");


let row=table.insertRow(-1);



row.innerHTML=

`

<td>${id}</td>

<td>${name}</td>

<td>${owner}</td>

<td>${phone}</td>

<td>${location}</td>


<td>

<span class="activ">

${status}

</span>

</td>


<td>


<button class="action view"

onclick="viewRetailer(this)">

View

</button>



<button class="action edit"

onclick="editRetailer(this)">

Edit

</button>


</td>

`;


alert("Retailer Added Successfully");


}


}





// VIEW RETAILER


function viewRetailer(btn){


let row=btn.closest("tr");


let data=row.children;



alert(

"Retailer ID : "+data[0].innerText+

"\nName : "+data[1].innerText+

"\nOwner : "+data[2].innerText+

"\nPhone : "+data[3].innerText+

"\nLocation : "+data[4].innerText+

"\nStatus : "+data[5].innerText


);


}





// EDIT RETAILER


function editRetailer(btn){


let row=btn.closest("tr");


let name=prompt(

"Update Retailer Name",

row.children[1].innerText

);



let owner=prompt(

"Update Owner Name",

row.children[2].innerText

);



let phone=prompt(

"Update Phone",

row.children[3].innerText

);



let location=prompt(

"Update Location",

row.children[4].innerText

);



if(name!=null)
row.children[1].innerText=name;


if(owner!=null)
row.children[2].innerText=owner;


if(phone!=null)
row.children[3].innerText=phone;


if(location!=null)
row.children[4].innerText=location;



alert("Retailer Updated Successfully");


}





// SEARCH RETAILER


function searchRetailer(){


let input=document
.getElementById("searchRetailer")
.value
.toLowerCase();



let rows=document
.getElementById("retailerTable")
.rows;



for(let i=1;i<rows.length;i++)
{


let text=rows[i].innerText.toLowerCase();



if(text.includes(input))

{

rows[i].style.display="";

}

else

{

rows[i].style.display="none";

}


}


}


</script>

</body>
</php>