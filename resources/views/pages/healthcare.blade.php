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

<div class="px-8">
    <h2 class="md:mt-20 mb-10 text-4xl text-[#0A125E] text-center">Perfiles</h2>

    <div class="bg-[#0144E8] p-5 h-48">
        <div class="bg-[#0A125E] w-20 h-20 aspect-square rounded-full flex justify-center items-center">
            <img src="{{asset('images/medico-icon.png')}}" alt="Medico Icon">
        </div>
        <p class="text-3xl text-white">Médico General</p>
    </div>
</div>
@else
<p>Hola soy el nivel 2</p>
@endif


@endsection