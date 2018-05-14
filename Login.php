
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>A Login Example</title>
    <meta http-equiv="content-type" 
        content="text/html;charset=utf-8" />                 

<link rel="stylesheet" href="login.css" type="text/css">       
</head>
<body>

<?php

if (!empty($_POST)) {


 $user=$_POST['user'];
 $pass=$_POST['pass'];

 
$ldapconfig['host'] = '146.244.71.135';//CHANGE THIS TO THE CORRECT LDAP SERVER
$ldapconfig['port'] = '389';
//$ldapconfig['basedn'] = 'dc=id,dc=sdsu,dc=edu';//CHANGE THIS TO THE CORRECT BASE DN
//$ldapconfig['usersdn'] = 'ou=People';//CHANGE THIS TO THE CORRECT USER OU/CN

//set debug option
//ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL,7);
$ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']) or die("DC N/A, please try later or contact administrator ");

//set connection options
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_set_option($ds, LDAP_OPT_NETWORK_TIMEOUT, 10);

$bind=ldap_bind($ds,$user,$pass);

if($bind){
    include("disclaimer.php");//The page you wanna re-direct after login 
    return TRUE;
}
else{

 $error = "Username or Password is Invalid";
 echo "
<div class=\"login\">
<h1 align=\"center\">Login</h1>
<form action=\"\" method=\"post\" style=\"text-align:center;\">
<input type=\"text\" placeholder=\"Username\" id=\"user\" name=\"user\"><br/><br/>
<input type=\"password\" placeholder=\"Password\" id=\"pass\" name=\"pass\"><br/><br/>
<input type=\"submit\" value=\"Login\" name=\"submit\">
<!-- Error Message -->
<span style=\"color: red\">Username or Password is Invalid</span>";
return False;
 }
 
 
}

else
{
    echo "
<div class=\"login\">
<h1 align=\"center\">Login</h1>
<form action=\"\" method=\"post\" style=\"text-align:center;\">
<input type=\"text\" placeholder=\"Username\" id=\"user\" name=\"user\"><br/><br/>
<input type=\"password\" placeholder=\"Password\" id=\"pass\" name=\"pass\"><br/><br/>
<input type=\"submit\" value=\"Login\" name=\"submit\">
";


}


?>


</body>
</html>
