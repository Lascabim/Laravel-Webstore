<x-app-layout>
    <x-hero src="/assets/img/hero.png" h1="AVAC" h2="TASM" h4="SOBRE NÓS" p=""/>

    <div>
        <h2 class="section-m1" style="text-align: center;">Reviews</h2>

        <div class="w-status-container section-p1">
            <x-about-div src="/assets/img/reviews/clientes.png" h1="+ 100" p="CLIENTES"/>
            <x-about-div src="/assets/img/reviews/calendario.png" h1="+ 5" p="ANOS DE EXPERIÊNCIA"/>
            <x-about-div src="/assets/img/reviews/barbeiro.png" h1="4" p="EQUIPA"/>
        </div>
        
        <div class="w-reviews-container section-p1">
            <x-reviews-div src="/assets/img/reviews/miguel.png" href="https://goo.gl/maps/w7hRbBZA9QNXfmdaA" h1="HÁ 1 SEMANA" p="O Tiago e a sua equipa instalaram um sistema de ar condicionado na minha moradia. Desde o dia 1 que mostraram que sabiam do que estavam a falar, foram sempre assíduos e pontais, abertos a perguntas e com o cuidado da solução ficar feita à medida do que eu queria. Agora temos um sistema Daikin espectacular que mantém a temperatura da casa (2 andares com pé direito alto) sempre perfeita de verão e inverno. Recomendado!"/>
            <x-reviews-div src="/assets/img/reviews/rui.png" href="https://goo.gl/maps/Lxhe6g7A4F88TKMr6" h1="HÁ 7 MESES" p="Super prestável, simpático perfeccionista, profissional."/>
            <x-reviews-div src="/assets/img/reviews/adriana.png" href="https://goo.gl/maps/xhG8kw3ynMMcAMGbA" h1="HÁ 2 ANOS" p="Nada a dizer, simplesmente 5 estrelas!"/>
        </div>

        <div class="section-m1">
            <h2  class="section-p1" style="text-align: center;">Informações</h2>
            
            <div class="w-status-container section-p1 section-m1">
                <x-about-div src="/assets/img/reviews/phone.png" h1="CONTACTO" p="916648255"/>
                <x-about-div src="/assets/img/reviews/location.png" h1="ENDEREÇO" p="Rua das Pereiras, Atães, Jovim, Gon, 4510-112"/>
                <x-about-div src="/assets/img/reviews/calendario.png" h1="HORÁRIO" p="09:00 - 18:30"/>
            </div>


            <div class="w-maps-container section-p1 section-m1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120.26072239515912!2d-8.529208010406522!3d41.113005980056236!2m3!1f18.89884080872914!2f45!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0xd247d6d35130ca3%3A0x5c197f2b9b4437ec!2sTASMAVAC%20-%20Instala%C3%A7%C3%A3o%20de%20Ar%20condicionado%20e%20sistemas%20AQS!5e1!3m2!1spt-PT!2spt!4v1687693510342!5m2!1spt-PT!2spt" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <x-footerc/>
    <div>
</x-app-layout>