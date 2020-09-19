<?php include "header.php" ?>
    <div class="login">
        <div class="container1">
            <form action="account.php">
                <h3 class="text-center">LOGIN</h3>
                <label for="">Email ID</label>
                <input type="text" class="form-control">
                <label for="">Password</label>
                <input type="password" class="form-control">
                <button type="submit" class="btn btn-primary text-center form-control my-2">SIGN IN</button>
            </form>
            <div class="text-center">
                <ul>
                    <li><a href="#" class="text-primary m-auto my-1">Forgot your password?</a></li>
                   <li><a href="register.php" class="text-primary m-auto my-1">Create account</a></li>
                </ul>
                </div>
        </div>
    </div>
<?php include "footnote.php"; ?>