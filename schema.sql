CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    email VARCHAR(100),
    active TINYINT (1) DEFAULT 1,
    last_login DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    users (username, password, email, active, last_login)
VALUES
    (
        'alice',
        'password123',
        'alice@example.com',
        1,
        NOW () - INTERVAL 2 MONTH
    ),
    (
        'bob',
        'password456',
        'bob@example.com',
        1,
        NOW () - INTERVAL 7 MONTH
    ),
    (
        'charlie',
        'password789',
        'charlie@example.com',
        0,
        NOW () - INTERVAL 8 MONTH
    );
