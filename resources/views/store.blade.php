<x-app-layout>
    <x-hero src="/assets/img/hero.png" h1="AVAC" h2="TASM" h4="Bem-Vindo" p="Orçamento personalizado"/>

    <section id="product1" class="section-p1">
        <h2>Produtos Disponíveis</h2>
        <p>Designs Modernos e Promoções de Verão</p>

        <div class="products-filter">
            <a href="{{ route('lojaSearch', 1) }}"><button class="green">Preço Decrescente</button></a>
            <a href="{{ route('lojaSearch', 2) }}"><button class="green">Preço Ascendente</button></a>
            <a href="{{ route('lojaSearch', 3) }}"><button class="green">Marca A-Z</button></a>
            <a href="{{ route('lojaSearch', 4) }}"><button class="green">Marca Z-A</button></a>
        </div>

        <div class="pro-container">
            @foreach ($products as $product)
                <x-products src="{{$product->image_path}}" brand="{{$product->brand}}" gama="{{$product->gama}}" name="{{$product->title}}" numstars="{{$product->numstars}}" price="{{$product->price}}"/>
            @endforeach
        </div>
    </section>
    
    <x-footerc/>
</x-app-layout>