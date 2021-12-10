@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h3 class="login_title text-center d-inline-block mt-3">新規ユーザー登録</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <form action="{{ route('signup.post') }}" method="post" class="register-form">

                {{ csrf_field() }}
            
                <div class="font-weight-bold">{{ Form::label('お名前') }}</div>
                <div class="form-group d-flex justify-content-sm-start">
                    <div class="m-2">姓　</div>　
                    {{ Form::text('last_name', old('last_name'), ['class' => 'form-control']) }}　
                    
                    <div class="m-2">名　</div>　
                    {{ Form::text('first_name', old('first_name'), ['class' => 'form-control']) }}
                </div>

                <div class="font-weight-bold">{{ Form::label('ふりがな') }}</div>
                <div class="form-group d-flex justify-content-start">
                    <div class="m-2">せい　</div>　
                    {{ Form::text('last_name_ruby', old('last_name_ruby'), ['class' => 'form-control', 'style' => 'width:50%;']) }}　
                
                    <div class="m-2">めい　</div>　
                    {{ Form::text('first_name_ruby', old('first_name_ruby'), ['class' => 'form-control', 'style' => 'width:50%;']) }}
                </div>

                <div class="font-weight-bold">{{ Form::label('生年月日') }}</div>
                <div class="form-group d-flex justify-content-start">
                    {{ Form::text('birth_year', old('birth_year'), ['class' => 'form-control', 'style' => 'width:50%;']) }}
                    <div class="m-2">年</div>　
                    
                    {{ Form::text('birth_month', old('birth_month'), ['class' => 'form-control', 'style' => 'width:50%;']) }}
                    <div class="m-2">月</div>　
                    
                    {{ Form::text('birth_day', old('birth_day'), ['class' => 'form-control', 'style' => 'width:50%;']) }}
                    <div class="m-2">日</div>
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('email', 'メールアドレス') }}</div>
                    {{ Form::email('email', old('email'), ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('password', 'パスワード') }}</div>
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('password_confirmation', 'パスワード確認') }}</div>
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('work_location', '希望勤務地') }}</div>
                    {{ Form::select('work_location', App\Pref::selectlist(), old('work_location'), ['class' => 'form-control', 'id' => 'code', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('occupation', '職種') }}</div>
                    {{ Form::select('occupation', App\Occupation::selectlist(), old('occupation'), ['class' => 'form-control', 'id' => 'code', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('language', '言語') }}</div>
                    {{ Form::select('language', App\Language::selectlist(), old('language'), ['class' => 'form-control', 'id' => 'code', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                <div class="font-weight-bold">{{ Form::label('about_myself', '自己PR') }}</div>
                    {{ Form::textarea('about_myself', old('about_myself'), ['class' => 'form-control']) }}
                </div>

                <div class="text-center">{{ Form::submit('新規登録', ['class' => 'btn btn-secondary mt-2']) }}</div>
            
            </form>

        </div>
    </div>

@endsection
