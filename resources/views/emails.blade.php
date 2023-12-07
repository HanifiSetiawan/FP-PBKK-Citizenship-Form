@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center d-flex align-items-center justify-content-center">
            <div class="col-md-6" style="top: 100%;">
                <div class="card bg-dark border-light text-light" style="top: 100%;">
                    <div class="card-header border-light">Customer Service</div>
                    <div class="card-body">
                        <form action="{{ route('CSsent') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Type your message here"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-light">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection