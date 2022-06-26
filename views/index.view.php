<?php require "views/partials/top.php"; ?>
<?php require "views/partials/navbar.php"; ?>
<div class="conatiner">
    <h1>All rents</h1>
    <div class="row">
        <div class="col-10 offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Phone</th>
                        <th>Provider</th>
                        <th>Start date</th>
                        <th>End date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rents as $rent): ?>
                    <tr>
                        <td><?php echo $rent->id; ?></td>
                        <td><?php echo $rent->customer; ?></td>
                        <td><?php echo $rent->brand . " " . $rent->model ; ?></td>
                        <td><?php echo $rent->provider; ?></td>
                        <td><?php echo displayDate($rent->start_date); ?></td>
                        <td><?php echo displayDate($rent->end_date); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

<?php require "views/partials/bottom.php"; ?>