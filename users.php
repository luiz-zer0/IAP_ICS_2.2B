<?php
require 'ClassAutoLoad.php';

try{
    $conn=$ObjDatabase->getConnection();
$stmt=$conn->query("SELECT id,name,email,created_at FROM users ORDER BY name ASC ");
$users=$stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

$ObjLayouts->header($conf);
$ObjLayouts->navbar($conf);
?>



<?php
if (count($users)>0): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center">Registered Users</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registered At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['id']); ?></td>
                                <td><?php echo htmlspecialchars($user['name']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="alert alert-info text-center" role="alert">
                    No registered users found.
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
$ObjLayouts->footer($conf);