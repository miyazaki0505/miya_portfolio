@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h3 class="login_title text-center d-inline-block mt-3">新規ユーザー登録</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            <form method="post" action="/signup" class="register-form">

                @csrf
            
                <div class="font-weight-bold"><label for="name">お名前</label></div>
                <div class="form-group d-flex justify-content-sm-start">
                    <div class="m-2">姓　</div> 
                    <input typy="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
                    
                    <div class="m-2">名　</div> 
                    <input typy="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
                </div>

                <div class="font-weight-bold"><label for="ruby">ふりがな</label></div>
                <div class="form-group d-flex justify-content-start">
                    <div class="m-2">せい　</div>
                    <input typy="text" name="last_name_ruby" value="{{ old('last_name_ruby') }}" class="form-control" style="width:50%;">
                
                    <div class="m-2">めい　</div>
                    <input typy="text" name="first_name_ruby" value="{{ old('first_name_ruby') }}" class="form-control" style="width:50%;">
                </div>

                <div class="font-weight-bold"><label for="birthday">生年月日</label></div>
                <div class="form-group d-flex justify-content-start">
                    <input typy="text" name="birth_year" value="{{ old('birth_year') }}" class="form-control" style="width:50%">
                    <div class="m-2">年</div> 
                    <input typy="text" name="birth_month" value="{{ old('birth_month') }}" class="form-control" style="width:50%">
                    <div class="m-2">月</div> 
                    <input typy="text" name="birth_day" value="{{ old('birth_day') }}" class="form-control" style="width:50%">
                    <div class="m-2">日</div>
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="email">メールアドレス</label></div>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="password">パスワード</label></div>
                    <input type="password" name ="password" class="form-control">
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="password_confirmation">パスワード確認</label></div>
                    <input type="password" name ="password_confirmation" class="form-control">
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="work_location">希望勤務地</label></div>
                    <select class="form-control" name="work_location">                          
                        @foreach(config('work_location') as $key => $work_location)
                            <option value="{{ $key }}" @if( (int)old('work_location') === $key ) selected @endif>{{ $work_location }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="occupation">職種</label></div>
                    <select class="form-control" name="occupation">                          
                        @foreach(config('occupation') as $key => $occupation)
                            <option value="{{ $key }}" @if( (int)old('occupation') === $key ) selected @endif>{{ $occupation }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="language">言語</label></div>
                    <select class="form-control" name="language">                          
                        @foreach(config('language') as $key => $language)
                            <option value="{{ $key }}" @if( (int)old('language') === $key ) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="about_myself">自己PR</label></div>
                    <textarea name="about_myself" rows="10" cols="60" class="form-control">{{ old('about_myself') }}</textarea>    
                </div>

                <div class="text-center"><input type="submit" class="btn btn-secondary mt-2" value="新規登録"></div>
            
            </form>

        </div>
    </div>

@endsection
