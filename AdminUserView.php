<?php
session_start();


?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <title>Shopping cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="forcompany.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="AdminSignin.css">
    <script src="login.js"> </script>
    <script src="jump.js"> </script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="AdminHome.html"><span class="glyphicon glyphicon-home"></span> Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    

                    <li class="dropdown" id="new">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="signup.html">Register</a></li>

                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Sign in</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="Adminpage.html">Manager Sign in</a></li>
                                    <li><a href="customersignin.html">Customer Sign in</a></li>
                            </li>


                        </ul>
                    </li>

                </ul>
                </li>
                <li class="dropdown" id="old">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        
                        <li><a href="#" id="logout">Sign out</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>Admin</h1>
    </div>


    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            <div class="col-sm-8 text-left">
                <h1>View Users</h1>





                <?php

                include_once 'dbconnect2.php';


                if (!isset($_SESSION['user'])) {
                    header("Location: Adminlogin.html");
                } else {
                    $user = $_SESSION['user'];


                    $sql = "SELECT * FROM passanger";

                    $result = mysqli_query($con, $sql);
                    $rowcount = mysqli_num_rows($result);

                    if ($rowcount == 0) {
                        echo "<div class='alert alert-info'><strong>No users present.</strong></div>";
                    } else {
                        echo "<div class='alert alert-info'>Registered Users:</div>";



                        echo "<table class='table table-bordered table-striped table-hover'>
          <thead>
          <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Cellphone</th>
            <th>Delete</th>
            
          </tr>
          </thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tbody><tr>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['firstname'] . "</td>";
                            echo "<td>" . $row['lastname'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['cellphone'] . "</td>";
                            echo '<td>
            <form action="remove.php" method="post">
            <input type="hidden" name="username" value="' . $row['username'] . '" >
            <button type="submit" class="btn btn-danger">Delete</button></div>
            </form>
            </td>';
                            echo "</tr>";
                 
                        }
                        echo " </tbody></table>";
                        
                    }
                }

                mysqli_close($con);

                ?>

            </div>

        </div>
    </div>


</body>

</html>