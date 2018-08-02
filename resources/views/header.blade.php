
<h3>Myapp</h3>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/">Home </a>
        @auth
        <div class="dropdown">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{{Auth::user()->name}}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            
        </div>
        </div>
        @endauth
    </nav>

<div>


    
