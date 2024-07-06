@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <h1>Contact Us</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>Get in Touch</h2>
            <p>Feel free to contact us with any questions or inquiries.</p>

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="fullname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-6">
            <h2>Our Location</h2>
            <p>Visit us at:</p>
            <p>123 Street, City, Country</p>

            <h2>Contact Information</h2>
            <p><strong>Email:</strong> <a href="mailto:contact@example.com">contact@example.com</a></p>
            <p><strong>Phone:</strong> +123456789</p>

            <div id="map" style="height: 300px; border: 1px solid #ccc;"></div>
            <!-- Replace with your Google Maps embed code or JavaScript API integration -->
        </div>
    </div>
</div>

<script>
    // JavaScript for Google Maps integration
    // Replace with your Google Maps API code or embed code
</script>
@endsection
