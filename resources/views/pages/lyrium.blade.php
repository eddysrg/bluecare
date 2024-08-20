@extends('home.index')

@section('content')
<div class="w-full">
    <img class="w-full block" src="{{asset('images/lyrium_site.png')}}" alt="">
</div>

<div class="px-8 py-20 md:px-20 md:py-32">
    <div class="px-0 md:px-24">

        <p class="text-[#091E3E] leading-normal text-lg md:text-xl">
            Lyrium es el asistente de Inteligencia Avanzada ubicado en la nube, a través de el, creamos una nueva
            experiencia
            para ofrecer a los clientes una forma más intuitiva de interactuar con las herramientas que su empresa
            necesita.
        </p>

        <h2 class="mt-20 mb-10 text-4xl text-[#0A125E] text-center">Conoce nuestra suite</h2>

        <div>
            <img src="{{asset('images/lyrium_main_image.png')}}" alt="Lyrium Image">
        </div>
    </div>
</div>
@endsection