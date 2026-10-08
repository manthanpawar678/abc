<php>
<head>
<title>Orders Management</title>

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

.search-section{
    background:white;
    padding:20px;
    border-radius:15px;
    margin-bottom:25px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.search-box{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
}.orders{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,0.08);
}

.orders h2{
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

.delivered{
    background:#22c55e;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

.pending{
    background:#f59e0b;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

.processing{
    background:#3b82f6;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:13px;
}

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

.update{
    background:#ffd700;
    color:#4b0082;
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

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="sidebar-header">

        <div class="logo-circle">
		<img src="c_logo.jpeg">
		</div>

        <h2>Amol Agencies</h2>

    </div>

    <ul class="menu">
    <ul class="menu">

        <li onclick="window.location.href='dashboard.php'" >🏠 Dashboard</li>
        <li onclick="window.location.href='inventory_dash.php'">📦 Inventory</li>
 <li class ="active">🛒 Orders</li>
 <li onclick="window.location.href='retailer_dash.php'">🏪 Retailers</li>
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

    <h1>Orders Management</h1>
<button class="add-btn" onclick="openNewOrder()">
    + New Order
</button>

</div>

<div class="cards">

    <div class="card">
        <h3>Total Orders</h3>
        <h2>845</h2>
    </div>

    <div class="card">
        <h3>Delivered</h3>
        <h2>620</h2>
    </div>

    <div class="card">
        <h3>Pending</h3>
        <h2>145</h2>
    </div>

    <div class="card">
        <h3>Processing</h3>
        <h2>80</h2>
    </div>

</div>

<div class="search-section">

<input type="text"
id="search"
class="search-box"
onkeyup="searchOrder()"
placeholder="Search Order ID or Retailer..."

</div>

<div class="orders">

    <h2>Recent Orders</h2>

<table id="orderTable">
        <tr>
            <th>Order ID</th>
            <th>Retailer</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>#1001</td>
            <td>Ganesh Stores</td>
            <td>Dairy Milk</td>
            <td>60</td>
            <td>₹1200</td>
            <td><span class="delivered">Delivered</span></td>
            <td>
<button class="action view" onclick="viewOrder(this)">
View
</button>

<button class="action update" onclick="updateOrder(this)">Update
</button>

</td>
        </tr>

        <tr>
            <td>#1002</td>
            <td>Shree Mart</td>
            <td>Silk</td>
            <td>25</td>
            <td>₹950</td>
            <td><span class="pending">Pending</span></td>
            <td>
<button class="action view" onclick="viewOrder(this)">
View
</button>

<button class="action update" onclick="updateOrder(this)">Update
</button>

            </td>
        </tr>

        <tr>
            <td>#1003</td>
            <td>Om Super Shop</td>
            <td>5 Star</td>
            <td>100</td>
            <td>₹1500</td>
            <td><span class="delivered">Delivered</span></td>
            <td>
<button class="action view" onclick="viewOrder(this)">
View
</button>

<button class="action update" onclick="updateOrder(this)">Update
</button>


            </td>
        </tr>

        <tr>
            <td>#1004</td>
            <td>City Traders</td>
            <td>Perk</td>
            <td>70</td>
            <td>₹700</td>
            <td><span class="processing">Processing</span></td>
            <td>
<button class="action view" onclick="viewOrder(this)">
View
</button>

<button class="action update" onclick="updateOrder(this)">Update
</button>


            </td>
        </tr>

    </table>

</div>

</div>
<script>


// NEW ORDER BUTTON

function openNewOrder(){

let orderId = prompt("Enter Order ID");

let retailer = prompt("Enter Retailer Name");

let product = prompt("Enter Product Name");

let qty = prompt("Enter Quantity");

let amount = prompt("Enter Amount");

let status = prompt(
"Enter Status (Pending/Processing/Delivered)"
);


if(orderId && retailer && product)
{

let table=document.getElementById("orderTable");


let row=table.insertRow(-1);


row.innerHTML=

`

<td>${orderId}</td>

<td>${retailer}</td>

<td>${product}</td>

<td>${qty}</td>

<td>₹${amount}</td>

<td>
<span class="pending">
${status}
</span>
</td>


<td>
<button class="action view" onclick="viewOrder(this)">
View
</button>
<button class="action update"
onclick="updateOrder(this)">
Update
</button>


</td>

`;


alert("Order Added Successfully");


}

}
// VIEW BUTTON

function viewOrder(btn){


let row=btn.parentElement.parentElement;


let data=row.children;


alert(

"Order ID : "+data[0].innerText+
"\nRetailer : "+data[1].innerText+
"\nProduct : "+data[2].innerText+
"\nQuantity : "+data[3].innerText+
"\nAmount : "+data[4].innerText+
"\nStatus : "+data[5].innerText

);


}

// UPDATE BUTTON

function updateOrder(btn){


let row=btn.parentElement.parentElement;


let retailer=prompt(
"Update Retailer Name",
row.children[1].innerText
);


let product=prompt(
"Update Product",
row.children[2].innerText
);



let qty=prompt(
"Update Quantity",
row.children[3].innerText
);



let amount=prompt(
"Update Amount",
row.children[4].innerText.replace("₹","")
);



row.children[1].innerText=retailer;

row.children[2].innerText=product;

row.children[3].innerText=qty;

row.children[4].innerText="₹"+amount;


alert("Order Updated Successfully");


}
// SEARCH FUNCTION


function searchOrder(){


let input=document
.getElementById("search")
.value
.toLowerCase();



let rows=document
.getElementById("orderTable")
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