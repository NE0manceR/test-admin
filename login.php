<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge">
  <title>Login</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous">
</head>
</head>
<body>

<div class="admin-panel">
  <form action="admin/admin.php" method="post">
    <input type="text" name="login" class="form-control" placeholder="Login">
    <input type="password" class="form-control" name="password" placeholder="password">
    <button class="btn btn-primary" type="submit"> Enter</button>
  </form>
</div>
</body>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</html>
<style>
    .admin-panel {
        display: grid;
        align-content: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
    }

    form {
        display: grid;
        gap: 12px;
        width: 400px;
        height: max-content;
        padding: 20px;
        border: 2px solid #0d6efd;
    }
</style>