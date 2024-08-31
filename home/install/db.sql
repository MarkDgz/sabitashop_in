CREATE TABLE visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ip VARCHAR(45),
    fecha DATETIME,
    referer VARCHAR(255),
    user_agent TEXT
);
