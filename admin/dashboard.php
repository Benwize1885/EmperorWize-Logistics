<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
body {
    background: url('../images/courierpic.png');
    background-size: cover;
    position: relative;
}

body::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity value (0.5) to make it darker or lighter */
    z-index: -1;
}


        .btn-flex {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn {
            text-decoration: none;
            font-size: 17px;
            background-color: #213555;
            color: white;
            padding: 20px 40px;
            border-radius: 10px;

        }
        .admintitle {
            background-color: #213555;
            height: 10vh !important;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .links {
            display: flex;
            justify-content: space-between;
            width: 20%;
        }
        .links a {
            text-decoration: none;
            color: #fff;
        }

</style>

<div class="admintitle">
    <h2>Welcome To Admin Dashbord</h2>
    <div class="links">
        <a href="../index.php" >LoginAsUser</a>
        <a href="logout.php" >LogOut</a>
    </div>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;color:lightblue;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->
<div class="btn-flex">
    <a class="btn" href="deletedata.php">Delete Data</a><br><br>
    <a class="btn" href="deleteusers.php">Delete Users</a><br><br>
</div>
</form>

</div>
</body>
</html>