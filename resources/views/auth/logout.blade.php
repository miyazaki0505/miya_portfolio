@extends('layouts.app')

@section('content')


<div class="mt-3 p-3">
    <div class="text-center mt-3">
        <h3 class="logout_title text-center">ログアウト</h3>
        <p class="logout_subtitle text-center">{{ Auth::user()->last_name."さん" }}、ログアウトしますか？</p>
    </div>

    <div class="row mt-5 mb-5 pt-5">
        <div class="col-sm-6 offset-sm-3">

            <form action="/logout" class="logout-form">
                @csrf

                <div class="text-center"><input type="submit" class="btn btn-secondary mt-2" value="ログアウト"></div>
            
            </form>

            <div class="text-center"><a class="turn_back mt-2" type="submit" style="color: grey;" onclick="history.back(-1)">戻る</a></div>

        </div>
    </div>
</div>

@endsection
