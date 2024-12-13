SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `Bike_Cycle` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `Bike_Cycle`;

-- NGƯỜI DÙNG
CREATE TABLE `NGUOI_DUNG` (
    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `SDT` VARCHAR(15),
    `Avatar` VARCHAR(255),
    `Ten` VARCHAR(50) NOT NULL,
    `Password` VARCHAR(255) NOT NULL,
    `usertype` ENUM('KHACH_HANG', 'ADMIN') NOT NULL,
    `Diachi` VARCHAR(255),
    `Email` VARCHAR(255)
);

-- KHÁCH HÀNG
CREATE TABLE `KHACH_HANG` (
    `ID` INT PRIMARY KEY,
    FOREIGN KEY (ID) REFERENCES `NGUOI_DUNG`(ID) ON DELETE CASCADE
);

-- ADMIN
CREATE TABLE `ADMIN` (
    `ID` INT PRIMARY KEY,
    FOREIGN KEY (ID) REFERENCES `NGUOI_DUNG`(ID) ON DELETE CASCADE
);

-- TIN TỨC
CREATE TABLE `TIN_TUC` (
    `TTID` INT PRIMARY KEY AUTO_INCREMENT,
    `TTNoi_dung` TEXT,
    `ID` INT,
    `tieu_de` VARCHAR(255),
    `mo_ta` VARCHAR(255),
    `link_anh` VARCHAR(255),
    `Thoi_gian_dang_TT` DATETIME,
    FOREIGN KEY (ID) REFERENCES `ADMIN`(ID) ON DELETE SET NULL
);



-- BÌNH LUẬN
CREATE TABLE `BINH_LUAN` (
    `BLID` INT PRIMARY KEY AUTO_INCREMENT,
    `BLNoi_dung` TEXT,
    `ID` INT,
    `Phanhoi_ID` INT,
    FOREIGN KEY (ID) REFERENCES `NGUOI_DUNG`(ID) ON DELETE SET NULL
    FOREIGN KEY(Phanhoi_ID) REFERENCES `BINH_LUAN`(BLID) ON DELETE SET NULL
);



-- ĐƠN HÀNG
CREATE TABLE `DON_HANG` (
    `DHID` INT PRIMARY KEY AUTO_INCREMENT,
    `Trang_thai` ENUM('Pending', 'Completed', 'Cancelled') NOT NULL,
    `Dia_chi_giao_hang` VARCHAR(255),
    `Tong_so_mon` INT,
    `Tong_tien` DECIMAL(10, 2),
    `Thoi_gian_tao_don` DATETIME,
    `ID` INT,
    `PTTTID` INT,
    FOREIGN KEY (`ID`) REFERENCES `KHACH_HANG`(`ID`) ON DELETE SET NULL,
    FOREIGN KEY (`PTTTID`) REFERENCES `PHUONG_THUC_THANH_TOÁN`(`PTTTID`) ON DELETE SET NULL
);

-- PHƯƠNG THỨC THANH TOÁN
CREATE TABLE `PHUONG_THUC_THANH_TOÁN` (
    `PTTTID` INT PRIMARY KEY AUTO_INCREMENT,
    `PTTTTen` VARCHAR(50) NOT NULL
);

-- DANH MỤC
CREATE TABLE `DANH_MUC` (
    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `Ten` VARCHAR(50) NOT NULL,
    `URL` VARCHAR(255) NOT NULL

);

-- SẢN PHẨM
CREATE TABLE `SAN_PHAM` (
    `SPID` INT PRIMARY KEY AUTO_INCREMENT,
    `SPTen` VARCHAR(50) NOT NULL,
    `Mo_ta` TEXT,
    `Gia_ban` DECIMAL(10, 2),
    `Giam_gia` DECIMAL(10, 2),
    `Diem_danh_gia` DECIMAL(3, 2),
    `link_anh` VARCHAR(255),
    `ma_danh_muc` INT NOT NULL,
    FOREIGN KEY (`ma_danh_muc`) REFERENCES `DANH_MUC` (ID) ON DELETE SET NULL
);

-- ĐƠN HÀNG CHỨA SẢN PHẨM
CREATE TABLE `DON_HANG_CHUA_SAN_PHAM` (
    `Don_hang_ID` INT NOT NULL,
    `San_pham_ID` INT NOT NULL,
    `Quantity` INT NOT NULL,
    PRIMARY KEY(`Don_hang_ID`,`San_pham_ID`);
    FOREIGN KEY (`Don_hang_ID`) REFERENCES `DON_HANG`(`DHID`) ON DELETE SET NULL,
    FOREIGN KEY (`San_pham_ID`) REFERENCES `SAN_PHAM`(`SPID`) ON DELETE SET NULL
    
);

-- GIỎ HÀNG
CREATE TABLE `GIO_HANG` (
    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `UserID` INT NOT NULL,
    FOREIGN KEY `UserID` REFERENCES `KHACH_HANG`(ID) ON DELETE SET NULL
);

-- GIỎ HÀNG CHỨA SẢN PHẨM
CREATE TABLE `GIO_HANG_CHUA_SAN_PHAM` (
    `Gio_hang_ID` INT NOT NULL,
    `San_pham_ID` INT NOT NULL,
    `Quantity` INT NOT NULL,
    PRIMARY KEY(`Gio_hang_ID,San_pham_ID`)
    FOREIGN KEY `Gio_hang_ID` REFERENCES `GIO_HANG`(`ID`) ON DELETE SET NULL
    FOREIGN KEY `San_pham_ID` REFERENCES `SAN_PHAM`(`SPID`) ON DELETE SET NULL
);






DELIMITER $$

CREATE TRIGGER `trigger_insert_nguoi_dung`
AFTER INSERT ON `NGUOI_DUNG`
FOR EACH ROW
BEGIN
    IF NEW.usertype = 'KHACH_HANG' THEN
        INSERT INTO `KHACH_HANG` (`ID`) VALUES (NEW.ID);
    ELSE
        INSERT INTO `ADMIN` (`ID`) VALUES (NEW.ID);
    END IF;
END$$

DELIMITER ;
COMMIT;



-- Indexes for table
ALTER TABLE `NGUOI_DUNG` MODIFY `ID` INT AUTO_INCREMENT;
ALTER TABLE `KHACH_HANG` MODIFY `ID` INT;
ALTER TABLE `ADMIN` MODIFY `ID` INT;
ALTER TABLE `TIN_TUC` MODIFY `TTID` INT AUTO_INCREMENT;
ALTER TABLE `TIN_TUC_HINH_ANH` MODIFY `TTIID` INT AUTO_INCREMENT;
ALTER TABLE `BINH_LUAN` MODIFY `BLID` INT AUTO_INCREMENT;
ALTER TABLE `PHAN_HOI` MODIFY `BLPHID` INT AUTO_INCREMENT;
ALTER TABLE `DON_HANG` MODIFY `DHID` INT AUTO_INCREMENT;
ALTER TABLE `PHUONG_THUC_THANH_TOÁN` MODIFY `PTTTID` INT AUTO_INCREMENT;
ALTER TABLE `SAN_PHAM` MODIFY `SPID` INT AUTO_INCREMENT;
ALTER TABLE `HASHTAG` MODIFY `HSHTGID` INT AUTO_INCREMENT;

-- Constraints for dumped tables
ALTER TABLE `NGUOI_DUNG` ADD CONSTRAINT UNIQUE (`username`);
ALTER TABLE `SAN_PHAM` ADD CONSTRAINT UNIQUE (`SPTen`);
ALTER TABLE `HASHTAG` ADD CONSTRAINT UNIQUE (`HSHTGNoi_dung`);

-- Default values
ALTER TABLE `NGUOI_DUNG` MODIFY `usertype` ENUM('KHACH_HANG', 'ADMIN') NOT NULL;
ALTER TABLE `DON_HANG` MODIFY `Trang_thai` ENUM('Pending', 'Completed', 'Cancelled') NOT NULL;

INSERT INTO NGUOI_DUNG (username, SDT, Avatar, Ten, Password, usertype, Diachi, Email)
VALUES
    ('Nqnhut', '0346879032', 'https://tse4.mm.bing.net/th?id=OIP.Vp3t-sVWEYBWkiCUJUQA6wHaE8&pid=Api&P=0&h=180', 'Nguyen Quốc Nhựt', '123456789', 'KHACH_HANG', 'Thủ Đức, TPHCM', 'nqnhut@gmail.com'),
    ('MaiLemmmm', '0987654311', 'https://tse4.mm.bing.net/th?id=OIP.Vp3t-sVWEYBWkiCUJUQA6wHaE8&pid=Api&P=0&h=180', 'Mai Lâm', 'Mailam123@', 'ADMIN', 'Cần Thơ', 'mlamhcmut2@gmail.com'),
    ('Felixxx', '1231231987', 'https://tse4.mm.bing.net/th?id=OIP.Vp3t-sVWEYBWkiCUJUQA6wHaE8&pid=Api&P=0&h=180', 'Nguyễn Châu Hoài Phúc', 'Phucflex123', 'KHACH_HANG', 'Cà Mau', 'phuc693@gmail.com'),

INSERT INTO `TIN_TUC` (`TTNoi_dung`, `ID`, `tieu_de`, `mo_ta`, `link_anh`, `Thoi_gian_dang_TT`)
VALUES
    (
        'Xe đạp địa hình là lựa chọn lý tưởng cho những ai yêu thích khám phá thiên nhiên. Với thiết kế chắc chắn và bánh xe to, chúng dễ dàng vượt qua các địa hình gồ ghề.',
        2,
        'Khám phá xe đạp địa hình',
        'Địa hình gồ ghề không còn là trở ngại',
        'http://giant.vn/wp-content/uploads/2018/04/Nhung-nguyen-tac-khong-bao-gio-thua-khi-di-phuot-xe-dap-6.jpeg',
        NOW()
    ),
    (
        'Xe đạp thể thao với khung sườn nhẹ và thiết kế khí động học giúp bạn đạt tốc độ cao nhất trên đường trường, phù hợp cho các cuộc đua và tập luyện chuyên nghiệp.',
        2,
        'Tại sao nên chọn xe đạp thể thao?',
        'Tốc độ và phong cách trên từng chặng đường',
        'http://giant.vn/wp-content/uploads/2018/04/Nhung-nguyen-tac-khong-bao-gio-thua-khi-di-phuot-xe-dap-6.jpeg',
        NOW()
    ),
    (
        'Xe đạp gấp ngày càng được ưa chuộng bởi tính tiện lợi, dễ dàng mang theo và cất giữ. Đây là lựa chọn lý tưởng cho các khu vực đô thị chật hẹp.',
        2,
        'Xe đạp gấp - giải pháp cho đô thị hiện đại',
        'Nhỏ gọn nhưng không kém phần tiện nghi',
        'http://giant.vn/wp-content/uploads/2018/04/Nhung-nguyen-tac-khong-bao-gio-thua-khi-di-phuot-xe-dap-6.jpeg',
        NOW()
    ),
    (
        'Lựa chọn xe đạp trẻ em đúng cách không chỉ giúp bé vui chơi mà còn hỗ trợ phát triển thể chất. Chú ý đến kích cỡ và chất liệu phù hợp.',
        2,
        'Chọn xe đạp trẻ em cho bé yêu',
        'Cách chọn xe đạp an toàn và phù hợp',
        'http://giant.vn/wp-content/uploads/2018/04/Nhung-nguyen-tac-khong-bao-gio-thua-khi-di-phuot-xe-dap-6.jpeg',
        NOW()
    ),
    (
        'Xe đạp điện là giải pháp thay thế hoàn hảo cho phương tiện giao thông cá nhân, vừa tiết kiệm vừa thân thiện với môi trường.',
        2,
        'Xu hướng sử dụng xe đạp điện',
        'Tiết kiệm năng lượng, bảo vệ môi trường',
        'http://giant.vn/wp-content/uploads/2018/04/Nhung-nguyen-tac-khong-bao-gio-thua-khi-di-phuot-xe-dap-6.jpeg',
        NOW()
    );

INSERT INTO `BINH_LUAN` (`BLNoi_dung`, `ID`, `Phanhoi_ID`)
VALUES
    (
        'Shop có rất nhiều phụ tùng đa dạng, từ xe đạp địa hình đến xe đạp thể thao. Chất lượng rất tốt!',
        1,
        NULL
    ),
    (
        'Mình đã mua bánh xe địa hình ở đây, chất lượng ổn định, giá cả hợp lý. Sẽ ủng hộ shop lần sau.',
        3,
        1
    ),
    (
        'Nhân viên tư vấn rất nhiệt tình, giúp mình chọn được phụ tùng phù hợp với xe đạp của mình.',
        3,
        NULL
    ),
    (
        'Mình đã đặt hàng online, giao hàng nhanh chóng, nhưng có chút lỗi ở tay lái. Hy vọng shop khắc phục.',
        3,
        NULL
    ),
    (
        'Cảm ơn shop đã hỗ trợ đổi hàng nhanh chóng. Dịch vụ hậu mãi thật tuyệt vời!',
        1,
        3
    );

INSERT INTO `DON_HANG` (`Trang_thai`, `Dia_chi_giao_hang`, `Tong_so_mon`, `Tong_tien`, `Thoi_gian_tao_don`, `ID`, `PTTTID`)
VALUES
    (
        'Pending',
        '123 Đường Nguyễn Huệ, Quận 1, TP.HCM',
        3,
        1500000.00,
        '2024-12-01 10:15:00',
        1,
        1
    ),
    (
        'Completed',
        '45 Đường Lê Lợi, Quận 3, TP.HCM',
        5,
        2500000.00,
        '2024-12-02 14:20:00',
        3,
        2
    ),
    (
        'Cancelled',
        '78 Đường Trần Hưng Đạo, Quận 5, TP.HCM',
        2,
        800000.00,
        '2024-12-03 16:45:00',
        3,
        1
    ),
    (
        'Completed',
        '99 Đường Phạm Ngũ Lão, Quận 10, TP.HCM',
        4,
        3200000.00,
        '2024-12-04 18:30:00',
        1,
        2
    );

INSERT INTO `PHUONG_THUC_THANH_TOÁN` (`PTTTTen`)
VALUES
    ('Thanh toán khi nhận hàng'),
    ('Thanh toán VNPay');

INSERT INTO `DANH_MUC` (`Ten`, `URL`)
VALUES
    ('Xe đạp thể thao', 'https://xedapgiakho.com/wp-content/uploads/2020/10/z2210746680796_21d38dd08b68a91535d4c22c85928075-2048x1269.jpg'),
    ('Phụ tùng xe đạp', 'https://tse1.mm.bing.net/th?id=OIP.I2TIh-f0FGM8Id_FwV0U2gHaEp&pid=Api&P=0&h=180'),
    ('Mũ bảo hiểm', 'https://hanhtrangphuot.vn/uploads/shops/2015_10/royal.jpg'),
    ('Đồ bảo hộ', 'https://nonbaohiemdep.vn/wp-content/uploads/2021/04/do-bao-ho-cho-be-di-xe-dap-1.jpg'),
    ('Xe đạp trẻ em', 'https://bizweb.dktcdn.net/100/412/290/files/xe-dap-nu-gia-re-3-3bf45afb-1bb4-4846-8937-f97789bf7621.jpg?v=1616129768563'),

INSERT INTO `SAN_PHAM` (`SPTen`, `Mo_ta`, `Gia_ban`, `Giam_gia`, `Diem_danh_gia`, `link_anh`, `ma_danh_muc`)
VALUES
    ('Xe đạp đua', 'Xe đạp chuyên dụng cho đường đua với khung siêu nhẹ và tốc độ cao.', 15000000, 0.15, 4.8, 'https://xedapgiakho.com/wp-content/uploads/2022/09/Xe-Dap-Pho-Thong-24-Inch-Son-Mau-Song-Thai.jpg', 1),
    ('Phanh đĩa xe đạp', 'Phanh đĩa hiệu suất cao, bền bỉ, an toàn cho xe đạp thể thao.', 500000, 0.10, 4.5, 'https://xedapgiakho.com/wp-content/uploads/2022/09/Xe-Dap-Pho-Thong-24-Inch-Son-Mau-Song-Thai.jpg', 2),
    ('Mũ bảo hiểm siêu nhẹ', 'Mũ bảo hiểm chất liệu cao cấp, siêu nhẹ, bảo vệ an toàn tuyệt đối.', 800000, 0.12, 4.7, 'https://xedapgiakho.com/wp-content/uploads/2022/09/Xe-Dap-Pho-Thong-24-Inch-Son-Mau-Song-Thai.jpg', 3),
    ('Áo giáp bảo hộ', 'Áo giáp bảo hộ, thiết kế chắc chắn, bảo vệ tối đa khi di chuyển.', 1200000, 0.08, 4.6, 'https://xedapgiakho.com/wp-content/uploads/2022/09/Xe-Dap-Pho-Thong-24-Inch-Son-Mau-Song-Thai.jpg', 4),
    ('Xe đạp trẻ em', 'Xe đạp trẻ em, màu sắc nổi bật, thiết kế an toàn và dễ sử dụng.', 3000000, 0.20, 4.9, 'https://xedapgiakho.com/wp-content/uploads/2022/09/Xe-Dap-Pho-Thong-24-Inch-Son-Mau-Song-Thai.jpg', 5);


INSERT INTO `DON_HANG_CHUA_SAN_PHAM` (`Don_hang_ID`, `San_pham_ID`, `Quantity`)
VALUES
    (1, 1, 2),
    (1, 2, 1),
    (2, 3, 4),
    (3, 4, 1),
    (3, 5, 3);

INSERT INTO `GIO_HANG` (`UserID`)
VALUES
    (1),
    (3),

INSERT INTO `GIO_HANG_CHUA_SAN_PHAM` (`Gio_hang_ID`, `San_pham_ID`, `Quantity`)
VALUES
    (1, 1, 2),
    (1, 3, 1),
    (2, 4, 1),
    (2, 2, 5),
    (2, 5, 3);




COMMIT;