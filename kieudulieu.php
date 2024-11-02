<?php

        //1.Kiểu Số nguyên int
        $age = 30;
        var_dump($age);
        // Ép kiểu
        $age =(int)$age;
        var_dump($age);
        // Kiểm tra kiểu số nguyên
        // $check = is_int($age);
        // var_dump($check);
        $check = is_integer($age);
        var_dump($check);

        //2. Kiểu dữ liệu boolean
        $check2 = 'a';
        // ép kiểu dữ liệu : 0 , trống , null quy hết về false
        $check2 = (bool)$check2;
        // kiểm tra kiểu dữ liệu
        // $checkBool = is_bool($check2);
        var_dump($check2);

        // 3. kiểu số thực (float)
        $fee = 10;
        // ép kiểu
        // $fee = (float)$fee;

        var_dump(value: $fee);
        echo '<br>';
        // 4. Kiểu dữ liệu chuỗi
        $message = 'ĐÂy là thông báo';
        //kiểm tra xem có phải kiểu dữ liệu chuỗi(string)
        $checkString = is_string($message);
        var_dump($checkString);
        echo '<br>';

        //5. Kiểu dữ liệu mảng(array)
        $carArray = [];
        // ép kiểu
        $carArray = (array)$carArray;
        // kiểm tra mảng có phải
        $checkArray = is_array($carArray);
        var_dump($carArray);
        echo '<br>';

        //.6 Kiểu dữ liệu null
        $total = null;
        $total = (int)$total;
        var_dump($total);

        echo '<br>';
        //7. Kiểu dữ liệu resource
        $curl = curl_init();
        var_dump($curl);
        echo '<br>';

        //8. Kiểu đối tượng
        $dataCustomer = [
            "Cường"
        ];
        $dataCustomer = (object)$dataCustomer;
        
        // var_dump(($dataCustomer));
        echo '<br>';
        $customerOject = new stdClass();
        $customerOject->age= 10;
        var_dump($customerOject);

        /**
         * Phân biệt empty và null
         * 
         */
        $message = null; // rỗng
        $message = '';// trống
?>