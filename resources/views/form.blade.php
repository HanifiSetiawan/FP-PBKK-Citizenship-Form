<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
 
    <title>Form Validation</title>
</head>
<body class="bg-dark">
    <section class="bg-dark">
        <div class="container mt-5 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class= "card border-dark mb-3" style="width: 50rem;">
                    <div class="card-header text-center">
                        <h1 class="card-title">Citizenship Form</h1>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="/success" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Please input your full name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="nik" class="form-label">ID</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Please input your specific nik" value="{{ old('nik') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="phonenumber" class="form-label">Phonenumber</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Please input your Phonenumber" value="{{ old('phonenumber') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Please input your Address" value="{{ old('address') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="age" id="age" placeholder="Please input your Age" value="{{ old('age') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="religion" class="form-label">Religion</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="religion" id="religion" placeholder="Please input your Religion" value="{{ old('religion') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="gender" id="gender" placeholder="Please input your Gender" value="{{ old('gender') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="job" class="form-label">Job</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="job" id="job" placeholder="Please input your Job" value="{{ old('job') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="marialstatus" class="form-label">Marial status</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="marialstatus" id="marialstatus" placeholder="Please input your Marial status" value="{{ old('marialstatus') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="citizenship" class="form-label">Citizenship</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Please input your Citizenship" value="{{ old('citizenship') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="picture" class="form-label">Picture (Max 2MB):</label>
                                <input type="file" name="picture" id="picture" required>
                            </div>

                            <div class="card-footer text-body-secondary justify-content-center align-items-center">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
