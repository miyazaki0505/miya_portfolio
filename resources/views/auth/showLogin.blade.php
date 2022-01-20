@extends('layouts.app')

@section('content')

<div class="mt-3 p-3">
    <div class="text-center mt-3">
        <p class="logout_subtitle text-center">こちらはログインが必要です！</p>
    </div>

    <div class="row m-5 pt-5">
        <div class="col-3"></div>
        <div class="col-3">
            <div class="text-center mt-3"><a href="{{ config('app.url'). '/login' }}" class="login_link btn btn-outline-secondary">ログインはこちら</a></div>
        </div>
        <div class="col-3">
            <div class="text-center mt-3"><a href="{{ config('app.url'). '/signup' }}" class="register_link btn btn-outline-secondary">新規登録はこちら</a></div>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="text-center"><a class="text-decoration-none mt-2" class="detail_link" href="#" onclick="history.back();" style="color: grey;">案件の詳細へ戻る</a></div>

</div>

@endsection
