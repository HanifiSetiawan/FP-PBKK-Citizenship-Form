<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Submitted Data</title>
</head>
<body class="bg-dark">
    <section>
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header text-center">
                    <h1 class="card-title">Submitted Data</h1>
                </div>
                <div class="card-body">
                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Name</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['name'] }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>ID</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['id'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Phone number</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['phonenumber'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Address</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['address'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Age</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['age'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Religion</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['religion'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Gender</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['gender'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Job</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['job'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Job</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['job'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Marial Status</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['marialstatus'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border border-dark px-3 pt-2 rounded mb-2">
                        <div class="d-flex justify-content-between align-items-center border-succes">
                            <div class="text-left">
                                <p>Citizenship</p>
                            </div>
                            <div class="text-right">
                                <p>{{ $data['citizenship'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Display the uploaded image if it's stored -->
                    @if (isset($data['picture']))
                        <img src="{{ asset($data['picture']) }}" alt="Uploaded Picture">
                    @endif

                    <br><br>

                    <a class="btn btn-outline-primary btn-lg" href="/form" role="button" >Go back</a>

                    <h1 class="text-center text-success">SUCCESS !!!!</h1>

                </div>
            </div>
        </div>
    </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
