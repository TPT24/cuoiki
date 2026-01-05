CREATE DATABASE QLDT;
USE QLDT;

CREATE TABLE detai(
Madt INT AUTO_INCREMENT PRIMARY KEY,
Tendt NVARCHAR(30)
);


CREATE TABLE giangvien(
Magv INT AUTO_INCREMENT PRIMARY KEY,
Hoten NVARCHAR(30),
Dienthoai NVARCHAR(15),
Ghichu NVARCHAR(30)
);


CREATE TABLE sinhvien(
Masv NVARCHAR(5) PRIMARY KEY,
Hoten NVARCHAR(30),
Ngaysinh NVARCHAR(15),
Madt INT,
Magv INT,
FOREIGN KEY (Madt) REFERENCES detai(Madt),
FOREIGN KEY (Magv) REFERENCES giangvien(Magv)
);
INSERT INTO detai(Tendt) VALUES
('AI'),
('Web'),
('Data');

INSERT INTO giangvien(Hoten,Dienthoai,Ghichu) VALUES
('Nguyen Van A','0123','CNTT'),
('Tran Van B','0456','AI'),
('Le Van C','0789','Web');

INSERT INTO sinhvien VALUES
('SV01','An','01/01/2002',1,1),
('SV02','Binh','02/02/2002',2,2),
('SV03','Cuong','03/03/2002',3,3);