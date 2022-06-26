<?php require "views/partials/top.php"; ?>
<?php require "views/partials/navbar.php"; ?>

<h1>Add rent</h1>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

            <form action="add_rent.php" method="post">

                <input class="form-control mb-3" type="text" placeholder="Full name" name="customer">

                <select class="form-control mb-3" name="phone_id">
                    <?php foreach($phones as $phone): ?>
                    <option value="<?php echo $phone->id; ?>">
                        <?php echo "{$phone->brand} {$phone->model}"; ?></option>
                    <?php endforeach; ?>
                </select>

                <select class="form-control mb-3" name="provider_id">
                    <?php foreach($providers as $provider): ?>
                    <option value="<?php echo $provider->id; ?>">
                        <?php echo $provider->provider; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="">Start date</label>
                <input class="form-control mb-3" type="date" name="start_date">

                <label for="">End date</label>
                <input class="form-control mb-3" type="date" name="end_date">

                <button class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>

</div>



<?php require "views/partials/bottom.php"; ?>