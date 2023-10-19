<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .table-wrap {
            word-wrap: break-word;
        }

        .foto {
            width: 100px;
            height: auto;
        }
    </style>
</head>
    <body>
        <div class="container">
            <h1>Data</h1>
            <table class="table table-bordered table-wrap">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>NIK</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>age</th>
                        <th>religion</th>
                        <th>gender</th>
                        <th>job</th>
                        <th>marialstatus</th>
                        <th>citizenship</th>
                        <th>picture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citizenships as $citizenship)
                    <tr>
                        <td>{{ $citizenship->name }}</td>
                        <td>{{ $citizenship->nik }}</td>
                        <td>{{ $citizenship->phonenumber }}</td>
                        <td>{{ $citizenship->address }}</td>
                        <td>{{ $citizenship->age }}</td>
                        <td>{{ $citizenship->religion }}</td>
                        <td>{{ $citizenship->gender }}</td>
                        <td>{{ $citizenship->job }}</td>
                        <td>{{ $citizenship->marialstatus }}</td>
                        <td>{{ $citizenship->citizenship }}</td>
                        <td>
                            <img class="foto" src="{{ asset('storage/' . str_replace ('public/', '', $citizenship->picture)) }}" alt="picture">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
           