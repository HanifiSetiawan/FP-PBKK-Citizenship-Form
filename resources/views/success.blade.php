<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .link{
            margin-top: 10%;
            margin-left: 10%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                    <h1 class="text-center text-success">Success !!</h1>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center"> 
                <a class="btn btn-lg btn-outline-primary" href="{{route('Data')}}">Database</a>
            </div>
        </div>
    </div>
</body>
</html>