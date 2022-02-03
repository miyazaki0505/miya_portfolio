@extends('layouts.app')

@section('content')

    <div class="text-center mt-4">
        <h2>応募完了</h2>
        <p class="mt-4">応募が完了しました！</p>
    </div>

    <div class="text-center mt-4">
        <div class="return col-xs-3"><a class="btn btn-secondary m-4" href="{{ config('app.url'). "/" }}" type="submit" style="color:white;">案件一覧に戻る</a></div>
    </div>

@endsection
