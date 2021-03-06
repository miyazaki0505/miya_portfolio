@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-secondary mt-3">
        <div class="text-center text-white">
            <h1>Tsunagu</h1>
            <p>エンジニアと案件を繋ぐお手伝い</p>
        </div>
    </div>

    @foreach($projects as $project)
    
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

    @endforeach

    <div class="pagination justify-content-center">{{ $projects->links() }}</div>

@endsection
