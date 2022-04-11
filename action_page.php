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
    $keyword = $_POST["keyword"]
    ?>
    입력하신 검색어는 <?php echo $keyword ?> 입니다. <br>  

    <?php
    $host = "localhost";
    $user = "rhw";
    $pw = "vhzkem62!";
    $dbName = "rhw";

    $conn = new mysqli($host, $user, $pw, $dbName);
    
    /* DB 연결 확인 */
    if($conn){ echo "연결성공"."<br>"; }
    else{ die( '연결 실패 : ' . mysqli_error($conn) ); }
    
    $sql = "INSERT INTO `keyword` (`keyword`) VALUES ('$keyword')		
    ON DUPLICATE KEY UPDATE cnt = cnt + 1";
    $result = mysqli_query($conn, $sql);
 	
    if($result) { echo "insert success!"; }
    else { echo "failure"; }

    mysqli_close($conn);
    ?>

</body>
</html>