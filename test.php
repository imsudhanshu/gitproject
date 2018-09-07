<html>
<head>
	<title>Test</title>
  <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">  
<style>
.header
{
	background-color: LightSeaGreen;
    font-family: 'Quicksand', sans-serif;
    font-size: 15em;
    color: white;
}
.body1
{
	background-image: url("qc.jpg") ;
}
.box{ 
  background-color: white;
  position: relative;
  opacity :0.6;
  height: 100%;
  width: 70%;
  left: 15%;
  top: 10%;
}
.box:hover {
    opacity: 1.5;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
input[type=text], select, textarea {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 6px;
    margin-bottom: 16px;
}
input[type=tel] {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 6px;
    margin-bottom: 16px;
}
input[type=Date] {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 6px;
    margin-bottom: 16px;
}
input[type=month] {
    width: 70%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 6px;
    margin-bottom: 16px;
}

input[type=Button] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=Button]:hover {
    background-color: #45a049;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    padding: 60px;
}
#Div2 {
  display: none;
}

</style>

</head>
<body>
    <div class="header" style="height: 130px;width: 100%">
<div class-"row">
<div class="col-md-4">
        <h2>NAME:</h2> <h2>QC ID: </h2>
</div>
<div class="col-md-4">
        <h2>MOBILE:</h2> <h2>EmailID: </h2>  
</div>
</div>
</div>
<div class="body1" style="height: 100%;width: 100%">

<?php

echo "Your first form has been submitted click the button to submit";?><br>
<?php echo "<a href='quickc1.html'>Click here</a>"
?>
</div>