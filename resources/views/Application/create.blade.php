@extends('application.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      @if (session('status'))
                        <div class="alert alert-success">
                         {{ session('status') }}
                        </div>
                       @endif
                        <h4>Application Form
                            {{-- <a href="{{ url('category') }}" class="btn btn-danger float-end">Back</a> --}}
                        </h4>
                    </div>
                    <div class="card-body">
                        <form 
                        action="{{ route('application.store') }}" 
                        method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" required/>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                               <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required/>
                                @error('Email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                               <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control" required/>
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                              <div class="mb-3">
                                {{-- <label>Gender</label> --}}
                                <label>Gender:</label><br>

                                  <input type="radio" id="male" name="gender" value="male" >
                                  <label for="male">Male</label><br>

                                  <input type="radio" id="female" name="gender" value="female">
                                  <label for="female">Female</label><br>

                                  <input type="radio" id="other" name="gender" value="other">
                                  <label for="other">Other</label><br>

                                  <input type="radio" id="prefer-not-to-say" name="gender" value="prefer-not-to-say">
                                  <label for="prefer-not-to-say">Prefer not to say</label>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                               <div class="mb-3">
                                <label>DOB</label>
                                <input type="date" name="dob" class="form-control" required/>
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Short Bio</label>
                                <textarea name="shortbio" rows="3" class="form-control"></textarea>
                                @error('shortbio') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                               <div class="mb-3">
                                <label>Upload Resume</label>
                                <input type="file" name="file" class="form-control"  required/>
                                @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection