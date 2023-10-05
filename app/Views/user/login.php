<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px;">
            <div class="col-md-4 col-md-offset-4">
                <h4>Log In</h4><br>
                <form action="/check" method="post">
                
                <?php if(!empty(session()->getFlashdata('Fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('Fail'); ?></div>
                <?php endif ?>
                
                    <div class="form-group">
                        <label for="">Username </label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username')?>">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Password </label>
                        <input type="text" class="form-control" name="password" placeholder="Password">
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Login</button> || <a href="/register">Have a no account, Register Now!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>