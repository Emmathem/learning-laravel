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
        <h2>Post here</h2>
        @if(count($posts) > 1)
            @foreach($posts as $post)
                    <h3>{{$post->title}}</h3>
                <small>Post written on: {{ $post->created_at }}</small>
                @endforeach
            @else
        <p>No Post Available</p>

            @endif
    </div>
</section>
@stop