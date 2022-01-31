@extends('layouts.app')

@section('content')

    <div class="text-center mt-4">
        <h2>応募</h2>
        <p class="mt-4">こちらの内容で応募します。</p>
    </div>

    <div class="mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <form method="post" action="{{ config('app.url'). "/showDetail/". $project->id. "/apply" }}" class="application-form">

                @csrf

                <div class="row text-center">
                    <div class="font-weight-bold col">
                        <label for="name">お名前</label>
                    </div>
                    <div class="col">
                        {{ $user_last_name }}　{{ $user_first_name }}
                    </div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="ruby">お名前(ふりがな)</label>
                    </div>
                    <div class="col">
                        {{ $user_last_name_ruby }}　{{ $user_first_name_ruby }}
                    </div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="birthday">生年月日</label>
                    </div>
                    <div class="col">
                        {{ $user_birth_year }}年　{{ $user_birth_month }}月　{{ $user_birth_day }}日 
                    </div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="email">メールアドレス</label>
                    </div>
                    <div class="col">
                        {{ $user_email }} 
                    </div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="work_location">希望勤務地</label>
                    </div>
                    <div class="col">{{ $work_location }}</div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="language">希望言語</label>
                    </div>
                    <div class="col">{{ $language }}</div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="occupation">希望職種</label>
                    </div>
                    <div class="col">{{ $occupation }}</div>
                </div>

                <div class="row text-center mt-4">
                    <div class="font-weight-bold col">
                        <label for="about_myself">自己PR</label>
                    </div>
                    <div class="col text-left">
                        {{$user_about_myself}} 
                    </div>
                </div>

                <div class="text-center">
                    <div class="apply_button mt-5"><input type="submit" class="btn btn-secondary" value="応募"></div>
                </div>

                <p class="text-center mt-3"><a class="text-decoration-none mt-2" href="#" onclick="history.back(-1)" style="color: grey;">戻る</a></p>

            </form>

        </div>
    </div>

@endsection
