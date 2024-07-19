<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    @include('layouts.partials.header')
</header>

<main class="main">

    <!-- Hero Section -->
    @include('layouts.partials.bg')
    <!-- /Hero Section -->

    <!-- About Section -->
{{--    @include('layouts.partials.about')--}}
   <!-- /About Section -->

    <!-- Clients Section -->
    @include('layouts.partials.clients')
    <!-- /Clients Section -->

    <!-- Features Section -->
    @include('layouts.partials.features')
    <!-- /Features Section -->

    <!-- Services Section -->
    @include('layouts.partials.service-section')
    <!-- /Services Section -->

    <!-- Call To Action Section -->
    @include('layouts.partials.call-to-action')
    <!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    @include('layouts.partials.portfolio')
    <!-- /Portfolio Section -->

    <!-- Stats Section -->
    @include('layouts.partials.starts')
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    @include('layouts.partials.testimonials')
    <!-- /Testimonials Section -->

    <!-- Team Section -->
    @include('layouts.partials.team')
    <!-- /Team Section -->

    <!-- Contact Section -->
    @include('layouts.partials.contact')
    <!-- /Contact Section -->

</main>

<footer id="footer" class="footer dark-background">
    @include('layouts.partials.footer')
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

@include('layouts.partials.js')
</body>

</html>
