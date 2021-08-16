<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ('firstcode/test.php');
?>
    <script>
        var x="HELLO WORLD";
        document.write(x.toLowerCase());
        var today =new Date();
        document.write(today);
        var myarry=new Array;
        myarry[0]="monday";
        myarry[1]="tuesday";
        myarry[2]="wednesday";
        myarry[3]="thursday";
        myarry[4]="frday";
        for(var i=0;i<=4;i++)
        {
document.write(myarry[i]+"<br/>");
        }

    </script>
</body>
</html>