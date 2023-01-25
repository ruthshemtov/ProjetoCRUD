CREATE TABLE pessoa (
    id int(11) NULL PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(25) NOT NULL,
    birth DATE NOT NULL,
    address VARCHAR(100) NOT NULL,
    phone VARCHAR(15)   
);