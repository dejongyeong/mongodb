@extends('layouts.master')

@section('main')

    <section id='container'>

        <!-- Navigation -->
        @include('partials.nav')

        <!-- Main Content -->
        <section id='main-content'>
            <section class='wrapper app-min-height'>
                
                <!-- Include errors and messages -->

                @yield('content')
            
            </section>
        </section>

        <!-- Footer -->
        @include('partials.footer')

    </section>
    
@endsection