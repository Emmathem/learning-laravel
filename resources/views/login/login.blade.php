<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 10/31/2017
 */
?>
@extends('app')

@section('content')
<div style="text-align: center;">
    <h3>Administrator Login Page:</h3>
    <span>
        @if(count($people))
        <h5>People I Like</h5>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
                @endforeach
        </ul>
            @endif
    </span>
</div>

@stop


@section('footer')

@stop