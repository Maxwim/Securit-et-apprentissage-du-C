<?php 
/*

Juste pour des testes avec les serveur python


*/
echo '<script>var params = "hello_world";</script>';
header('Access-Control-Allow-Origin: *');
if(isset($_GET['data'])){
    echo '<script>var params = "'. $_GET['data'] .'";</script>';
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="id">
         
     </div>
</body>
<script type="text/javascript">

var http = new XMLHttpRequest();

http.open('POST', 'http://192.168.1.14:8080');

//Send the proper header information along with the request:

http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
// http.setRequestHeader('Access-Control-Allow-Origin', '*');

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        //console.log('1');
        var response = http.responseText;
        var response = response.replace(/\/$/, '');
        document.write(atob(response)); 
        console.log(http.responseText);
        
    }
}
http.send(params);
</script>
</html>
