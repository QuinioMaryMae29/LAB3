<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                <?= $validation->listErrors() ?>
                </div>
                <?php endif; ?>

                <form action="<?php echo base_url(); ?>/UserController" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" class="form-control">
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <br>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                    </div>
                    <br>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark"> Signup </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>