@props(['src', 'brand', 'gama', 'name', 'numstars', 'price'])

<div class="pro">
    <img src="{{$src}}" alt="PRODUCT IMAGE">

    <div class="des">
      <span>{{$brand}}</span>

      <h5>
        {{$gama}}
        @foreach(explode(';',$name) as $row)
         <br>{{ $row }}
        @endforeach
      </h5>

      <div style="margin-top: 10px;" class="star">
        @for ($i = 0; $i < $numstars; $i++)
            <i class="fas fa-star"></i>
        @endfor
      </div>
      <h4>{{$price}}€</h4>
    </div>

    <a target="_blank" href="https://api.whatsapp.com/send/?phone=351916648255&text=Olá, gostaria de falar sobre um orçamento. O produto é da {{$gama}} e está neste momento a {{$price}}€&type=phone_number&app_absent=0"><i class="fa-solid fa-cart-shopping cart"></i></a>
</div>