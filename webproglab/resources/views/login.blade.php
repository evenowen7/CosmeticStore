<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body >
    <div class="d-flex justify-content-center align-content-center" style="margin-top: 50px">
        <form action="/login" method="POST">
            <h1>Login</h1><br><br>
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="username" aria-describedby="emailHelp" value={{Cookie::get('username') != null ? Cookie::get('username') : ""}}>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password" value={{Cookie::get('username') != null ? Cookie::get('password') : ""}}>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
              <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <p>Don't have an account?</p><a href="/register">Register here</a>
            @if ($errors->any())
                <div style="color:red">{{ $errors->first() }}</div>
            @endif
        </form>
    </div>
</body>
</html>
