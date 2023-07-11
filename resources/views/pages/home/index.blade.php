<x-public-layout>
    <div id="header" class="flex flex-col items-center lg:max-w-7xl lg:mx-auto">
        <div id="header-background" class="w-full rounded-[36px] bg-gradient-to-br from-blueth via-blueth to-greenth p-8">
            @include('layouts.navigation-public')

            <div id="leading" class="flex flex-col mt-4 gap-4 text-white items-center text-center">
                <h1 class="font-thunder font-bold text-5xl lg:text-7xl">Sua ponte para a<br /> saúde canábica</h1>
                <p class="text-xl lg:text-md">Para pacientes. Para médicos. Para <strong>todos.</strong></p>
                <a href="https://wa.me/+55554598054742?text=Ol%C3%A1!%20Tenho%20interesse%20em%20fazer%20uma%20consulta%20pela%20TeleHemp,%20poderia%20me%20auxiliar?" target="_blank" class="bg-gray-300 rounded-xl shadow-md py-2 px-6 text-blueth font-bold z-50">Saiba mais</a>
            </div>

            <div class="h-[7rem] lg:h-[17rem]">&nbsp;</div>
        </div>

{{--        scale-125 lg:scale-75 mt-[-9rem] lg:mt-[-25rem] lg:w-[870px]--}}
        <img id="phone-call" class="lg:scale-75 mt-[-9rem] lg:mt-[-25rem] lg:w-[870px]" src="{{ asset('images/navigation-phone-large-crop.png') }}" alt="Header Phone Consult">
    </div>

    <section id="customers-avatar" class="hidden mt-8 flex flex-col items-center text-center justify-center gap-4">
        <div class="avatar-images flex justify-center space-x-[-1rem]">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <img src="{{ asset('images/customer-avatar.png') }}" alt="Customers Avatar" class="w-14">
            <div class="rounded-full bg-[#2D2D2D] text-white font-bold w-14 h-14 justify-center flex items-center">1.6k+</div>
        </div>
        <p>+1,600 se consultaram com a <br />TeleHemp nas últimas 24 horas.</p>
    </section>

    <section id="quem-somos" class="lg:max-w-7xl lg:mx-auto flex flex-col items-center mt-[8rem] lg:mt-[2rem] pt-4">
        <div class="w-full rounded-[36px] bg-gradient-to-br from-blueth to-greenth p-0.5 relative">
            <div class="rounded-[36px] p-8 h-full w-full bg-[#E5E5E5] flex flex-col items-center space-y-8">
{{--                <x-canabis-leaf />--}}
                <img src="{{ asset('images/canabis-leaf.png') }}" alt="Canabis Leaf" class="lg:hidden mt-[-129px] lg:mt-0 bg-[#E5E5E5]">

{{--                <h1 class="font-bold text-transparent text-6xl bg-clip-text bg-gradient-to-br from-blueth to-greenth"></h1>--}}
                <div class="px-2 lg:mt-[129px] lg:bg-[#E5E5E5] lg:absolute lg:top-[-4rem] lg:left-[2rem]">
                    <x-th.h2-gradient class="font-thunder">Quem somos? </x-th.h2-gradient>
                </div>

                <div class="lg:grid lg:grid-flow-col lg:gap-4">
                    <p class="lg:max-w-[496px] text-lg lg:font-thunder-light lg:text-4xl text-gray-700">Bem-vindo à TeleHemp, a primeira plataforma multidisciplinar de telessaúde canábica do Brasil! Somos um time apaixonado por inovação e comprometido com a saúde e bem-estar dos nossos usuários. Nossa missão é conectar pacientes a especialistas altamente qualificados no campo da cannabis medicinal, facilitando o acesso a tratamentos eficazes e seguros para diversas condições, como ansiedade, depressão, Alzheimer, epilepsias, entre outras.</p>
                    <img src="{{ asset('images/telehemp-canabis-leaf-desktop.png') }}" alt="Canabis Leaf" class="hidden lg:flex bg-[#E5E5E5] lg:w-auto">
                </div>
            </div>
        </div>
    </section>

    <section id="funcionalidades" class="lg:max-w-7xl lg:mx-auto lg:gap-8 mt-8 flex flex-col lg:grid lg:grid-flow-col lg:auto-cols-auto items-center text-center lg:text-left">
        <x-th.h2-gradient class="hidden">Como podemos te ajudar?</x-th.h2-gradient>
        <x-th.h2-gradient class="lg:block">Como<br /> podemos<br /> te ajudar?</x-th.h2-gradient>

        <div class="w-screen px-8 lg:max-w-screen-md relative"
                 x-data="{ activeSlide: 1, slides: [1, 2] }" >
                <!-- Buttons -->
                <div class="w-full flex items-center justify-center px-4 mb-10">
                    <button type="button"
                        class="font-thunder-medium lg:text-2xl flex-1 w-4 h-2 lg:h-auto lg:py-2 lg:px-4 lg:rounded-r-2xl lg:text-white lg:pl-8 mt-4 mx-2 lg:mx-0 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg bg-greenth"
                        x-on:click="activeSlide = 1"
                    >
                        <span class="hidden lg:flex">Pacientes</span>
                    </button>

                    <div class="hidden mt-4 lg:flex bg-gradient-to-r from-greenth to-blueth py-3 px-4">
                        <div class="bg-white rounded-3xl w-12 p-1 flex"
                            :class="{
                                'justify-end': activeSlide !== 1,
                                'justify-start': activeSlide === 1
                            }">
                            <div class="circle rounded-full w-4 h-4 bg-greenth">&nbsp;</div>
                        </div>
                    </div>

                    <button type="button"
                        class="font-thunder-medium lg:text-2xl flex-1 w-4 h-2 lg:h-auto lg:py-2 lg:px-4 lg:rounded-l-2xl lg:text-white lg:flex lg:place-content-end lg:pr-8 mt-4 mx-2 lg:mx-0 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg bg-blueth"
                        x-on:click="activeSlide = 2"
                    >
                        <span class="hidden lg:flex">Profissionais da Saúde</span>
                    </button>
                </div>

                <!-- Slides -->
                <!-- green slide -->
                <div x-show="activeSlide === 1"
                     class="p-8 text-center rounded-3xl border-2 border-greenth relative">
                    <h1 class="lg:hidden mx-auto font-thunder text-2xl rounded-full bg-gradient-to-b from-greenth via-greenth to-darkgreenth text-white py-2 px-4 uppercase mt-[-3.5rem] leading-none">Paciente</h1>
                    <section class="grid grid-cols-1 lg:grid-cols-4 lg:auto-cols-max items-center lg:items-start py-8 lg:gap-2 space-y-4 lg:space-y-0">
                        <x-th.help-item-green
                            number="1">
                            <x-slot name="text">
                                Escolha um<br /> profissional
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.user class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-green>

                        <x-th.help-item-green
                            number="2"
                            text="Cadastre-se">
                            <x-slot name="icon">
                                <x-th.icon-register class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-green>

                        <x-th.help-item-green
                            number="3">
                            <x-slot name="text">
                                Agenda sua<br /> consulta
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-schedule-calendar class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-green>

                        <x-th.help-item-green
                            number="4">
                            <x-slot name="text">
                                Consulte com<br /> especialista
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-specialist class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-green>
                    </section>
                    <a href="https://wa.me/+55554598054742?text=Ol%C3%A1!%20Tenho%20interesse%20em%20fazer%20uma%20consulta%20pela%20TeleHemp,%20poderia%20me%20auxiliar?" target="_blank" class="font-thunder absolute left-[38%] mt-1 w-max text-2xl rounded-full bg-gradient-to-b from-greenth via-darkgreenth to-darkgreenth text-white py-2 px-4 uppercase border-4 border-white cursor-pointer leading-none">Consulte Agora</a>
                </div>

                <!-- blue slide -->
                <div x-show="activeSlide === 2"
                     class="p-8 text-center rounded-3xl border-2 border-blueth relative">
                    <h1 class="lg:hidden mx-auto font-thunder text-2xl rounded-full bg-gradient-to-b from-darkgreenth via-lightblueth to-blueth text-white py-2 px-4 uppercase mt-[-3.5rem] leading-none">Profissionais de Saude</h1>
                    <section class="grid grid-cols-1 lg:grid-cols-4 lg:auto-cols-max items-center lg:items-start py-8 lg:gap-2 space-y-4 lg:space-y-0">
                        <x-th.help-item-blue
                            number="1">
                            <x-slot name="text">
                                Cadastre seu<br />perfil
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-register class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-blue>

                        <x-th.help-item-blue
                            number="2">
                            <x-slot name="text">
                                Defina os valores<br /> de sua consulta
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-consult-value class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-blue>

                        <x-th.help-item-blue
                            number="3">
                            <x-slot name="text">
                                Libere sua<br />agenda
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-free-calendar class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-blue>

                        <x-th.help-item-blue
                            number="4">
                            <x-slot name="text">
                                Comece a<br /> atender
                            </x-slot>
                            <x-slot name="icon">
                                <x-th.icon-star-consult class="fill-white h-16"/>
                            </x-slot>
                        </x-th.help-item-blue>
                    </section>
                    <a href="https://telehemp.typeform.com/cadastro" target="_blank" class="font-thunder absolute left-[35%] mt-1 w-max text-2xl rounded-full bg-gradient-to-b from-darkgreenth via-blueth to-blueth text-white py-2 px-4 uppercase border-4 border-white cursor-pointer leading-none">Cadastre-se Agora</a>
                </div>

                <!-- Prev/Next Arrows -->
                <div class="absolute inset-0 flex">
                    <div class="flex items-center justify-start w-1/2 ml-4">
                        <x-th.slide.polygon_left ml="-ml-3" />
                    </div>
                    <div class="flex items-center justify-end w-1/2 mr-4">
                        <x-th.slide.polygon_right mr="-mr-3" />
                    </div>
                </div>
            </div>
    </section>

    <section id="symptoms" class="mt-16 flex flex-col justify-center items-center bg-gradient-to-r from-blueth to-greenth rounded-3xl py-8 px-4 space-y-8
                                lg:max-w-7xl lg:mx-auto"
             x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }">
        <h1 class="font-thunder font-medium text-white text-4xl lg:text-5xl text-center">Nossos especialistas<br class="lg:hidden" /> atendem pacientes com:</h1>

        <div class="max-w-4xl mx-auto relative pb-8 lg:w-full" x-data="">
            <div class="lg:flex lg:flex-row lg:gap-2">
                <div x-on:click="activeSlide = 1"
                    x-show="activeSlide === 1"
                    class="lg:hidden font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-depressao.png') }}" alt="Sintoma - Depressão" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Depressão</p>
                </div>

                <div x-on:click="activeSlide = 2"
                    x-show="activeSlide === 2"
                    class="lg:hidden font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-insonia.png') }}" alt="Sintoma - Insônia" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Insônia</p>
                </div>

                <div x-on:click="activeSlide = 3"
                    x-show="activeSlide === 3"
                    class="lg:hidden font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-ansiedade.png') }}" alt="Sintoma - Ansiedade" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Ansiedade</p>
                </div>

                <div x-on:click="activeSlide = 4"
                    x-show="activeSlide === 4"
                    class="lg:hidden font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-dor-cronica.png') }}" alt="Sintoma - Dor Crônica" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Dor Crônica</p>
                </div>

                <div x-on:click="activeSlide = 5"
                    x-show="activeSlide === 5"
                    class="lg:hidden font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-outros.png') }}" alt="Sintoma - Entre Outros" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Entre outros</p>
                </div>

                <!-- desktop -->
                <div x-on:click="activeSlide = 1"
                     class="hidden lg:block font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-depressao.png') }}" alt="Sintoma - Depressão" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Depressão</p>
                </div>

                <div x-on:click="activeSlide = 2"
                    class="hidden lg:block font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-insonia.png') }}" alt="Sintoma - Insônia" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Insônia</p>
                </div>

                <div  x-on:click="activeSlide = 3"
                    class="hidden lg:block font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-ansiedade.png') }}" alt="Sintoma - Ansiedade" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Ansiedade</p>
                </div>

                <div  x-on:click="activeSlide = 4"
                    class="hidden lg:block font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-dor-cronica.png') }}" alt="Sintoma - Dor Crônica" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Dor Crônica</p>
                </div>

                <div x-on:click="activeSlide = 5"
                    class="hidden lg:block font-bold flex items-center text-white rounded-lg relative cursor-pointer">
                    <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                    <img src="{{ asset('images/telehemp-sintomas-outros.png') }}" alt="Sintoma - Entre Outros" class="rounded-xl">
                    <p class="font-thunder-medium absolute text-4xl left-4 bottom-2">Entre outros</p>
                </div>
            </div>

            <!-- Prev/Next Arrows -->
            <div class="lg:hidden absolute inset-0 flex ">
                <div class="flex items-center justify-start w-1/2">
                    <x-th.slide.polygon_left />
                </div>
                <div class="flex items-center justify-end w-1/2">
                    <x-th.slide.polygon_right />
                </div>
            </div>

            <!-- Buttons -->
            <div class="lg:hidden absolute w-full flex items-center justify-center px-4">
                <template x-for="slide in slides" :key="slide">
                    <button
                        class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                        :class="{
                            'bg-blueth': activeSlide === slide,
                            'bg-greenth': activeSlide !== slide
                        }"
                        x-on:click="activeSlide = slide"
                    ></button>
                </template>
            </div>
        </div>

        <x-th.symptons-card
            x-show="activeSlide === 1"
            title="Depressão"
            subtitle="Bem comum"
            grade="4"
            cases="Casos por ano: 12 milhões de casos estimados no Brasil"
            link="#">
            <x-slot name="text">
                <p class="text-white text-xl font-light text-left">A depressão é um transtorno mental caracterizado por tristeza profunda, falta de interesse em atividades e dificuldade para realizar tarefas diárias.</p>
                <p class="text-white text-xl font-light text-left">A depressão é uma doença complexa que afeta tanto o corpo quanto a mente, podendo causar sintomas como cansaço, alterações no apetite e sono, dificuldade de concentração e até pensamentos suicidas. O tratamento geralmente envolve uma combinação de terapias, como medicamentos, psicoterapia, atividade física e mudanças no estilo de vida. Na TeleHemp, nossos especialistas estão prontos para orientá-lo no tratamento da depressão, incluindo o uso de cannabis medicinal como uma opção terapêutica complementar.</p>
            </x-slot>
        </x-th.symptons-card>

        <x-th.symptons-card
            x-show="activeSlide === 2"
            title="Insônia"
            subtitle="Comum"
            cases="Casos por ano: 7 milhões de casos estimados no Brasil"
            grade="3"
            link="#">
            <x-slot name="text">
                <p class="text-white text-xl font-light text-left">A insônia é um distúrbio do sono que dificulta o processo de adormecer, manter o sono ou ambos, resultando em noites mal dormidas e baixa qualidade de vida.</p>
                <p class="text-white text-xl font-light text-left">A insônia pode ser causada por diversos fatores, como estresse, ansiedade, hábitos de vida inadequados e condições médicas subjacentes. O tratamento envolve a identificação e correção das causas, além de abordagens médicas, psicológicas e comportamentais. A TeleHemp oferece acesso a especialistas que podem ajudar a investigar e tratar a insônia, considerando também o uso de cannabis medicinal como uma alternativa promissora para melhorar a qualidade do sono.</p>
            </x-slot>
        </x-th.symptons-card>

        <x-th.symptons-card
            x-show="activeSlide === 3"
            title="Ansiedade"
            subtitle="Muito comum"
            cases="Casos por ano: 19 milhões de casos estimados no Brasil"
            grade="5"
            link="#">
            <x-slot name="text">
                <p class="text-white text-xl font-light text-left">A ansiedade é uma reação natural ao estresse, mas quando se torna excessiva e persistente, pode evoluir para um transtorno de ansiedade, prejudicando a vida diária.</p>
                <p class="text-white text-xl font-light text-left">Os transtornos de ansiedade podem apresentar sintomas como preocupação constante, agitação, dificuldade de concentração e problemas de sono. O tratamento geralmente combina psicoterapia, medicamentos e mudanças no estilo de vida. Na TeleHemp, conectamos você a especialistas que podem auxiliar no tratamento da ansiedade, incluindo o uso de cannabis medicinal como uma opção terapêutica complementar para aliviar os sintomas.</p>
            </x-slot>
        </x-th.symptons-card>

        <x-th.symptons-card
            x-show="activeSlide === 4"
            title="Dor crônica"
            subtitle="Muito comum"
            cases="Casos por ano: 60 milhões de casos estimados no Brasil"
            grade="5"
            link="#">
            <x-slot name="text">
                <p class="text-white text-xl font-light text-left">A dor crônica é uma dor persistente que dura mais de três meses e pode ser causada por várias condições médicas, como artrite, fibromialgia e lesões.</p>
                <p class="text-white text-xl font-light text-left">A dor crônica pode ser debilitante e afetar significativamente a qualidade de vida. O tratamento envolve abordagens farmacológicas e não farmacológicas, como fisioterapia, terapia ocupacional, psicoterapia e mudanças no estilo de vida. A TeleHemp oferece acesso a profissionais experientes que podem ajudar a gerenciar a dor crônica, explorando também o potencial terapêutico da cannabis medicinal como uma opção de tratamento complementar.</p>
            </x-slot>
        </x-th.symptons-card>
    </section>

    <section id="testimony" class=" lg:max-w-7xl lg:mx-auto mt-16 flex flex-col justify-center items-center py-8 px-4 space-y-8 lg:border-[1px] lg:border-blueth lg:rounded-3xl">
        <x-th.h2-gradient>Conheça quem<br class="lg:hidden" />confia na TeleHemp</x-th.h2-gradient>

        <!-- mobile slide -->
        <div
            class="lg:hidden w-full mx-auto relative pb-8"
            x-data="{ activeSlide: 1, slides: [1, 2, 3] }"
        >
            <div x-show="activeSlide === 1"
                class="grid grid-cols-1 text-white rounded-3xl relative bg-gradient-to-tr from-blueth to-mediumgreenth w-full p-8 space-y-2">
                <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                    <img src="{{ asset('images/telehemp-depoimento-godofredo.png') }}" alt="Avatar" class="rounded-full w-[50px]" />
                    <div class="flex flex-col">
                        <p class="font-thunder-medium text-4xl font-md border-b-[1px] border-b-white mb-1">Godofredo</p>
                        <p class="font-thunder-thin text-2xl">Vendedor</p>
                    </div>
                </div>

                <div class="canabis-mt-2 indicator flex">
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                </div>

                <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                <p>Minha experiência com a TeleHemp tem sido muito positiva. Como vendedor, minha rotina é bastante agitada e eu estava enfrentando problemas de ansiedade e estresse. Encontrei na plataforma a oportunidade de me conectar com especialistas em cannabis medicinal de maneira prática e eficiente. Os profissionais da TeleHemp foram atenciosos e me auxiliaram a encontrar o tratamento adequado para o meu caso. Eu confio na TeleHemp porque eles são comprometidos com a ética e o conhecimento científico.
                </p>
            </div>

            <div x-show="activeSlide === 2"
                 class="grid grid-cols-1 text-white rounded-3xl relative bg-gradient-to-tr from-blueth to-mediumgreenth w-full p-8 space-y-2">

                <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                    <img src="{{ asset('images/telehemp-depoimento-nilce.png') }}" alt="Avatar" class="rounded-full w-[50px]" />
                    <div class="flex flex-col">
                        <p class="font-thunder text-4xl font-md border-b-[1px] border-b-white mb-1">Nilce</p>
                        <p class="text-xl">Aposentada</p>
                    </div>
                </div>

                <div class="canabis-mt-2 indicator flex">
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                </div>

                <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                <p>Eu sou aposentada e sofro de dor crônica há anos. A TeleHemp me proporcionou acesso a profissionais especializados em cannabis medicinal, que me ajudaram a encontrar alívio para minhas dores. A plataforma é fácil de usar, mesmo para alguém da minha idade, e os médicos são verdadeiramente preocupados com meu bem-estar. Eu confio na TeleHemp porque eles me deram a oportunidade de melhorar minha qualidade de vida sem sair de casa.
                </p>
            </div>

            <div x-show="activeSlide === 3"
                 class="grid grid-cols-1 text-white rounded-3xl relative bg-gradient-to-tr from-blueth to-mediumgreenth w-full p-8 space-y-2">

                <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                    <img src="{{ asset('images/telehemp-depoimento-dominique.png') }}" alt="Avatar" class="rounded-full w-[50px]" />
                    <div class="flex flex-col">
                        <p class="font-thunder text-4xl font-md border-b-[1px] border-b-white mb-1">Dominique</p>
                        <p class="text-xl">Modelo</p>
                    </div>
                </div>

                <div class="canabis-mt-2 indicator flex">
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    <x-th.icon-canabis class="w-5 h-5 fill-white" />
                </div>

                <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                <p>Como modelo, tenho uma rotina bastante corrida e estava enfrentando problemas de insônia. Um amigo me indicou a TeleHemp, e fiquei impressionada com a qualidade e a conveniência do serviço. Os médicos são atenciosos e altamente qualificados, e me ajudaram a encontrar um tratamento que melhorou significativamente meu sono. Eu confio na TeleHemp porque eles são dedicados a oferecer soluções inovadoras e personalizadas para os pacientes, sempre baseadas em evidências científicas.</p>
            </div>

            <!-- Prev/Next Arrows -->
            <div class="absolute inset-0 flex">
                <div class="flex items-center justify-start w-1/2">
                    <x-th.slide.polygon_left />
                </div>
                <div class="flex items-center justify-end w-1/2">
                    <x-th.slide.polygon_right />
                </div>
            </div>

            <!-- Buttons -->
            <div class="absolute w-full flex items-center justify-center px-4">
                <template x-for="slide in slides" :key="slide">
                    <button
                        class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                        :class="{
                            'bg-blueth': activeSlide === slide,
                            'bg-greenth': activeSlide !== slide
                        }"
                        x-on:click="activeSlide = slide"
                    ></button>
                </template>
            </div>
        </div>

        <!-- desktop version -->
        <div
            class="hidden lg:grid lg:grid-cols-2 lg:gap-4 w-full mx-auto relative pb-8"
            x-data="{ activeSlide: 1, slides: [1, 2, 3] }"
        >
            <div class="testimony-peoples space-y-2 overflow-auto pr-2">
                <div x-on:click="activeSlide = 1"
                     :class="{
                        'text-white bg-gradient-to-r from-blueth to-mediumgreenth': activeSlide === 1,
                        'text-black border-[1px] border-white': activeSlide !== 1
                     }"
                     class="flex items-center gap-4 cursor-pointer rounded-3xl relative w-full px-4 py-2 space-y-2">

                    <img src="{{ asset('images/telehemp-depoimento-godofredo.png') }}" alt="Avatar" class="rounded-full w-[75px] h-[75px]" />

                    <div>
                        <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-4">
                                <p class="font-thunder text-3xl font-md border-b-[1px] border-b-white lg:border-r-white lg:border-r-[1px] lg:border-b-0 lg:pr-4 mb-1">Godofredo</p>
                                <p class="text-2xl font-thunder-light">Vendedor</p>
                            </div>
                        </div>

                        <p class="text-sm">Minha experiência com a TeleHemp tem sido muito positiva. Como vendedor, minha rotina é bastante..</p>

                        <div class="canabis mt-2 indicator flex"
                             :class="{
                                'fill-white': activeSlide === 1,
                                'fill-black': activeSlide !== 1
                            }">
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                        </div>
                    </div>
                </div>

                <div x-on:click="activeSlide = 2"
                     :class="{
                        'text-white bg-gradient-to-r from-blueth to-mediumgreenth': activeSlide === 2,
                        'text-black border-[1px] border-white': activeSlide !== 2
                     }"
                     class="flex items-center gap-4 cursor-pointer rounded-3xl relative w-full  px-4 py-2 space-y-2">

                    <img src="{{ asset('images/telehemp-depoimento-nilce.png') }}" alt="Avatar" class="rounded-full w-[75px] h-[75px]" />

                    <div>
                        <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-4">
                                <p class="font-thunder text-3xl font-md border-b-[1px] border-b-white lg:border-r-white lg:border-r-[1px] lg:border-b-0 lg:pr-4 mb-1">Nilce</p>
                                <p class="text-2xl font-thunder-light">Aposentada</p>
                            </div>
                        </div>

                        <p class="text-sm">Eu sou aposentada e sofro de dor crônica há anos. A TeleHemp me proporcionou acesso...</p>

                        <div class="canabis mt-2 indicator flex"
                             :class="{
                                'fill-white': activeSlide === 2,
                                'fill-black': activeSlide !== 2
                            }">
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                        </div>
                    </div>
                </div>

                <div x-on:click="activeSlide = 3"
                     :class="{
                        'text-white bg-gradient-to-r from-blueth to-mediumgreenth': activeSlide === 3,
                        'text-black border-[1px] border-white': activeSlide !== 3
                     }"
                     class="flex items-center gap-4 cursor-pointer rounded-3xl relative w-full px-4 py-2 space-y-2">

                    <img src="{{ asset('images/telehemp-depoimento-dominique.png') }}" alt="Avatar" class="rounded-full w-[75px] h-[75px]" />

                    <div>
                        <div class="grid grid-flow-col auto-cols-max gap-4 items-center">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-4">
                                <p class="font-thunder text-4xl font-md border-b-[1px] border-b-white lg:border-r-white lg:border-r-[1px] lg:border-b-0 lg:pr-4 mb-1">Dominique</p>
                                <p class="text-2xl font-thunder-light">Modelo</p>
                            </div>
                        </div>

                        <p class="text-sm">Como modelo, tenho uma rotina bastante corrida e estava enfrentando problemas...</p>

                        <div class="canabis mt-2 indicator flex"
                             :class="{
                                'fill-white': activeSlide === 3,
                                'fill-black': activeSlide !== 3
                            }">
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                            <x-th.icon-canabis class="w-4 h-4 fill-inherit" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimony-description flex">
                <div x-show="activeSlide === 1" class="text-white rounded-3xl relative bg-gradient-to-r from-blueth to-mediumgreenth w-full p-8 space-y-2">
                    <div class="canabis-mt-2 indicator flex">
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    </div>

                    <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                    <p>Minha experiência com a TeleHemp tem sido muito positiva. Como vendedor, minha rotina é bastante agitada e eu estava enfrentando problemas de ansiedade e estresse. Encontrei na plataforma a oportunidade de me conectar com especialistas em cannabis medicinal de maneira prática e eficiente. Os profissionais da TeleHemp foram atenciosos e me auxiliaram a encontrar o tratamento adequado para o meu caso. Eu confio na TeleHemp porque eles são comprometidos com a ética e o conhecimento científico.
                    </p>
                </div>

                <div x-show="activeSlide === 2" class="text-white rounded-3xl relative bg-gradient-to-r from-blueth to-mediumgreenth w-full p-8 space-y-2">
                    <div class="canabis-mt-2 indicator flex">
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    </div>

                    <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                    <p>Eu sou aposentada e sofro de dor crônica há anos. A TeleHemp me proporcionou acesso a profissionais especializados em cannabis medicinal, que me ajudaram a encontrar alívio para minhas dores. A plataforma é fácil de usar, mesmo para alguém da minha idade, e os médicos são verdadeiramente preocupados com meu bem-estar. Eu confio na TeleHemp porque eles me deram a oportunidade de melhorar minha qualidade de vida sem sair de casa.
                    </p>
                </div>

                <div x-show="activeSlide === 3" class="text-white rounded-3xl relative bg-gradient-to-r from-blueth to-mediumgreenth w-full p-8 space-y-2">
                    <div class="canabis-mt-2 indicator flex">
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                        <x-th.icon-canabis class="w-5 h-5 fill-white" />
                    </div>

                    <p class="font-thunder review font-md text-4xl">Experiência incrível</p>
                    <p>Como modelo, tenho uma rotina bastante corrida e estava enfrentando problemas de insônia. Um amigo me indicou a TeleHemp, e fiquei impressionada com a qualidade e a conveniência do serviço. Os médicos são atenciosos e altamente qualificados, e me ajudaram a encontrar um tratamento que melhorou significativamente meu sono. Eu confio na TeleHemp porque eles são dedicados a oferecer soluções inovadoras e personalizadas para os pacientes, sempre baseadas em evidências científicas.</p>
                </div>
            </div>
        </div>
    </section>

    <div id="especialistas" class="mt-16 relative lg:grid lg:grid-cols-3 lg:max-w-7xl lg:mx-auto">
        <section class="z-10 bg-[#E5E5E5] relative border-[1px] rounded-3xl border-blueth p-8 space-y-4 text-center lg:col-span-2 lg:flex lg:flex-col">
            <x-th.h2-blueth>Conheça os especialistas</x-th.h2-blueth>

            <p class="font-thunder-light font-normal text-3xl lg:text-4xl lg:text-left text-gray-700">que utilizam a TeleHemp pois acreditam na promoção de saúde endocanabinoide, no seu uso ético e responsável.</p>
        </section>

        <section class="z-0 relative mt-[-40px] lg:mt-0 flex flex-col justify-center items-center py-8 px-4 space-y-8 bg-gradient-to-r from-blueth via-mediumgreenth to-greenth rounded-3xl">
            <div class="w-full relative pb-8 lg:overflow-auto lg:pr-2 lg:h-[200px]"
                x-data="{ activeSlide: 1, slides: [1, 2, 3] }">

                <x-th.specialist-slider-item
                    class="lg:hidden"
                    x-show="activeSlide === 1"
                    professional="Célio S."
                    speciality="anestesiologista"
                    imagePath="{{ asset('images/especialista-celio-anestesiologista-png.png') }}" />

                <x-th.specialist-slider-item
                    class="lg:hidden"
                    x-show="activeSlide === 2"
                    professional="Amanda C."
                    speciality="Farmacêutica"
                    imagePath="{{ asset('images/especialista-amanda-farmaceutica.png') }}" />

                <x-th.specialist-slider-item
                    class="lg:hidden"
                    x-show="activeSlide === 3"
                    professional="Flávio F."
                    speciality="Psiquiatra"
                    imagePath="{{ asset('images/especialista-flavio-psquiatra.png') }}" />

                <x-th.specialist-slider-item
                    class="hidden lg:block"
                    professional="Célio S."
                    speciality="anestesiologista"
                    imagePath="{{ asset('images/especialista-celio-anestesiologista-png.png') }}" />

                <x-th.specialist-slider-item
                    class="hidden lg:block"
                    professional="Amanda C."
                    speciality="Farmacêutica"
                    imagePath="{{ asset('images/especialista-amanda-farmaceutica.png') }}" />

                <x-th.specialist-slider-item
                    class="hidden lg:block"
                    professional="Flávio F."
                    speciality="Psiquiatra"
                    imagePath="{{ asset('images/especialista-flavio-psquiatra.png') }}" />

                <!-- Prev/Next Arrows -->
                <div class="lg:hidden absolute inset-0 flex z-[100]">
                    <div class="flex items-center justify-start w-1/2">
                        <x-th.slide.polygon_left />
                    </div>
                    <div class="flex items-center justify-end w-1/2">
                        <x-th.slide.polygon_right />
                    </div>
                </div>

                <!-- Buttons -->
                <div class="lg:hidden absolute w-full flex items-center justify-center px-4">
                    <template x-for="slide in slides" :key="slide">
                        <button
                            class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                            :class="{
                            'bg-blueth': activeSlide === slide,
                            'bg-greenth': activeSlide !== slide
                        }"
                            x-on:click="activeSlide = slide"
                        ></button>
                    </template>
                </div>
            </div>
        </section>
    </div>

    <x-th.footer />
</x-public-layout>
