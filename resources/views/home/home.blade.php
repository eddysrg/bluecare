@extends('home.index')

@section('content')
<div class="grid grid-cols-1">
    <div class="col-start-1 col-end-2 row-start-1 row-end-2">
        <img class="w-full h-full" src="{{asset('images/hero_image.jpg')}}" alt="Banner Inicio Imagen">
    </div>


    <div class="col-start-1 col-end-2 row-start-1 row-end-2 bg-[#002089] opacity-40"></div>

    <div
        class="flex flex-col items-start md:items-end text-white col-start-1 col-end-2 row-start-1 row-end-2 z-10 self-center justify-self-start-start md:justify-self-end px-8 md:px-40 py-10 md:py-0">
        <div class="md:text-right md:space-y-9">
            <p class="mb-5 md:mb-0 lg:text-2xl drop-shadow-lg">El mejor Expediente Clínico Electrónico</p>
            <h1 class="text-4xl lg:text-7xl drop-shadow-lg">HealthCare System</h1>
            <span class="block text-5xl lg:text-8xl uppercase drop-shadow-lg mt-4 md:mt-0">Nivel 1</span>
        </div>

        <button class="text-xs md:text-base justify-end px-8 py-3 bg-[#0A125E] rounded-full mt-10">Leer más</button>
    </div>
</div>

<div class="bg-[#0144E8]">
    <p class="text-white uppercase text-center py-10 text-xl lg:text-5xl px-8 leading-relaxed">
        Healthcare System tiene por objetivo optimizar la atención que se brinda en unidades médicas y centros de salud.
    </p>
</div>

<div class="py-9 px-8">
    <h2 class="text-[#0A125E] uppercase text-3xl text-center font-medium mb-8">Nuestras Soluciones</h2>

    <div class=" flex flex-col-reverse md:flex-row items-center md:justify-evenly gap-8 md:gap-20">
        <ul class="text-[#0A125E] space-y-3 font-medium md:text-lg">
            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Expediente Clínico Electrónico HEALTH CARE
            </li>

            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Desarrollo de aplicaciones
            </li>

            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Business Intelligence and Analitycs
            </li>

            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Servicios en nube
            </li>

            <li class="
                before:content-['']
                before:aspect-square 
                before:w-2 
                before:h-2 
                before:bg-gradient-to-b 
                before:from-[#0144E8] 
                before:to-[#0A125E] 
                before:inline-block 
                before:mr-1 
                before:rounded-full">
                Almacenamiento y continuidad de negocio
            </li>

            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Diseño administrativo y mantenimiento
            </li>

            <li class="
            before:content-['']
            before:aspect-square 
            before:w-2 
            before:h-2 
            before:bg-gradient-to-b 
            before:from-[#0144E8] 
            before:to-[#0A125E] 
            before:inline-block 
            before:mr-1 
            before:rounded-full">
                Soporte y servicio de Mesa de ayuda
            </li>
        </ul>

        <div class="grid grid-cols-[.2fr_.7fr_.1fr] grid-rows-[.1fr_.8fr_.5fr] sm:w-2/4 xl:w-auto">
            <div class="col-start-1 col-end-3 row-start-2 row-end-4 order-1">
                <img class="w-full h-full " src="{{asset('images/soluciones_imagen.png')}}" alt="Soluciones Imagen">
            </div>

            <div class="col-start-2 col-end-4 row-start-1 row-end-3">
                <img class=" w-full h-full" src="{{asset('images/fondo_soluciones_imagen.png')}}"
                    alt="Soluciones Imagen">
            </div>
        </div>
    </div>
</div>

<div>
    <div class="grid md:grid-cols-2">
        <div class="bg-[#0144E8] text-white p-6">
            <p class="
            before:content-['']
            before:aspect-square
            before:w-10
            before:h-10
            before:bg-[url('../../public/images/comas.png')] 
            before:bg-contain
            before:bg-no-repeat
            before:bg-center
            before:inline-block 
            before:ml-8
            before:mr-4">
                La plataforma digital del expediente clínico, hoy en día permite un manejo más eficiente de la
                información
                que se genera a partir de la atención a los pacientes, en las unidades de salud.
            </p>
        </div>

        <div class="bg-[#0A125E] text-white p-6">
            <p class="
            before:content-['']
            before:aspect-square
            before:w-10
            before:h-10
            before:bg-[url('../../public/images/comas.png')] 
            before:bg-contain
            before:bg-no-repeat
            before:bg-center
            before:inline-block 
            before:ml-8
            before:mr-4">
                El HealthCare&reg; es una herramienta práctica para el manejo del Expediente Clínico de forma digital,
                sabiéndolo utilizar correctamente. Los beneficios: rapidez, disminuye consumo de papel, tiene mayores
                herramientas de llenado.

                “
            </p>
        </div>
    </div>

    <div class="py-4 flex justify-center space-x-6">
        <div class="w-3 h-3 rounded-full bg-[#0A125E] aspect-square"></div>
        <div class="w-3 h-3 rounded-full bg-[#0A125E] aspect-square"></div>
        <div class="w-3 h-3 rounded-full bg-[#0A125E] aspect-square"></div>
        <div class="w-3 h-3 rounded-full bg-[#0A125E] aspect-square"></div>
    </div>
</div>
@endsection