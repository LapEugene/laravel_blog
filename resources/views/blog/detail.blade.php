@extends('main')

@section('content')

    {{--{{dd($article)}}--}}
    <div class="row">
        <div class="box">
            <div class="col-lg-12">

                <hr>
                <h2 class="text-center">{{$article->name}}
                    <br>
                    <small>{{$article->created_at}}</small>
                </h2>

                <br>
                <hr>
                <div class="clearfix"></div>
                <img alt="" src="" id="imgInArticle" class="pull-left">
                <p>{!! $article->content !!}</p>
                <hr>
            </div>
        </div>
    </div>

@endsection
