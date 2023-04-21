<?php include_once __DIR__."/layouts/header.php"; ?>
        <div class="p-5 border rounded shadow-lg bg-white">
            <div class="mb-3 text-end">
                <a href="/create" class="btn btn-outline-primary btn-sm">Create Student</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Birthday</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $student) :?>
                            <tr>
                                <td>
                                    <a href="/show/<?= $student->id;?>">
                                        <?= $student->name?>
                                    </a>
                                </td>
                                <td><?= $student->email?></td>
                                <td><?= $student->birthday?></td>
                                <td><?= $student->age?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="/edit/<?= $student->id;?>" class="btn btn-sm btn-outline-warning">Edit</a>
                                        <a href="/delete/<?= $student->id;?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
<?php include_once __DIR__."/layouts/footer.php"; ?>
