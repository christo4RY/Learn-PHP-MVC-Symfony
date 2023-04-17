CREATE TABLE students (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    age INT NOT NULL 
)

INSERT INTO students (name,email,birthday,age) 
VALUES 
('mgmg','mgmg@gmail.com','2000-4-11','23'),
('aungaung','aungaung@gmail.com','2000-4-11','23'),
('hlahla','hlahla@gmail.com','2000-4-11','23'),
('kyawkyaw','kyawkyaw@gmail.com','2000-4-11','23'),
('muu','muu@gmail.com','2000-4-11','23')

SELECT * FROM students;

UPDATE students SET name = "aungaung" WHERE id = 1;