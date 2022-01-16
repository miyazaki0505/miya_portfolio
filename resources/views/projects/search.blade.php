@extends('layouts.app')

@section('content')

    <div class="text-center mt-4">
        <h2>検索結果</h2>

        @if(isset($search_work_location) && $search_work_location != 0)
            @foreach($work_locations as $key => $work_location)
                @foreach($projects as $project)
                    @if($key == $project->work_location)
                        <span>勤務地：{{$work_location}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

        @if(isset($search_occupation) && $search_occupation != 0)
            @foreach($occupations as $key => $occupation)
                @foreach($projects as $project)
                    @if($key == $project->occupation)    
                        <span class="ml-4">職種：{{$occupation}}</span>
                        @php
                            break;
                        @endphp
                    @endif 
                @endforeach
            @endforeach
        @endif

        @if(isset($search_language) && $search_language != 0)
            @foreach($languages as $key => $language)
                @foreach($projects as $project)
                    @if($key == $project->language)
                        <span class="ml-4">言語：{{$language}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

        @if(isset($search_unit_price))
            <span class="ml-4">月額報酬：￥{{ number_format($search_unit_price) }}〜</span>
        @endif

                
        @if(isset($search_keyword))
            <span class="ml-4">フリーワード：{{$search_keyword}}</span>
        @endif

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

    <div class="pagination justify-content-center">{{ $projects->appends(request()->query())->links() }}</div>

    @if($projects->isEmpty())
        <div class="text-center mt-5">
            <p class="mt-4">{{ "現在、検索条件と一致する案件はございませんでした。" }}</p>
        </div>
    @endif

    <div class="row justify-content-center mb-3">
        <a class="text-decoration-none mt-2" href="{{ config('app.url'). '/searchInput' }}" name="back" style="color: gray;">検索画面へ戻る</a>
    </div>

@endsection
