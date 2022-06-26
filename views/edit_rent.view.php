<?php require "views/partials/top.php"; ?>
<?php require "views/partials/navbar.php"; ?>

<h1>Edit rent</h1>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

            <form action="edit_rent.php" method="post">
                <input type="hidden" name="id" value="<?php echo $rents->id; ?>">
                <input class="form-control mb-3" type="text" placeholder="Full name" name="customer"
                    value="<?php echo $rents->customer; ?>">

                <select class="form-control mb-3" name="phone_id">
                    <?php foreach($phones as $phone): ?>
                    <option value="<?php echo $phone->id; ?>"
                        <?php echo $rents->phone_id === $phone->id ? "selected":""; ?>>
                        <?php echo "{$phone->brand} {$phone->model}"; ?>
                    </option>
                    <?php endforeach; ?>
                </select>

                <select class="form-control mb-3" name="provider_id">
                    <?php foreach($providers as $provider): ?>
                    <option value="<?php echo $provider->id; ?>"
                        <?php echo $rents->provider_id === $provider->id ? "selected":""; ?>>
                        <?php echo $provider->provider; ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="">Start date</label>
                <input class="form-control mb-3" type="date" name="start_date"
                    value="<?php echo $rents->start_date; ?>">

                <label for="">End date</label>
                <input class="form-control mb-3" type="date" name="end_date" value="<?php echo $rents->end_date; ?>">

                <button class=" form-control btn btn-primary">SAVE CHAGES</button>
            </form>
        </div>
    </div>

</div>



<?php require "views/partials/bottom.php"; ?>