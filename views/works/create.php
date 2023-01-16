<?php require 'views/layouts/main.php' ?>
<header>
    <div class="container">
        <h1 class="h1 text-center">Create new Work</h1>
    </div>
</header>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="/works/store" method="post">
                    <div class="form-group">
                        <label for="name">Work Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name..." required="required">
                    </div>
                    <div class="form-group">
                        <label for="starting_date">Start date</label>
                        <input type="text" name="starting_date" id="starting_date" class="form-control" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="ending_date">End date</label>
                        <input type="text" name="ending_date" id="ending_date" class="form-control" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="ending_date">Status</label>
                        <select name="status" class="form-control">
                            <?php foreach ($status as $key => $value) : ?>
                            <option value="<?php echo $key; ?>">
                                <?php echo $value ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-block btn-success" type="submit" value="Submit">
                    </div>
                    <div class="form-group mt-4">
                        <a class="btn btn-block btn-warning" href="/works">Back To List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require 'views/layouts/bottom.php' ?>