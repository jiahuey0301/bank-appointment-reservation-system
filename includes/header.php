<?php ob_start(); ?>
<?php session_start(); 

if ($_SESSION['loggedin'] != 1) {
		
    header('Location: loginPage.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Online Bank Appointment - Make your appointment</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	 
	

<style>

body {font-family: Arial;}

/* for the tab content */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* for button inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.2s;
    font-size: 17px;
}

/* change the background color of button when hover */
.tab button:hover {
    background-color: #ddd;
}

/* the active tab color  */
.tab button.active {
    background-color: #ccc;
}

/*  tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Faded in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

#myFooter {
    background-color: #182c39;
    color: white;
    padding-top: 15px;
}

#myFooter .footer-copyright {
    background-color: #10222e;
    padding-top: 3px;
    padding-bottom: 100px;
    text-align: center;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: #ccc;
}



@media screen and (max-width: 766px) {
    #myFooter {
        text-align: center;
    }
    #myFooter .row {
        margin: 0;
    }
}



/* CSS for design footers at the bottom of the page. */


html{
    height: 100%;
}

body{
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
}

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

a {
    color: #182C39;
}
a:hover {
    text-decoration: none;
}
</style>

</head>

