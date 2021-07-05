<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<style type="text/css">
		body 
        {
           background-image: url('home1.jpeg');
           background-repeat: no-repeat;
           background-attachment: fixed; 
           background-size: 100% 100%;
        }
		.menu-icon1
        {
        	background-color:#33ff8a;
            margin-left:400px;
		    margin-top:100px;
		    text-align: center;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
        .menu-icon2
        {
        	background-color:#33ff8a;
            margin-left:720px;
            text-align: center;
		    margin-top:100px;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
        .menu-icon3
        {
        	background-color:#33ff8a;
            margin-left:400px;
		    margin-top:350px;
		    text-align: center;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.2);
		    z-index: 3;
		    position: fixed;
        }
        .menu-icon4
        {
        	background-color:#33ff8a;
            margin-left:720px;
            text-align: center;
		    margin-top:350px;
		    width:200px;
		    height:200px;
		    border-radius: 10%;
		    box-shadow:0 0 10px 10px rgba(0,0,0,0.5);
		    z-index: 3;
		    position: fixed;
        }
	</style>
</head>
<body>
	<a href="adduser.php"><div class="menu-icon1">Add User</div></a>
	<a href="addworker.php"><div class="menu-icon2">Add Worker</div></a>
	<a href="removeuser.php"><div class="menu-icon3">Remove User</div></a>
	<a href="removeworker.php"><div class="menu-icon4">Remove Worker</div></a>
	<button name="admin_hystory" style="margin-left:1200px;box-shadow:0 0 10px 10px rgba(0,0,0,0.2);">history</button>
</body>
</html>