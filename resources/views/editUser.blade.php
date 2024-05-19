<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Create User</title>
</head>

<body>
    <h1 class="text-center mb-4">Edit User</h1>
    <div class="row justify-content-center">
        <div class="col col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/userUpdate/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group required">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control"
                                id="exampleInputEmail1">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" value="{{ $data->email }}" name="email" class="form-control"
                                id="exampleInputEmail1">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" value="{{ $data->password }}" name="password" class="form-control"
                                id="exampleInputEmail1">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputEmail1" class="form-label">Select Role</label>
                            <select name="role" class="custom-select">
                                <option value="{{ $data->role }}">{{ $data->role }}</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                            @error('role')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a type="button" href="/" class="btn btn-warning">Cancel</a>
                </div>
                </form>
            </div>
        </div>

    </div>

    @include('includes.script')
</body>

</html>
