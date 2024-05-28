<?php pageInclude('include/header.php') ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form action="/submit-login" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="register" class="btn btn-dark">Register</a>
                </form>
            </div>
        </div>
    </div>
<?php pageInclude('include/footer.php') ?>
