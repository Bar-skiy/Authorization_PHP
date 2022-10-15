<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="container mt-4">
    <?php
if(($_COOKIE['person']) == ''):
    ?>
    <div class="row">
      <div class="col">
        <h1>Registration form</h1>
        <br />
        <form action="forms/reg.php" method="post">
          <label for="login">Login</label>
          <input type="text" class="form-control" name="login" id="login" placeholder="Create a login (at least 3 symbols)" />
          <br />
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Create a name (at least 3 symbols)" />
          <br />
          <label for="pass">Password</label>
          <input type="text" class="form-control" name="pass" id="pass" placeholder="Create a password (3 to 6 symbols)" />
          <br />
          <button class="btn btn-primary" type="submit">Registration</button>
        </form>
      </div>
      <div class="col">
        <h1>Authorization form</h1>
        <br />
        <form action="forms/verif.php" method="post">
          <label for="login">Login</label>
          <input type="text" class="form-control" name="login" id="login" placeholder="Enter login" />
          <br />
          <label for="pass">Password</label>
          <input type="text" class="form-control" name="pass" id="pass" placeholder="Enter password" />
          <br />
          <button class="btn btn-primary" type="submit">Authorization</button>
        </form>

        <?php else: ?>
         
          <p>User <b><?= $_COOKIE['person'] ?></b> is authorized<br>
          <h1>Page available to authorized users</h1><br>
          <a href="/exit.php">Click the to exit</a></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>