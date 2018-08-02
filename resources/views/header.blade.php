
<h3>Myapp</h3>

@auth
    {{{Auth::user()->name}}}
    <a href="{{ url('/logout') }}"> logout </a>
@endauth