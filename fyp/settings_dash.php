<?php
$conn = mysqli_connect("localhost","root","","amol_agencies");

if(!$conn){
    die("Connection Failed");
}

$user_id = 1;

$result = mysqli_query($conn,"SELECT * FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($result);

if(isset($_POST['update_account']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(!empty($password))
    {
        $password = password_hash($password,PASSWORD_DEFAULT);

        mysqli_query($conn,"UPDATE users SET
        username='$username',
        email='$email',
        phone='$phone',
        password='$password'
        WHERE id='$user_id'");
    }
    else
    {
        mysqli_query($conn,"UPDATE users SET
        username='$username',
        email='$email',
        phone='$phone'
        WHERE id='$user_id'");
    }

    echo "<script>
    alert('Account Updated Successfully');
    window.location='settings.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Amol Agencies - Settings</title>

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

/* HEADER */

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

/* SETTINGS CARDS */

.settings-grid{
display:grid;
grid-template-columns:1fr 1fr;
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

.card h2{
color:#482683;
margin-bottom:20px;
}

.form-group{
margin-bottom:15px;
}

.form-group label{
display:block;
margin-bottom:6px;
font-weight:600;
color:#555;
}

.form-group input{
width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:8px;
outline:none;
}

.checkbox-group{
margin-bottom:12px;
}

.checkbox-group label{
margin-left:8px;
}

</style>

</head>

<body>
<?php include 'sidebar.php'; ?>
<!-- MAIN -->

<div class="main">

<div class="topbar">

<h1>System Settings</h1>

<div class="right">
Welcome Admin
</div>

</div>

<div class="settings-grid">

<!-- ACCOUNT SETTINGS -->
<h2>👤 Account Settings</h2>
<div class="card">
<form method="POST">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $user['username']; ?>">
</div>

<div class="form-group">
<label>Email Address</label>
<input type="email" name="email" value="<?php echo $user['email']; ?>">
</div>

<div class="form-group">
<label>Phone Number</label>
<input type="text" name="phone" value="<?php echo $user['phone']; ?>">
</div>

<div class="form-group">
<label>New Password</label>
<input type="password" name="password" placeholder="Enter New Password">
</div>
</div>
<!-- ✅ ONLY ADDED EDIT BUTTON -->
<div style="margin-top:20px; text-align:right;">
    <button onclick="enableAccountEdit()" style="
        background: linear-gradient(135deg, #482683, #6a11cb);
        color: white;
        border: none;
        padding: 10px 18px;
        border-radius: 25px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(72,38,131,0.3);
        transition: all 0.3s ease;
    "
    onmouseover="this.style.transform='translateY(-2px)'"
    onmouseout="this.style.transform='translateY(0)'">
        Edit Account
    </button>
</div>

</div>

<!-- AGENCY SETTINGS -->

<div class="card">

<h2>🏢 Agency Settings</h2>

<div class="form-group">
<label>Agency Name</label>
<input type="text" value="Amol Agencies">
</div>

<div class="form-group">
<label>Owner Name</label>
<input type="text" value="Amol Patil">
</div>

<div class="form-group">
<label>GST Number</label>
<input type="text" value="27ABCDE1234F1Z5">
</div>

<div class="form-group">
<label>Support Email</label>
<input type="email" value="support@amolagencies.com">
</div>

<div class="form-group">
<label>Support Contact</label>
<input type="text" value="+91 9876543211">
</div>

</div>

</div>
<!-- NOTIFICATION SETTINGS -->

<div class="settings-grid">

<div class="card">

<h2>🔔 Notification Settings</h2>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>New Order Notifications</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Low Stock Alerts</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Delivery Updates</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Retailer Registration Alerts</label>
</div>

<div class="checkbox-group">
<input type="checkbox">
<label>Payment Reminders</label>
</div>

</div>

<!-- APPEARANCE SETTINGS -->

<div class="card">

<h2>🎨 Appearance Settings</h2>

<div class="form-group">
<label>Theme Color</label>

<select style="
width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:8px;
">

<option>Purple Gold</option>
<option>Dark Mode</option>
<option>Light Mode</option>

</select>
</div>

<div class="form-group">
<label>Font Size</label>

<select style="
width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:8px;
">

<option>Small</option>
<option selected>Medium</option>
<option>Large</option>

</select>

</div>

</div>

</div>

<!-- INVENTORY & DELIVERY -->

<div class="settings-grid">

<div class="card">

<h2>📦 Inventory Settings</h2>

<div class="form-group">
<label>Low Stock Alert Limit</label>
<input type="number" value="20">
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Auto Update Stock</label>
</div>

<div class="checkbox-group">
<input type="checkbox">
<label>Allow Negative Stock</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Show Stock Warnings</label>
</div>

</div>

<div class="card">

<h2>🚚 Delivery Settings</h2>

<div class="form-group">
<label>Default Delivery Radius (KM)</label>
<input type="number" value="50">
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Enable Delivery Tracking</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Auto Assign Drivers</label>
</div>

<div class="checkbox-group">
<input type="checkbox">
<label>Require Delivery OTP</label>
</div>

</div>

</div>
<!-- SECURITY SETTINGS -->

<div class="settings-grid">

<div class="card">

<h2>🔒 Security Settings</h2>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Two Factor Authentication</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Login Alerts</label>
</div>

<div class="checkbox-group">
<input type="checkbox" checked>
<label>Remember Trusted Devices</label>
</div>

<div class="checkbox-group">
<input type="checkbox">
<label>Force Password Change Every 90 Days</label>
</div>

</div>

<!-- BACKUP & DATA -->

<div class="card">

<h2>💾 Backup & Data</h2>

<button onclick="exportData()" style="
width:100%;
padding:12px;
margin-bottom:10px;
background:#482683;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Export Data
</button>

<button onclick="downloadReports()" style="
width:100%;
padding:12px;
margin-bottom:10px;
background:#3b82f6;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Download Reports
</button>

<button onclick="backupDatabase()" style="
width:100%;
padding:12px;
margin-bottom:10px;
background:#22c55e;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Backup Database
</button>

<button onclick="restoreData()" style="
width:100%;
padding:12px;
background:#f59e0b;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Restore Data
</button>

</div>

</div>

<!-- SYSTEM INFORMATION -->

<div class="card" style="margin-top:20px;">

<h2>📊 System Information</h2>

<div style="
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
">

<div>
<p><b>Software Version:</b> 1.0</p>
<br>
<p><b>Total Products:</b> 125</p>
<br>
<p><b>Total Retailers:</b> 245</p>
</div>

<div>
<p><b>Total Orders:</b> 1280</p>
<br>
<p><b>Last Backup:</b> 10 June 2026</p>
<br>
<p><b>System Status:</b> Active</p>
</div>

</div>

</div>

<!-- SAVE SETTINGS -->

<div style="
margin-top:25px;
display:flex;
gap:15px;
">

<button onclick="saveSettings()" style="
background:#482683;
color:white;
border:none;
padding:14px 30px;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Save Settings
</button>

<button onclick="resetSettings()" style="
background:#ef4444;
color:white;
border:none;
padding:14px 30px;
border-radius:8px;
cursor:pointer;
font-weight:bold;
">
Reset
</button>

</div>

<div style="
margin-top:30px;
text-align:center;
color:#666;
">
© 2026 Amol Agencies - System Settings
</div>

</div>

<script>

function saveSettings()
{
    alert("Settings Saved Successfully!");
}

function resetSettings()
{
    location.reload();
}

function exportData()
{
    alert("Exporting Data...");
}

function downloadReports()
{
    alert("Downloading Reports...");
}

function backupDatabase()
{
    alert("Database Backup Created Successfully!");
}

function restoreData()
{
    alert("Restore Process Started...");
}

</script>

</body>
</html>