<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<body >
    <div class="d-flex justify-content-center align-content-center" style="margin-top: 50px">
        <form action="/register" method="POST">
            <h1>REGISTER</h1><br><br>
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" aria-describedby="emailHelp" value={{Cookie::get('username') != null ? Cookie::get('username') : ""}}>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email" aria-describedby="emailHelp" value={{Cookie::get('username') != null ? Cookie::get('email') : ""}}>
              </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" value={{Cookie::get('username') != null ? Cookie::get('password') : ""}}>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Re-type Your Password" value={{Cookie::get('username') != null ? Cookie::get('password') : ""}}>
            </div>
            <div class="mb-3">
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="(admin/customer)" value={{Cookie::get('username') != null ? Cookie::get('role') : ""}}>
            </div>
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
              <label class="form-check-label" for="remember_me">Remember me</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <p>Have an account?</p><a href="/login">Login here</a>
            @if ($errors->any())
                <div style="color:red">{{ $errors->first() }}</div>
            @endif
        </form>
    </div>
</body>
</html>
