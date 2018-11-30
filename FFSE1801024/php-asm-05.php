<?php
    $settingConnectDB = [
        'host'=>'localhost',
        'user'=>'root',
        'password'=>'',
        'database'=>'ffse1801024',
        'port'=>'3306'
    ];
    $sql = [
        [
            'DB',
            'CREATE DATABASE ffse1801024'
        ],
        [
            'Table khachhang',
            'CREATE TABLE ffse1801024.khachhang (
            MaKH Nchar(15) PRIMARY KEY, 
            TenKH Nvarchar(50) NOT NULL,
            DiaChi Nvarchar(50) NOT NULL,
            NgaySinh Date,
            GioiTinh Nchar(15) NOT NULL,
            SoDT Nchar(12) NOT NULL
            )'
        ],
        [
            'Table nhanvien',
            'CREATE TABLE ffse1801024.nhanvien (
            MaNV Nchar(15) PRIMARY KEY, 
            TenKH Nvarchar(50) NOT NULL,
            DiaChi Nvarchar(50) NOT NULL,
            NgaySinh Date,
            GioiTinh Nchar(15) NOT NULL,
            SoDT Nchar(12) NOT NULL,
            PhongBan Nvarchar(50) NOT NULL,
            ChucVu Nvarchar(50) NOT NULL
            )'
        ],
        [
            'Table phieudatmua',
            'CREATE TABLE ffse1801024.phieudatmua (
            MaPhieuDat Nchar(15) PRIMARY KEY, 
            MaKH Nchar(15) NOT NULL,
            MaNV Nchar(15) NOT NULL,
            NgayLap Date
            )'
        ],
        [
            'Table sanpham',
            'CREATE TABLE ffse1801024.sanpham (
            MaSP Nchar(15) PRIMARY KEY, 
            TenSP Nvarchar(50) NOT NULL,
            Hangsx Nvarchar(50) NOT NULL,
            MoTa Nvarchar(50) NOT NULL,
            DonGia INT(6) NOT NULL
            )'
        ],
        [
            'Table hoadon',
            'CREATE TABLE ffse1801024.hoadon (
            MaHD Nchar(15) PRIMARY KEY, 
            MaKH Nchar(15) NOT NULL,
            MaSP Nchar(15) NOT NULL,
            MaNV Nchar(15) NOT NULL,
            NgayLap Date
            )'
        ]
    ];

    function queryDB($settingConnectDB,$sql){
        $conn = new mysqli($settingConnectDB['host'], $settingConnectDB['user'], $settingConnectDB['password']);
        if ($conn->connect_error) {
           throw new Exception("Lỗi kết nối cơ sở dữ liệu: ".$conn->connect_error, 1);
        } 
        foreach ($sql as $key => $value) {
            if ($conn->query($value[1]) === TRUE) {
                echo 'Tạo '. $value[0].' thành công.</br>';
            } else {
                throw new Exception("Lỗi: ". $conn->error);
            }
        }
        $conn->close();
    }

    try {
        queryDB($settingConnectDB,$sql);
    } catch (\Throwable $th) {
        echo "<pre>".$th->getMessage()."</pre>";
    }
?>