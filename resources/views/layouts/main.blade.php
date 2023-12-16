<!doctype html>
<html lang="{{ config('app.locale') }}">
    
    @include('layouts._head')

    <body>
        <div id="page-container" class="sidebar-o sidebar-dark side-scroll page-header-fixed main-content-narrow">

            <!-- Main Container -->
            <main id="main-container">

                @yield('content')

            </main>
            <!-- END Main Container -->

            {{-- @include('backoffice.layouts._footer') --}}

        </div>
        <!-- END Page Container -->

        @include('layouts._scripts')

    </body>
</html>
