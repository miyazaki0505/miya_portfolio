@extends('layouts.app')

@section('content')

    @include('users.tabs')

    @if($projects->isNotEmpty())
        <div class="text-center mt-4">
            <h2 style="color: red;">いいね</h2>
            <p>{{ $user_last_name. "さんのいいねした案件はこちらです。" }}</p>
        </div>

        @foreach($projects as $project)

        <div class="card m-5">
            <div class="m-4 row">
                <div class="col-md-10">

                    <h4>
                        @foreach($languages as $key => $language)
                            @if($key === $project->language)
                                【{{ $language }}】
                                @php
                                    break;
                                @endphp
                            @endif
                        @endforeach
                        {{ $project->project_name }}
                    </h4>
                    <div class="m-1 pt-4 row">
                        <div class="col-sx-12">
                            @foreach($work_locations as $key => $work_location)
                                @if($key === $project->work_location)
                                <div class="ml-4">勤務地：{{ $work_location }}</div>
                                    @php
                                        break;
                                    @endphp
                                @endif
                            @endforeach
                        </div>

                        <div class="col-sx-12 ml-4">月額報酬：￥{{ number_format($project->unit_price) }}〜</div>
                    </div>     
                </div>
                
                <div class="text-right d-flex align-items-center col-md-2">
                    <a href="{{ config('app.url'). "/showDetail/". $project->id }}" type="button" class="btn btn-outline-secondary ml-4">詳細</a>
                </div>

            </div>
        </div>

        @endforeach

        <div class="pagination justify-content-center">{{ $projects->links() }}</div>
        
    @else
    
        <div class="text-center mt-4">
            <h2 style="color: red;">いいね</h2>
            <p class="mt-4">現在いいねされた案件はありません。</p>
            <p>気になる案件がございましたらぜひいいねしてみてください！</p>
        </div>
    @endif

@endsection
