@props(['src', 'h1' => null, 'h2' => null, 'h4' => null, 'p' => null, 'button' => null])

<section id="hero" style="background-image: url('{{$src}}')">

    @if ($h4) 
        <h4>{{ $h4 }}</h4> 
    @endif

    @if ($h2 and $h1) 
        <h2>{{ $h2 }}<span>{{ $h1 }}</span></h2>       
    @endif

    @if ($p) 
        <p style="text-align:center;width:40%;">{{ $p }}</p> 
    @endif

    @if ($button) 
        <a href="{{ route('loja') }}"><button>{{$button}}</button></a>
    @endif
</section>