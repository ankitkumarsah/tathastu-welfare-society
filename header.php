<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<style>


    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: black;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }

    #so{
        display: none;
    }

    .item{
        height: 300px;
    }

    .r{
        margin-top: 13px;
    }
    #respon{
        margin: 16px;
        
    }
    #phn{
      height:800px;
    }
   
  }

h1{
  text-align:center;
  font-weight: bold;
  font-size: 30px;
  font-style: oblique; 
  color: black;
}


  </style>
</head>
<body>
<div class="container-fluid  "style="background-color: #42a5f5 ;" id="so">
<button type="button" class="btn btn-danger" style="float:right; height: 35px;width:150px; margin: 5px;">Donate</button>
 
</div>

<nav class="navbar navbar-default" style="background-color: #90caf9 ;">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <div class="r">
        <span class="icon-bar" style="background-color: black;"></span>
        <span class="icon-bar"  style="background-color: black;"></span>
        <span class="icon-bar"  style="background-color: black;"></span> 
    </div>                       
      </button>
     
     <img src="image/Graphic2.png" style="height: 75px; width: 210px; margin: 2px;" class="navbar-brand">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="margin-top: 16px;">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php" style="color:black; font-weight: bold;">HOME</a></li>
        <li><a href="about.php" style="color:black; font-weight: bold;">ABOUT US</a></li>
        <li><a href="team.php" style="color:black; font-weight: bold;">OUR TEAM</a></li>
        <li><a href="newpaper.php"style="color:black; font-weight: bold;">NEWSPAPER CLIP</a></li>
        <li><a href="gallery.php"style="color:black; font-weight: bold;">GALLERY</a></li>
        <li><a href="contact.php"style="color:black; font-weight: bold;">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>
