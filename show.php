<?php
include_once __DIR__."/vendor/autoload.php";

use App\Utilities\Database;

$db = new Database();
$student = $db->show($_GET['id']);
?>
<?php include_once "./header.php"; ?>
    <div class="w-50 mx-auto p-5 bg-white border rounded shadow">
        <?php if($student) :?>
            <div>
                <h1><?php echo $student->id;?></h1>
                <h1><?php echo $student->name; ?></h1> 
                <h1><?php echo $student->email; ?></h1> 
                <h1><?php echo $student->birthday; ?></h1> 
                <h1><?php echo $student->age; ?></h1> 
            </div>
            <div class="d-flex gap-3">
                <a href="/index.php" class="btn btn-primary">Home</a>
                <a href="/edit.php?id=<?php echo $student->id; ?>" class="btn btn-warning">Edit</a>
                <a href="/delete.php?id=<?php echo $student->id; ?>" class="btn btn-danger">Delete</a>
            </div>
        <?php else :?>
            <h1>Student Not Found!</h1>
            <div class="d-flex gap-3">
                <a href="/index.php" class="btn btn-primary">Home</a>
            </div>
        <?php endif ;?>
        </div>
<?php include_once "./footer.php"; ?>