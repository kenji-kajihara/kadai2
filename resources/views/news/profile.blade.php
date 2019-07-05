@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="col-md-10">プロフィール一覧</div>
        </div>
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                <div class="post">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="date">
                                {{ $post->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="title">
                                {{ str_limit($post->name, 20)}}
                            </div>
                            <div class="body mt-3">
                                性別 : {{ $post->gender}}
                            </div>
                            <div class="body mt-3">
                                趣味 : {{ str_limit($post->hobby, 50)}}
                            </div>
                        </div>
                        <div class="body col-md-6">
                                {{ str_limit($post->introduction, 150)}}
                         </div>
                    </div>
                </div>
                <hr color="c0c0c0">
                @endforeach
            </div>
        </div>
    </div>