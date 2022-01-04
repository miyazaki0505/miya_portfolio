@extends('layouts.app')

@section('content')

    <div class="text-right">
        <div class="btn-group">
            <div class="btn-toolbar pr-5" role="toolbar">
                <div class="matching mr-3"><a href="{{ config('app.url'). '/match' }}" type="button" class="btn btn-outline-danger">マッチング</a></div>
                <div class="like mr-3"><a href="#" type="button" class="btn btn-outline-danger">いいね</a></div>
                <div class="history mr-3"><a href="#" type="button" class="btn btn-outline-danger">応募履歴</a></div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <h2>マッチング</h2>
        <p>{{ Auth::user()->last_name."さんのご希望の条件と一致する案件はこちらです。" }}</p>
    </div>

    @foreach($projects as $project)

        @foreach($users as $user)

            @if( $user->language == $project->language && $user->work_location == $project->work_location && $user->occupation == $project->occupation)

            <div class="card m-5">
                <div class="m-4 row">
                    <div class="col-10">

                        <h4>
                            @foreach($languages as $key => $language)
                                @if($key == $project->language)
                                    【{{ $language }}】
                                    @php
                                        break;
                                    @endphp
                                @endif
                            @endforeach
                            {{ $project->project_name }}
                        </h4>
                        <div class="row m-1 pt-4">
                            <div class="col-xs-12">
                                @foreach($work_locations as $key => $work_location)
                                    @if($key == $project->work_location)
                                    <div class="ml-4">勤務地：{{ $work_location }}</div>
                                        @php
                                            break;
                                        @endphp
                                    @endif
                                @endforeach
                            </div>

                            <div class="col-xs-12 ml-4">月額報酬：￥{{ number_format($project->unit_price) }}〜</div>
                        </div>
                    </div>

                    <div class="text-right d-flex align-items-center">
                        <div class="col-sm-12"><a href="{{ config('app.url'). "/showDetail/". $project->id }}" type="button" class="btn btn-outline-secondary ml-4">詳細</a></div>
                    </div>
        
                </div>
            </div>

            @endif

        @endforeach

    @endforeach

    <div class="pagination justify-content-center">{{ $projects->links() }}</div>

@endsection
