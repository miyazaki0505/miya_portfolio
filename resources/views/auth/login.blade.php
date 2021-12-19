@extends('layouts.app')

@section('content')

<div class="text-center">
    <h3 class="login_title text-center d-inline-block mt-3">ログイン</h3>
</div>

<div class="row mt-5 mb-5">
    <div class="col-sm-6 offset-sm-3">

        <form method="post" action="/login" class="login-form">

            <div class="form-group">
                <div class="font-weight-bold"><label for="email">メールアドレス</label></div>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="form-group">
                <div class="font-weight-bold"><label for="password">パスワード</label></div>
                <input type="password" name ="password" class="form-control">
            </div>

            <div class="text-center"><input type="submit" class="btn btn-secondary mt-2" value="ログイン"></div>
            
        </form>

        <p class="text-center mt-3"><a href="signup" class="register_link" style="color: grey;">新規登録はこちら</a></p>

    </div>
</div>

@endsection
