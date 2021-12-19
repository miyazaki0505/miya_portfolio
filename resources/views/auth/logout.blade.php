@extends('layouts.app')

@section('content')

<div class="text-center">
    <h3 class="logout_title text-center d-inline-block mt-3">ログアウト</h3>
    <p class="logout_subtitle text-center">ログアウトしますか？</p>
</div>

<div class="row mt-5 mb-5">
    <div class="col-sm-6 offset-sm-3">

        <form method="post" action="/logout" class="login-form">
            @csrf
            <div class="text-center"><input type="submit" class="btn btn-secondary mt-2" value="ログアウト"></div>
        </form>

            <div class="text-center"><a type="submit" class="btn btn-secondary mt-2" value="戻る">戻る</div>

    </div>
</div>

@endsection
