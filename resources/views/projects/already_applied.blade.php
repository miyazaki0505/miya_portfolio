@extends('layouts.app')

@section('content')

    <div class="text-center mt-4">
        <p class="mt-4">こちらはすでに応募いただいた案件です！</p>
    </div>

    <div class="text-center mt-4">
        <div class="return col-xs-3"><a class="btn btn-secondary m-4" href="{{ config('app.url'). "/" }}" type="submit" style="color:white;">案件一覧に戻る</a></div>
    </div>

@endsection
