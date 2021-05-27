<?php
include 'header.php';?>

  <div class="container"> 
    <div class="jumbotron"> 
    <h1 class="display-4">Check domain</h1> 
    <hr class="my-4"> 
    <form action="data.php" method="POST"> 
      <p>Check the domain is used or not</p> 
      <div class="input-group mb-3"> 
      <input type="text" class="form-control" name="domain" placeholder="Enter the domain" aria-label="" aria-describedby="basic-addon1"> 
      </div> 
      <p class="lead"> <input type="submit" name="checkDomain" value="Enter" class="btn btn-primary btn-lg" role="button"> </p> 
      <p></p> 
    </form> 
    </div> 



  <div class="jumbotron"> 
   <h1 class="display-4">domain details</h1> 
   <hr class="my-4"> 
   <form action="data.php" method="POST"> 
    <p>Site information</p> 
    <div class="input-group mb-3"> 
     <input type="text" class="form-control" name="domainDetails" placeholder="Enter the domain without wwww." aria-label="" aria-describedby="basic-addon1"> 
    </div> 
    <p class="lead"> <input type="submit" name="details" value="Enter" class="btn btn-primary btn-lg" role="button"> </p> 
    <p></p> 
   </form> 
  </div> 


  <div class="jumbotron"> 
   <h1 class="display-4">Protocol port</h1> 
   <hr class="my-4"> 
   <form action="data.php" method="POST"> 
    <p>Protocol name built on TCP</p> 
    <div class="input-group mb-3"> 
     <input type="text" class="form-control" name="prototcp" placeholder="example http" aria-label="" aria-describedby="basic-addon1"> 
    </div> 
    <p class="lead"> <input type="submit" name="sendtcp" value="Enter" class="btn btn-primary btn-lg" role="button"> </p> 
    <p></p> 
   </form> 
  </div> 
  <form action="data.php" method="POST"> 
    <p>Protocol name built on UDP</p> 
    <div class="input-group mb-3"> 
     <input type="text" class="form-control" name="protoudp" placeholder="example tftp" aria-label="" aria-describedby="basic-addon1"> 
    </div> 
    <p class="lead"> <input type="submit" name="sendudp" value="Enter" class="btn btn-primary btn-lg" role="button"> </p> 
    <p></p> 
   </form> 
  </div> 

<div class="container"> 
  <div class="jumbotron"> 
   <h1 class="display-4">Ip site</h1> 
   <hr class="my-4"> 
   <form action="data.php" method="POST"> 
    <p>Enter domain</p> 
    <div class="input-group mb-3"> 
     <input type="text" class="form-control" name="ip" placeholder="www.facebook.com" aria-label="" aria-describedby="basic-addon1"> 
    </div> 
    <p class="lead"> <input type="submit" name="sendIp" value="Enter" class="btn btn-primary btn-lg" role="button"> </p> 
    <p></p> 
   </form> 
  </div>
</div> 

 </body>
</html>