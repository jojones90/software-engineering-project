<?php
  'session_start'
 ?>
 <html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body>
<?php
 function inputLumber($file){
   foreach ($file as $lumber) {
     echo $lumber."<br/>";
   }
 }
 $reader = file('lumber_test.txt');
 inputLumber($reader);
//test2
 ?>

 </body>
 </html>
