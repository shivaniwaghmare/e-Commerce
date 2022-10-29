<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')                
    </head>
    <body>
       
    <header class="section-header">
        @include('layouts.headers')                
    </header> <!-- section-header.// -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Products</h3>
            </header><!-- sect-heading -->
            <div class="row">
               
                @yield('content')
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top bg">
        @include('layouts.footer')
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
            
    </body>
</html>