<?php
    require('inc/db_config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require("inc/link.php"); ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <div>
                <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
                <div class="p-4">
                    <div class="mb-3">
                        <input name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Admin name">
                    </div>
                    <div class="mb-4">
                        <input name="admin_pass" type="password" class="form-control shadow-none text-center" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn-sm btn-block btn-wave col-md-4 btn-primary">LOGIN</button>
                </div>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['login'])) {
            $frm_data = $_POST;
            
            $querry = "SELECT * FROM 'admin_cred'   WHERE 'admin_name' =? AND 'admin_pass' =?";
            $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

            $res = select($querry, $values, "ss");
            print_r($res);
        }
    ?>

    <?php require("inc/script.php"); ?>
</body>
</html>
