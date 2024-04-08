    @extends('layout.app')

    {{-- Customize layout sections --}}
    @section ('subtitle', 'Welcome')
    @section ('content _header_title', 'Home')
    @section ('content_header _subtitle', 'Welcome')

    
    {{-- Content body: main page content --}}
    @section ('content_body')
        <p>
            Welcome to this beautiful admin panel.
        </p>
    @stop

    {{-- Push extra CSS --}}
    @push('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @endpush

    {{-- Push extra scripts --}}

    @push('js')
        <script>console.log("Hi, i'm using the laravel-AdminLTE package!"); </script>
    @endpush







    {{-- @extends('layout.app') --}}

    {{-- Customize layout sections --}}
    {{-- @section ('subtitle', 'Welcome') --}}
    {{-- @section ('content _header_title', 'Home')
    @section ('content_header _subtitle', 'Welcome') --}}

    {{-- Content body: main page content --}}
    {{-- @section ('content_body')
        <p>
            Welcome to this beautiful admin panel.
        </p>
    @stop --}}

    {{-- Push extra CSS --}}
    {{-- @push('css') --}}
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    {{-- @endpush --}}

    {{-- Push extra scripts --}}

    {{-- @push('js')
        <script>console.log("Hi, i'm using the laravel-AdminLTE package!"); </script>
        
    @endpush --}}