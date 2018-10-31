<!-- Navbar -->
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="/"><b>MongoDB</b> Porfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style='border: none !important; outline: none !important;'>
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link @if(Request::is('/')) active @endif" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link @if(! Request::is('/')) active @endif" href="{{ url('/report') }}">Report <span class="sr-only">(current)</span> </a>
            </div>
        </div>
    </nav>
</div>