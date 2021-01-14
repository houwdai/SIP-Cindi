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
<form action="{{ route('users.store') }}" method="POST">
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="nama" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="role_id">Role ID</label>
        <input type="role_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User ID">
        <small id="role_id" name="role_id" class="form-text text-muted">1= Admin 2= User</small>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="usernama" class="form-control" id="username" name="Username" aria-describedby="emailHelp" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="yourname@gmail.com">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>