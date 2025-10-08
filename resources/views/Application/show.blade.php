@extends('application.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Application Detail
                            <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <p>
                                {{ $application->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <p>
                                { $application->description }
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <br/>
                            <p>
                                {{ $application->status == 1 ? 'checked':'' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection