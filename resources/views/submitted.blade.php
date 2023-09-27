<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Submitted Data</title>
</head>
<body>
    <h1>Submitted Data</h1>
    
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Address: {{ $data['address'] }}</p>
    <p>Score: {{ $data['score'] }}</p>

    <!-- Display the uploaded image if it's stored -->
    @if (isset($data['picture_path']))
        <img src="{{ asset($data['picture_path']) }}" alt="Uploaded Picture">
    @endif

    <br><br>
    <a class="btn btn-outline-primary" href="/form" role="button" >Go back</a>

    <br><br><br>
    
    <h1 class="text-center text-success">SUCCESS !!!!</h1>

    
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
