@extends('main')

@section('content')
    <div class="row">

        <div class="box">
            @foreach($articles as $article)
                <article>
                    <h2></h2>
                </article>
                <div class="col-lg-12 text-center">
                    <h2>{{$article->title}}
                        <br>
                        <small>{{$article->created_at}}</small>
                    </h2>
                </div>
                <div class="col-lg-12">
                        {!! $article->content !!}
                </div>
                <div class="col-lg-12 text-center">
                    <a href="/article/{{$article->id}}" class="btn btn-default btn-lg">Read more</a>
                    <hr>
                </div>
            @endforeach


        </div>
    </div>


@endsection

