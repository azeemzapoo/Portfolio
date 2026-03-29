@extends('layouts.app')


@section('content')
<div class="contact-container">
    <h1>Contact Us</h1>

    <form method="POST" action="#">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Your message" required></textarea>
        </div>

        <button type="submit">Send Message</button>
    </form>
</div>
@endsection
