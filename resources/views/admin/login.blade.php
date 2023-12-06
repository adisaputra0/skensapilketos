@extends('layouts.login')

@section('content')
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin" id="m_login">
            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                <div class="m-stack m-stack--hor m-stack--desktop">
                    <div class="m-stack__item m-stack__item--fluid">
                        <div class="m-login__wrapper">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="{{ url('img/logo-lms.png') }}">
                                </a>
                            </div>
                            <div class="m-login__signin">
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        Sign In To SKENSOS
                                    </h3>
                                </div>
                                <form action="{{ url('/login_admin') }}" method="post" class="m-login__form m-form">
                                    @csrf
                                    @method("POST")
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
                                    </div>
                                    <div class="form-group m-form__group">
                                        <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="m-login__form-action">
                                        <button id="m_login_signin_submit" class="btn btn-skensa m-btn m-btn--pill m-btn--custom m-btn--air">
                                            Sign In
                                        </button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url({{ url('img/tm-loginskensa.png') }})">
                <div class="m-grid__item m-grid__item--middle">
                    <h3 class="m-login__welcome text-center">
                        WELCOME TO SKENSOS
                    </h3>
                    <p class="m-login__msg text-center">
                        <b>"Abhyasad Dharyate Vidya"</b>
                        <br>
                        Pelihara ilmu pengetahuan dengan cara mengamalkan dengan praktik kehidupan.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection