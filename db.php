<?php

class DB
{
    protected $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=testphp;', 'admin', 123456, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function index()
    {
        $statement = $this->pdo->query("SELECT * FROM students");
        return $statement->fetchAll();
    }

    public function store()
    {
        $statement = $this->pdo->prepare("INSERT INTO students(name,email,birthday,age) VALUES (:name,:email,:birthday,:age)");
        $statement->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':birthday' => $_POST['birthday'],
            ':age' => $_POST['age']
        ]);
        header("Location: index.php");
    }

    public function show($id)
    {
        $statement = $this->pdo->query("SELECT * FROM students WHERE id = {$id}");
        return $statement->fetch();
    }

    public function update($request)
    {
        if($request['id']) {
            $statement = $this->pdo->prepare("UPDATE students SET name = :name, email = :email, birthday = :birthday,age = :age WHERE id = :id");
            $statement->execute([
                ':name' => $request['name'],
                ':email' => $request['email'],
                ':birthday' => $request['birthday'],
                ':age' => $request['age'],
                ':id' => $request['id']
            ]);
            header("Location: /index.php");
        }
    }

    public function destroy($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM students WHERE id = :id");
        $statement->execute([
            ':id' => $id
        ]);
        header("Location: /index.php");
    }
}
