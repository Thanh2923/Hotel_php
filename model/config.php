<?php 
$conn = new mysqli("localhost", "root", "", "hotel");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
// Đặt bảng mã ký tự thành UTF-8
mysqli_set_charset($conn, "utf8");

function pdo_execute($sql){
   global $conn;
    mysqli_query($conn,$sql);
}

function pdo_query_one($sql){
    // Lấy kết nối đến cơ sở dữ liệu
       global $conn;

   try{
        // Thực hiện truy vấn SQL
        $result = $conn->query($sql);

        // Kiểm tra nếu có kết quả
        if ($result->num_rows > 0) {
            // Lấy hàng dữ liệu dưới dạng mảng kết hợp
            $row = $result->fetch_assoc();

            // Trả về hàng dữ liệu đã lấy
            return $row;
        } else {
            // Trường hợp không có hàng dữ liệu
            return null;
        }
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }

}


function pdo_query($sql){
    // Truy cập biến cục bộ cơ sở dữ liệu
   global $conn;

     try{
        // Thực hiện truy vấn SQL
        $result = $conn-> query($sql);

        // Kiểm tra nếu có kết quả
        if ($result->num_rows > 0) {
            // Lặp qua các hàng và lưu chúng vào một mảng
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // Trả về mảng các hàng đã lấy
            return $rows;
        } else {
            // Trường hợp không có hàng dữ liệu
            return array();
        }
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
    
}






?>