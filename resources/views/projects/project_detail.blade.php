@extends('layouts.app')

@section('content')

<div class="card rounded">
    <div class="p-5">

        <h2 class="mb-5">
            @foreach($languages as $key => $language)
                @if($key == $project->language)
                    【{{ $language }}】
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
            {{ $project->project_name }}
        </h2>

        <p><span class="font-weight-bold mr-5">勤務地　</span>
            @foreach($work_locations as $key => $work_location)
                @if($key == $project->work_location)
                <span class="ml-4">{{ $work_location }}</span>
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </p>

        <p><span class="font-weight-bold mr-5">月額報酬　</span><span class="ml-3">￥{{ number_format($project->unit_price) }}〜</span></p>

        <p><span class="font-weight-bold mr-5">言語　　</span>
            @foreach($languages as $key => $language)
                @if($key == $project->language)
                    <span class="ml-4">{{ $language }}</span>
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </p>

        <p><span class="font-weight-bold mr-5">職種　　</span>
            @foreach($occupations as $key => $occupation)
                @if($key == $project->occupation)
                    <span class="ml-4">{{ $occupation }}</span>
                    @php
                        break;
                    @endphp
                @endif
            @endforeach
        </p>

        <p class="font-weight-bold mr-5">職務内容</p><p>{{ $project->work_content }}</p>


        <p><span class="font-weight-bold mr-5">求めるスキル</span>
            @foreach($skills as $skill)
                @if($project->id == $skill->project_id)
                    <span><li>{{ $skill->skill }}</li></span>
                @endif
            @endforeach
        </p>

        <p><span class="font-weight-bold mr-5">その他募集要項</span>
            @foreach($other_requirements as $other_requirement)
                @if($project->id == $other_requirement->project_id)
                    <span><li>{{ $other_requirement->other_requirement }}</li></span>
                @endif
            @endforeach
        </p>

        <p><span class="font-weight-bold mr-5">企業</span>
            <span class="ml-1">{{ $company->company_name }}</span>          
        </p>

    </div>
</div>

<div class="row justify-content-center">
    <div class="btn-group">
        <div class="btn-toolbar" role="toolbar">
            @if (Auth::check())

                @if (Auth::user()->isLiking($project->id))

                    <form method="post" action="{{ config('app.url'). "/showDetail/". $project->id. "/unlike" }}" class="like-form">
                        @csrf
                        <div class="unlike col-xs-3"><input type="submit" class="btn btn-danger m-4" value="いいねを外す"></div>
                    </form>

                @else

                    <form method="post" action="{{ config('app.url'). "/showDetail/". $project->id. "/like" }}" class="like-form">
                        @csrf
                        <div class="like col-xs-3"><input type="submit" class="btn btn-danger m-4" value="いいね"></div>
                    </form>

                @endif

            @else

                <form method="get" action="{{ config('app.url'). '/showLogin' }}" class="like-form">
                    @csrf
                    <div class="like col-xs-3"><input type="submit" class="btn btn-danger m-4" value="いいね"></div>
                </form>

            @endif

            @if (Auth::check())

                @if(Auth::user()->isApplying($project->id))
                
                    <form method="get" action="{{ config('app.url'). "/showDetail/". $project->id. "/already" }}" class="application-form">
                        @csrf
                        <div class="apply col-xs-3"><input type="submit" class="btn btn-secondary m-4" value="応募"></div>
                    </form>

                @else

                    <form method="get" action="{{ config('app.url'). "/showDetail/". $project->id. "/applyConfirm" }}" class="application-form">
                        @csrf
                        <div class="apply col-xs-3"><input type="submit" class="btn btn-secondary m-4" value="応募"></div>
                    </form>

                @endif

            @else

                <form method="get" action="{{ config('app.url'). '/showLogin' }}" class="application-form">
                    @csrf
                    <div class="apply col-xs-3"><input type="submit" class="btn btn-secondary m-4" value="応募"></div>
                </form>

            @endif

            <div class="return col-xs-3"><a class="btn btn-secondary m-4" type="submit" style="color:white;" onclick="history.back(-1)">戻る</a></div>
        </div>
    </div>
</div>

@endsection
