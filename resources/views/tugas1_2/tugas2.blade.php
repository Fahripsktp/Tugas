@extends('layouts.main')

@section('cssnya')
<br>
<br>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center text-dark">Registration form</h1>
                <form action="#" method="">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="name" placeholder="Name">
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="Email address">
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" name="password" placeholder="Password">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="#">Login</a> </small>
            
            </main>
        </div>
    </div>
    
@endsection