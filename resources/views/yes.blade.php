@extends('layouts.app')

    
@section('content')
        <div class="container bg-dark table-responsive">
            <h1>Data</h1>
            <table class="table table-striped table-dark table-wrap bg-dark align-middle">
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
                <tbody class="table-group-divider">
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
@endsection

           