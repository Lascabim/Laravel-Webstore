@props(['src', 'brand', 'name', 'numstars', 'price',])

<div class="pro">
    <img src="{{$src}}" alt="PRODUCT IMAGE">

    <div class="des">
      <h5>Reviews:</h5>
      <div class="star">
        @for ($i = 0; $i < 5; $i++)
            <i class="fas fa-star"></i>
        @endfor
      </div>
    </div>
</div>