
<?php include_once __DIR__."/layouts/header.php"; ?>
    <div class="w-50 mx-auto p-5 bg-white border rounded shadow">
        <form action="/store" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include_once __DIR__."/layouts/footer.php"; ?>
