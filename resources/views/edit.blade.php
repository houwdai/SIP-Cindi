<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit User</title>
  </head>
  <body>
    <div class="container">
    <div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>
<form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="nama" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="role_id">Role ID</label>
        <input type="role_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User ID" value="{{ $user->role_id }}">
        <small id="role_id" name="role_id" class="form-text text-muted">1= Admin 2= User</small>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="usernama" class="form-control" id="username" name="Username" aria-describedby="emailHelp" placeholder="Username"value="{{ $user->username }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="yourname@gmail.com" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="myInput" name="password" placeholder="Password" value="{{ $user->password }}">
    </div>
    <input type="checkbox" onclick="myFunction()">Show Password
    <div class="modal-footer">
        <button type="submsit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
  </body>
</html>
