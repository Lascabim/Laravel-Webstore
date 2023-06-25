@props(['src', 'title', 'desc1', 'desc2', 'desc3', 'buttonname'])

<section id="banner" class="section-m1" style="background-image: url('{{$src}}')">
    <h4>{{$title}}</h4>
    <h2>{{$desc1}} <span>{{$desc2}}</span> {{$desc3}}</h2>
    <a href="{{ route('sobre') }}"><button class="normal">{{$buttonname}}</button></a>
</section>