<x-app-layout>
    <x-hero src="/assets/img/hero.png" h1="AVAC" h2="TASM" h4="Bem-Vindo" p="Orçamento personalizado" button="Ver Loja"/>
    <x-features/>

    <x-banner src="/assets/img/banner/teambanner.jpg" title="Conheça a nossa Equipa" desc1="Formada por " desc2="Profissionais" desc3="" buttonname="Explorar"/>

    <x-sm-banner/>
    <x-sm-banner2/>
    
    <section id="product1" class="section-p1 section-m1">
        <h2>Marcas Utilizadas</h2>
        <p>Utilizamos as melhores marcas do mercado</p>

        <div class="pro-container">
            @foreach ($newbrands as $brand)
                <x-newbrands src="{{$brand->image_path}}" brand="{{$brand->brand}}" name="{{$brand->title}}" numstars="{{$brand->numstars}}"/>
            @endforeach
        </div>
    </section>

    <x-footerc/>
</x-app-layout>