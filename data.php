<?php
include 'header.php';

if (isset($_POST['checkDomain'])){
    $domain= $_POST['domain'] ;
    if(checkdnsrr($domain,"MX")) {    
        echo '<div class="alert alert-success text-center">This domain is not used</div>';
     }else {
        echo '<div class="alert alert-danger text-center">This domain is used</div>';
      }
    
  }

if (isset($_POST['details'])){
    $domain= $_POST['domainDetails'];
echo '<pre>';
print_r(dns_get_record($domain, DNS_MX));
echo '</pre>';

}


if (isset($_POST['sendtcp'])){
    $protocol = $_POST['prototcp'];
    $portnum = getservbyname($protocol, "tcp");
    echo '<div class="alert alert-primary text-center">'.$portnum.'</div>';
}

if (isset($_POST['sendudp'])){
    $protocol = $_POST['protoudp'];
    $portnum = getservbyname($protocol, "udp");
    echo '<div class="alert alert-primary text-center">'.$portnum.'</div>';
}

if (isset($_POST['sendIp'])){
    $domain= $_POST['ip'];
    $ip = gethostbyname($domain);
    echo '<div class="alert alert-primary text-center">'.$ip.'</div>';
    echo gethostname();

}

   ?>