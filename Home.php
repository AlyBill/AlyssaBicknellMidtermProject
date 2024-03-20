<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>

       body {
            background-color: white;
            color: black;
            
            
            
                 
        } 
        p1 {
            
          
           text-align: center;
           
            
        }
        p2{
            
            
            text-align: center;
            
        }
        p3{
            
            
            text-align: center;
            
        }
        p4{
            
            
            text-align: center;
            
        }
        p5{
            
            
            text-align: center;
            
        }
        p6{
            
           
            text-align: center;
            
        }
        

.dropbtn1 {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown1 {
    position: relative;
    display: inline-block;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content1 a:hover {background-color: white;}
.dropdown1:hover .dropdown1-content {display: block;}
.dropdown1:hover .dropbtn1 {background-color: grey;}




.dropbtn2 {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown2 {
    position: relative;
    display: inline-block;
}

.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content2 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content2 a:hover {background-color: white;}
.dropdown2:hover .dropdown2-content {display: block;}
.dropdown2:hover .dropbtn2 {background-color: grey;}


.dropbtn3 {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown3 {
    position: relative;
    display: inline-block;
}

.dropdown-content3 {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content3 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content3 a:hover {background-color: white;}
.dropdown3:hover .dropdown3-content {display: block;}
.dropdown3:hover .dropbtn3 {background-color: grey;}

    
            
    </style>
</head>
<body>
    <p1 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Year </p1>
    <p2 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Make </p2>
    <p3 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Model </p3>
    <p4 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Type </p4>
    <p5 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Class </p5>
    <p6 style ="font-weight: bold; color: red;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Price </p6>
    <p7 style ="font-weight: bold; color: blue; font-size: 30px;">  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp WELCOME TO ZIPPYS AUTO </p7>
    <div class = "dropdown1">
    <p8> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p8>
        <button class ="dropbtn1">View All Makes </button>
        <div class = "dropdown-content1">
        <a> Infiniti </a>
            <a> Dodge </a>
            <a> Nissan </a>
            <a> Hyundai </a>
            <a> Chevy </a>
            <a> Cadillac </a>
            <a> Ford </a>
            <a> Buick </a>
</div>
    </div> 


    <div class = "dropdown2">
    <p9>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p9>
        <button class ="dropbtn2">View All Types </button>
        <div class = "dropdown-content2">
        <a> SUV </a>
            <a> Coupe </a>
            <a> Sedan </a>
            <a> Truck </a>
            <a> Classic </a>
           
    </div> 
    
    </div>

    <div class = "dropdown3">
    <p10> &nbsp </p10>
    <button class ="dropbtn3">View All Classes </button>
    <div class = "dropdown-content3">
    <a> Luxury </a>
        <a> Sports </a>
        <a> Economy </a>
        <a> Utility </a>
        <a> Vintage </a>
       
</div> 

</div>

<p11> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Sort By </p11>
<button class = "onclick"> Price </button>
<button class = "onclick1"> Year </button>
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'zippyusedautos');
    if (!$conn) {
        die("Connection failed.  Try Again " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vehicles = $_POST['vehicles'];
        $makes = $_POST['makes'];
        $types = $_POST['types'];
        $classes = $_POST['classes'];
        $year = $_POST['year'];
        $price = $_POST['price'];


        $sql = "INSERT INTO vehicles (vehicles, makes, types, classes, year, price) VALUES ('$vehicles', '$makes', '$types', '$classes', '$year', '$price')";
        mysqli_query($conn, $sql);
    }

    if (isset($_GET['remove'])) {
        $vehicles = $_GET['remove'];

        $sql = "DELETE FROM vehicles WHERE vehicles = $vehicles";
        mysqli_query($conn, $sql);
    }

    $sql = "SELECT * FROM vehicles";
    $result = mysqli_query($conn, $sql);

    
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {   
            $vehicles = $row['vehicles'];
            
            $makes = $row['makes'];
            
            $types = $row['types'];
            
            $classes = $row['classes'];
           
            $year = $row['year'];
           
            $price = $row['price'];
          
            echo "<p1>";
            echo "<br> <br>";
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $year";
            echo "</p1>";

            echo "<p2>";
            echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $makes";
            echo "</p2>";

            echo "<p3>";
            echo " &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp $vehicles";
            echo "</p3>";

            echo "<p4>";
            echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$types";
            echo "</p4>";

            echo "<p5>";
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$classes";
            echo "</p5>";

            echo "<p6>";
            echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$price";
            echo "</p6>";

            
            
            
            
            
        }
    } else {
        echo "No vehicles exist.";
    }

    mysqli_close($conn);
    ?>


</body>
</html>