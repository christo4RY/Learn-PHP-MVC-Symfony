<?php
include_once __DIR__."/vendor/autoload.php";

use App\Utilities\Database;

$db = new Database();
$student = $db->edit($_GET['id']);
?>
<?php include_once "./header.php"; ?>
    <div class="w-50 mx-auto p-5 bg-white border rounded shadow">
        <form action="/update.php" method="POST">
            <input type="hidden" value="<?php echo $student->id; ?>" name="id">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" value="<?php echo $student->name; ?>" name="name" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" value="<?php echo $student->email; ?>" name="email" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Birthday</label>
                <input type="date" value="<?php echo $student->birthday; ?>" name="birthday" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Age</label>
                <input type="number" value="<?php echo $student->age; ?>" name="age" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include_once "./footer.php"; ?>
