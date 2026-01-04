CREATE DATABASE optimasi_db;
USE optimasi_db;

CREATE TABLE hasil_optimasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    g1_t1 INT,
    g1_t2 INT,
    g1_t3 INT,
    g2_t1 INT,
    g2_t2 INT,
    g2_t3 INT,
    total_biaya INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
