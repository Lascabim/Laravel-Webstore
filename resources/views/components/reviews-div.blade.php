@props(['src', 'href', 'h1', 'p'])

<div class="w-reviews-div">    
    <div style="display: flex; align-items:center; justify-content:space-between">
        <img style="border-radius: 100%" src="{{$src}}" alt="REVIEWER">   

        <a target="_blank" href="{{$href}}">
            <div style="display:flex; flex-direction:column; align-items:flex-start; justify-content:center;">
                <img style="width:175px;" src="/assets/img/reviews/5stars.png" alt="5 STARS">
                <h1 style="margin-left:10px; font-size:15px;">{{$h1}}</h1>
            </div>
        </a>
    </div>
    <p><span style="font-weight:bold; font-size:25px;">"</span>{{$p}}<span style="font-weight:bold; font-size:25px;">"</span></p>
</div>