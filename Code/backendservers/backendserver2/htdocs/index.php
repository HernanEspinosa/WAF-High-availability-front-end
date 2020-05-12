<html>
 <head>
  <title>Query trace</title>
 </head>
 <body>
 <?php function getLoadBalancerIP(){
           if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                   //ip from share internet
                   $ip = $_SERVER['HTTP_CLIENT_IP'];
           }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                   //ip pass from proxy
                   $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           }else{
                   $ip = $_SERVER['REMOTE_ADDR'];
           }
           return $ip;	   
 }
 ?>
 
 <?php echo '<b> Welcome to Server with hostname:</b> '?>
 <?php echo gethostname(); ?>
 <?php echo '<br></br>' ?>
 <?php echo '<b> The trace of the query is the following: </b>' ?>
 <?php echo '<br></br>'?>
 <?php echo '<p>- IP from the USER: </p>' ?>
 <?php echo '<p>- VIRTUAL IP: </p>'?>
 <?php echo '<p>- IP from the LOADBALANCER: </p>'.getLoadBalancerIP(); ?>
 <?php echo '<p>- IP from the BACKENDSERVER: </p>'?>
 
 </body>
</html>
