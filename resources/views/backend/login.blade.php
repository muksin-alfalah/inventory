@extends('backend.layouts.login')

@section('title', 'Login')

@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="post" id="formLogin">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <h1>Login Form</h1>
                        <div class="error-alert"></div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-submit btn-primary ladda-button btn-block">Login</button> 
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                        <div class="clearfix"></div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection