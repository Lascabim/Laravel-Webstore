@props(['src', 'h1', 'p', 'p2' => null])

<div class="w-status-div">
    <img src="{{$src}}" alt="">
    <h1>{{$h1}}</h1>
    
    @if ($p2) 
        <p>{{ $p2 }}</p> 
    @endif
    
    <p>{{$p}}</p>
</div>