<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 

  <style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  * {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;
  background-color:#D3D3D3;
  
}


.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
  }

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 18%; /* Four links of equal widths */
  text-align: center;
}
table, th, td{
  font-size:25px;

}
table{
  width: 100%;
}
.navbar a:hover {
  background-color: #000;
}
.column {
  width: 100%;
 
}
.modal-content{
    color:#0e7d0e; /* botton */
    background-color:#94eb94;

}
.btn-info{
     color:#1b1c1b;
 }
 
 .modal-content.btn{
    background-color:#174a17;
    border:#308c30;
 }

.navbar a.active {
  background-color: #555;
}
.modal-content.btn{
    background-color:#174a17;
    border:#308c30;
 }
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<script>
   
</script>
  
 
</head>
  <body>
  <div class="container">
  <div class="row">
  <nav class="navbar navbar-default">
 
  <div class="navbar">
  <ul class="nav navbar-nav">
      <a class="active" href="{{route('home')}}">Home</a>
      <a href="{{route('aboutus')}}">About Us</a>
      <a href="{{route('gallery')}}">Gallery</a>
<!--
<a class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Servicers
    </button>
    <a href="{{route('servicers')}}">Service</a>
  
</a>
-->
<a href="{{route('servicers')}}">Service</a>
  
  
  <a href="{{route('contacts')}}">Contacts</a>
</a>
</ul>
  </div></div>
  </div>
  <div class="row">

 @yield('content')
  </div>
  </div>
  </body>
</html>

