@extends('layouts.app')

@section('content')
    <div class="container bg-dark table-responsive">
        <h1>Data</h1>
        <form action="{{ route('Data') }}" method="GET" class="mb-4 d-flex align-items-center justify-content-center">
            <div class="input-group ">
                <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ $search }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-dark table-wrap bg-dark align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Religion</th>
                    <th>Gender</th>
                    <th>Job</th>
                    <th>Marialstatus</th>
                    <th>City Origin</th>
                    <th>Picture</th>
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
        <div class="text-center mt-4">
            <a href="{{ route('data.showAll') }}"  class="btn btn-primary">Show All</a>
            <a href="{{ route('Data') }}" id="showLessButton" class="btn btn-secondary">Show Less</a>
        </div>
    </div>
@endsection
