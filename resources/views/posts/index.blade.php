<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 11/15/2017
 */
?>
@extends('layouts.default.default')
@section('content')
<section class = "post-section">
    <div class = "inner-post">
        <div class="col-md-5 col-md-offset-3">
            @include('layouts.message')
        </div>
        <div class="clearfix"></div>
        <h2>Post here</h2>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                <small>Post written on: {{ $post->created_at }}</small>
            @endforeach

            {{--{{  $post->links() }}--}}
            @else
        <p>No Post Available</p>

            @endif
    </div>
</section>
@stop