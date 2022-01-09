@extends('layouts.app')

@section('content')

    <div class="text-center mt-4">
        <h2>検索</h2>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-md-6 offset-md-3">

            <form method="get" action="/search" class="search-form">
                
            @csrf

                <div class="form-group">
                    <div class="font-weight-bold"><label for="work_location">勤務地</label></div>
                    <select class="form-control" name="work_location">                          
                        @foreach($work_locations as $key => $work_location)
                            <option value="{{ $key }}" @if( (int)old('work_location') === $key ) selected @endif>{{ $work_location }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <div class="font-weight-bold"><label for="occupation">職種</label></div>
                    <select class="form-control" name="occupation">                          
                        @foreach($occupations as $key => $occupation)
                            <option value="{{ $key }}" @if( (int)old('occupation') === $key ) selected @endif>{{ $occupation }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="language">言語</label></div>
                    <select class="form-control" name="language">                          
                        @foreach($languages as $key => $language)
                            <option value="{{ $key }}" @if( (int)old('language') === $key ) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-md-4 font-weight-bold"><label for="unit_price">月額単価</label></div>
                    
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="300000" {{ old('unit_price') === 300000 ? 'checked' : '' }}>300,000~
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="400000" {{ old('unit_price') === 400000 ? 'checked' : '' }}>400,000~
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="500000" {{ old('unit_price') === 500000 ? 'checked' : '' }}>500,000~
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="600000" {{ old('unit_price') === 600000 ? 'checked' : '' }}>600,000~
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="700000" {{ old('unit_price') === 700000 ? 'checked' : '' }}>700,000~
                        </div>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-6 mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="unit_price" name="unit_price" value="800000" {{ old('unit_price') === 800000 ? 'checked' : '' }}>800,000~
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="font-weight-bold"><label for="language">フリーワード</label></div>
                        <input type="text" name="keyword" value="{{ $search_keyword }}" class="form-control" placeholder="フリーワードを入力ください">
                    </div>
                </div>

                <div class="col-md-6 offset-md-3 text-center"><input type="submit" class="btn btn-secondary mt-2" value="検索"></div>
                    
            </form>

        </div>
    </div>

@endsection
