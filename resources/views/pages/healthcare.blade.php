@extends('home.index')

@section('content')

@if($nivel === 'nivel-uno')
<div class="grid md:flex md:justify-center md:items-center gap-5 py-8">
    <div class="px-8">
        <img src="{{asset('images/nivel1-main.png')}}" alt="Image nivel 1">
    </div>

    <div class="bg-[#0144E8] text-white p-3 md:w-1/3">
        <h2 class="text-xl uppercase mb-5">¿Qué es un expediente clínico electrónico?</h2>
        <p>
            Es un conjunto de información almacenada en medios electrónicos que permite resolver problemas de la
            práctica médica diaria, con arreglo a las disposiciones sanitarias, dentro de un establecimiento de salud.
            El expediente clínico electrónico tiene como finalidad llevar un control histórico-clínico del paciente de
            manera ordenada, donde los principales usuarios son médicos, enfermeras y el personal de salud previamente
            autorizado que esté involucrado en la atención y servicio otorgado al derechohabiente. La idea de
            implementar esta nueva modalidad en las unidades clínicas permitirá brindar una mejor atención y servicio a
            los pacientes, utilizando la modernización de los procesos de los servicios de salud.
        </p>

        <h2 class="text-xl uppercase mb-5 mt-4">¿A quién está orientado?</h2>
        <p>
            Esta dirigido a clínicas, centro de salud, hospitales y a todo el sector salud con las especialidades y
            servicios que cuenta HealthCare.
        </p>
    </div>
</div>

<div class="md:flex md:justify-center px-8 md:px-0 py-8 md:py-10">
    <img src="{{asset('images/nivel1-bloque2.png')}}" alt="Nivel 1 bloque 2">
</div>

<div class="py-8 md:pt-0">
    <h2 class="md:mt-8 mb-10 text-4xl text-[#0A125E] text-center">Perfiles</h2>

    <div class="flex md:justify-center md:gap-3">
        <div class="bg-[#0144E8] w-2/4 max-w-56 md:max-w-64 h-56 mx-auto md:mx-0 p-5">
            <div class="bg-[#0A125E] w-12 h-12 aspect-square rounded-full flex justify-center items-center">
                <img class="p-2" src="{{asset('images/medico-icon.png')}}" alt="Medico Icon">
            </div>

            <p class="text-white text-2xl text-center py-8 font-medium">Médico General</p>
        </div>

        <div class="hidden md:block bg-[#0144E8] w-2/4 max-w-56 md:max-w-64 h-56 mx-auto md:mx-0 p-5">
            <div class="bg-[#0A125E] w-12 h-12 aspect-square rounded-full flex justify-center items-center">
                <img class="p-2" src="{{asset('images/medico-icon.png')}}" alt="Medico Icon">
            </div>

            <p class="text-white text-2xl text-center py-8 font-medium">Odontólogo</p>
        </div>

        <div class="hidden md:block bg-[#0144E8] w-2/4 max-w-56 md:max-w-64 h-56 mx-auto md:mx-0 p-5">
            <div class="bg-[#0A125E] w-12 h-12 aspect-square rounded-full flex justify-center items-center">
                <img class="p-2" src="{{asset('images/medico-icon.png')}}" alt="Medico Icon">
            </div>

            <p class="text-white text-2xl text-center py-8 font-medium">Enfermería</p>
        </div>

        <div class="hidden md:block bg-[#0144E8] w-2/4 max-w-56 md:max-w-64 h-56 mx-auto md:mx-0 p-5">
            <div class="bg-[#0A125E] w-12 h-12 aspect-square rounded-full flex justify-center items-center">
                <img class="p-2" src="{{asset('images/medico-icon.png')}}" alt="Medico Icon">
            </div>

            <p class="text-white text-2xl text-center py-8 font-medium">Radiólogo</p>
        </div>
    </div>
</div>
@else
<div class="grid md:flex md:flex-row-reverse md:justify-center md:items-center gap-5 py-8">
    <div class="px-8">
        <img src="{{asset('images/main-nivel2.png')}}" alt="Image nivel 2">
    </div>

    <div class="bg-[#0144E8] text-white p-3 md:w-1/3">
        <h2 class="text-xl uppercase mb-5">¿Qué es un expediente clínico electrónico?</h2>
        <p>
            Es un conjunto de información almacenada en medios electrónicos que permite resolver problemas de la
            práctica médica diaria, con arreglo a las disposiciones sanitarias, dentro de un establecimiento de salud.
            El expediente clínico electrónico tiene como finalidad llevar un control histórico-clínico del paciente de
            manera ordenada, donde los principales usuarios son médicos, enfermeras y el personal de salud previamente
            autorizado que esté involucrado en la atención y servicio otorgado al derechohabiente. La idea de
            implementar esta nueva modalidad en las unidades clínicas permitirá brindar una mejor atención y servicio a
            los pacientes, utilizando la modernización de los procesos de los servicios de salud.
        </p>

        <h2 class="text-xl uppercase mb-5 mt-4">¿A quién está orientado?</h2>
        <p>
            Esta dirigido a clínicas, centro de salud, hospitales y a todo el sector salud con las especialidades y
            servicios que cuenta HealthCare.
        </p>
    </div>
</div>

<div class="py-8 px-8 md:px-0">
    <div class="md:w-2/3 md:flex md:mx-auto md:gap-10 md:items-center">
        <div class="mb-10 md:mb-0">
            <img src="{{asset('images/imagendos_nivel2.png')}}" alt="Imagen dos nivel 2">
        </div>

        <div class="space-y-1 grow-[2]">
            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Ingresos por consulta</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Ingresos por urgencia</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Trabajo Social</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Nutrición</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Anestesiología</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Enfermería</p>
            </div>
        </div>
    </div>
</div>

<div class="py-8 px-8 md:px-0">
    <div class="md:w-2/3 md:flex md:flex-row-reverse md:mx-auto md:gap-10 md:items-center">
        <div class="mb-10 md:mb-0">
            <img src="{{asset('images/imagentres_nivel3.png')}}" alt="Imagen dos nivel 2">
        </div>

        <div class="space-y-1 grow-[2]">
            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Módulo Covid</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Medicina Interna</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Pediatría</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Ginecología</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0A125E] px-10 py-5 text-xl uppercase text-center">Traumatismo S.O1</p>
            </div>

            <div class="text-white">
                <p class="bg-[#0144E8] px-10 py-5 text-xl uppercase text-center">Gestión de quirófano</p>
            </div>
        </div>
    </div>
</div>
@endif


@endsection