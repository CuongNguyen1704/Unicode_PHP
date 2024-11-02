<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        echo "<p> Hello Word </p>";
        $customerName = "Nguyễn Mạnh Cường";
        $customerDetailEmail = "cuongnmph50179@gmail.com";
        $customerAge = 19;

        echo $customerName;
        echo '<br>';
        echo 'HỌc lập trình';
        
        // Nối biến 

        $str1 = 'Đào tạo lập trình';
        $str2 = 'PHP';
        echo $str1. ' WEB với ngôn ngữ ' .$str2;
        echo '<br>';
        // Nối và gán
        $srt = " trung tâm đào tạo $str2 tại Hà Nội"  ;
        echo $srt;
        echo '<br>';
        $url = 'https://hoangan.net';
        $img = 'https://vietchem.com.vn/uploads/vietchem/2021/01/thien-nhien-la-gi-1.jpg';
        $htmlUoutput = '<a href="'.$url.'"><img src="'.$img.'" width="200px"></a>';
        echo $htmlUoutput;
        $number = 10;
        $str = 'Đào tạo PHP';
        $total = $number.$srt;
        var_dump($total);


        

    ?>
    

</body>
</html>