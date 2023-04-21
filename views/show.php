<?php include_once __DIR__."/layouts/header.php"; ?>
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
                <a href="/index" class="btn btn-primary">Home</a>
                <a href="/edit/<?php echo $student->id; ?>" class="btn btn-warning">Edit</a>
                <a href="/delete/<?php echo $student->id; ?>" class="btn btn-danger">Delete</a>
            </div>
        <?php else :?>
            <h1>Student Not Found!</h1>
            <div class="d-flex gap-3">
                <a href="/index" class="btn btn-primary">Home</a>
            </div>
        <?php endif ;?>
        </div>
<?php include_once __DIR__."/layouts/footer.php"; ?>