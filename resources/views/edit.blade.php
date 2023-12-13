@extends('layouts.app')

@section('content')
    <div class="container bg-dark text-light">
        <h1>Edit Data</h1>
        <form action="{{ route('Datas.update', $citizenship->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <!-- Your form fields for editing data -->
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $citizenship->name }}">
            </div>

            <div class="form-group mb-3">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" value="{{ $citizenship->nik }}">
            </div>

            <div class="form-group mb-3">
                <label for="phonenumber">Phone Number</label>
                <input type="text" name="phonenumber" class="form-control" value="{{ $citizenship->phonenumber }}">
            </div>

            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $citizenship->address }}">
            </div>

            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control" value="{{ $citizenship->age }}">
            </div>

            <div class="form-group mb-3">
                <label for="religion">Religion</label>
                <input type="text" name="religion" class="form-control" value="{{ $citizenship->religion }}">
            </div>

            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <input type="text" name="gender" class="form-control" value="{{ $citizenship->gender }}">
            </div>

            <div class="form-group mb-3">
                <label for="job">Job</label>
                <input type="text" name="job" class="form-control" value="{{ $citizenship->job }}">
            </div>

            <div class="form-group mb-3">
                <label for="marialstatus">Marial status</label>
                <input type="text" name="marialstatus" class="form-control" value="{{ $citizenship->marialstatus }}">
            </div>

            <div class="form-group mb-3">
                <label for="citizenship">City Origin</label>
                <input type="text" name="citizenship" class="form-control" value="{{ $citizenship->citizenship }}">
            </div>

            <!-- Add other form fields for other attributes -->

            <button type="submit" class="btn mb-3 btn-primary">Update</button>
        </form>
    </div>
@endsection
