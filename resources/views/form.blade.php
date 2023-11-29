@extends('layouts.app')


@section('content')
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
                                <select class="form-select" name="religion" id="religion">
                                    <option value="" {{ old('religion') == '' ? 'selected' : '' }}>-- Option --</option>
                                    <option value="Islam" {{ old('religion') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Christian" {{ old('religion') == 'Christian' ? 'selected' : '' }}>Christian</option>
                                    <option value="Protestan" {{ old('religion') == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                                    <option value="Hindi" {{ old('religion') == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                                    <option value="Budha" {{ old('religion') == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Other" {{ old('religion') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" name="gender" id="gender">
                                    <option value="" {{ old('gender') == '' ? 'selected' : '' }}>-- Option --</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
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
                                <select class="form-select" name="marialstatus" id="marialstatus">
                                    <option value="" {{ old('marialstatus') == '' ? 'selected' : '' }}>-- Option --</option>
                                    <option value="Unmarried" {{ old('marialstatus') == 'Unmarried' ? 'selected' : '' }}>Unmarried</option>
                                    <option value="Married" {{ old('marialstatus') == 'Married' ? 'selected' : '' }}>Married</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="citizenship" class="form-label">City Origin</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Please input your Citizenship" value="{{ old('citizenship') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="picture" class="form-label">Picture (Max 2MB):</label>
                                <input class="form-control" type="file" name="picture" id="picture" required>
                            </div>

                            <div class="card-footer text-body-secondary justify-content-center align-items-center">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

@endsection
