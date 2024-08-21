@extends('home.index')

@section('content')
<div class="w-2/3 grid grid-cols-[.5fr_.3fr_.5fr] grid-rows-[.2fr_1fr] py-8 mx-auto">
    <div class="col-start-1 col-end-3 row-start-1 row-end-3">
        <img class="w-full" src="{{asset('images/mvs-one.png')}}" alt="mvs one">
    </div>

    <div class="bg-[#0144E8] text-slate-200 p-8 col-start-2 col-end-4 row-start-2 row-end-3 text-lg flex
    items-center justify-center">
        <p>
            <span class="font-medium text-white">Medical View System</span> es una colección de servicios inteligentes
            de
            software,
            aplicaciones y conectores,
            que basados
            en procesos de ETL, funcionan conjuntamente para convertir diversas fuentes de datos de información
            presentada
            de
            forma gráfica, a través de dashboards interactivas.
        </p>
    </div>
</div>

<div class="py-8">
    <p class="text-4xl text-[#0A125E] text-center">Alcance de implementación</p>
    <h2 class="mb-10 text-4xl text-[#0A125E] text-center uppercase font-semibold">Medical View System</h2>

    <div class="flex justify-center">
        <div class="bg-[#0144E8] text-slate-200 p-8 text-lg flex
        items-center justify-center w-2/5 mt-10">
            <div>
                <p class="mb-10">
                    El sistema <span class="font-medium text-white">Medical View System</span> contempla los siguientes
                    requerimientos:
                </p>

                <ul class="text-sm space-y-3">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Hardware y software necesarios para su implementación.
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Versiones actualizadas de software y licencias.
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Vistas o Dashboards.
                        <ul class="list-disc ml-20 py-3 space-y-3">
                            <li>
                                Información generada por la organización.
                            </li>
                            <li>
                                Bases de datos/aplicaciones del cliente.
                            </li>
                            <li>
                                Mínimo y máximo de Dashboards por cliente.
                            </li>
                        </ul>
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Portal web y aplicación desarrollada para iOS y Android.
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Acceso para 10 usuarios.
                    </li>

                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        Roles y permisos dependiendo de las necesidades del cliente.
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-start-1 col-end-3 row-start-1 row-end-3">
            <img class="w-full" src="{{asset('images/mvs-two.png')}}" alt="mvs one">
        </div>
    </div>
</div>

<div class="py-10 flex flex-col items-center">
    <h2 class="mb-10 text-4xl text-[#0A125E] text-center">Funcionalidad de MVS</h2>

    <div class="grid grid-cols-5 grid-rows-3 w-11/12 max-w-7xl">
        <div class="bg-[#0A125E] text-white p-2 rounded-lg">
            <p>Obtener Información</p>
        </div>

        <div class="place-self-center">
            <i class="fa-solid fa-arrow-right text-5xl"></i>
        </div>

        <div class="bg-[#0A125E] text-white p-2 rounded-lg">
            <p>Crea visualizaciones y reportes</p>
        </div>

        <div class="place-self-center">
            <i class="fa-solid fa-arrow-right text-5xl"></i>
        </div>

        <div class="bg-[#0A125E] text-white p-2 rounded-lg">
            <p>Creación de dashboards</p>
        </div>

        <div class="place-self-center col-start-5 col-end-6 rotate-90">
            <i class="fa-solid fa-arrow-right text-5xl"></i>
        </div>

        <div class="bg-[#0A125E] text-white p-2 rounded-lg col-start-5 col-end-6">
            <p>Crea aplicaciones y comparte su información con otras</p>
        </div>

        <div class="place-self-center col-start-4 col-end-5 row-start-3 row-end-4 rotate-180">
            <i class="fa-solid fa-arrow-right text-5xl"></i>
        </div>

        <div class="bg-[#0A125E] text-white p-2 rounded-lg col-start-3 col-end-4 row-start-3 row-end-4">
            <p>Analiza, monitorea, apoya a la toma de decisiones del negocio u organización</p>
        </div>
    </div>

    <a class="text-white uppercase bg-[#0144E8] p-5 rounded-lg self-end mt-10 mr-36">Más información</a>

</div>
@endsection