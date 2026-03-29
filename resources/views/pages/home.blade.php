@extends('layouts.app')

@section('content')
    <div class="hero">
        <p class="intro">HELLO, I'M</p>

        <h1 class="name">Azeem</h1>

        <p class="description">
            I am a Computer Science Student, This is my personal portfolio site,I build it for learning php and laravel.
        </p>

        <div class="buttons">
            <a href="{{ route('portfolio') }}" class="btn primary">
                View My Work →
            </a>

            <a href="{{ route('contact') }}" class="btn secondary">
                Get In Touch
            </a>
        </div>
    </div>

@endsection