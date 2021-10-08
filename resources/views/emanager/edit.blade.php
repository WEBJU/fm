@extends('emanager.index')
@section('content')
<main>
    <div class="container">
        <div class="registration-form mt-5 pt-5">
            <form method="post" action="{{route('user.profile')}}">
                @csrf
                @method('PUT')
                <div class="form-icon">
                    <span><img src="assets/img/logo/Logo.png" alt="" height="60px" width="60px"></i></span>
                </div>
                <p class="register-text">Create your free account</p>
                @include('messages/flash-message')
                <div class="form-group">
                    <input type="text" class="form-control item" name="name" value="{{$user->name}}" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" id="email" name="email" value="{{$user->email}}" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="register">Edit</button>
                </div>

            </form>
        </div>
    </div>
</main>
@endsection

