<x-public-layout>
    <div id="header" class="flex flex-col items-center">
        <div id="header-background" class="w-full rounded-[36px] bg-gradient-to-br from-blueth via-blueth to-greenth p-8">
            @include('layouts.navigation-public')

            <div id="leading" class="flex flex-col mt-4 gap-4 text-white items-center text-center">
                <h1 class="font-bold text-5xl">Sua ponte para a saúde canábica</h1>
                <p class="text-xl">Para pacientes. Para médicos. Para <strong>todos.</strong></p>
                <button class="bg-gray-300 rounded-xl shadow-md py-2 px-6 text-blueth font-bold">Saiba mais</button>
            </div>

            <div class="h-[7rem]">&nbsp;</div>
        </div>

        <img id="phone-call" class="mt-[-12rem] sm:mt-[-20rem]" src="{{ asset('images/navigation-phone.png') }}" alt="Header Phone Consult">
    </div>

    <section id="customers-avatar" class="mt-8 flex flex-col items-center text-center justify-center gap-4">
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

    <section id="services" class="lg:max-w-5xl lg:mx-auto lg:gap-8 mt-8 flex flex-col lg:grid lg:grid-flow-col lg:auto-cols-auto items-center text-center lg:text-left">
        <x-th.h2-gradient class="hidden">Como podemos te ajudar?</x-th.h2-gradient>
        <x-th.h2-gradient class="lg:block">Como<br /> podemos<br /> te ajudar?</x-th.h2-gradient>

        <div class="flex flex-col lg:w-full justify-center items-center">
            <div class="max-w-4xl lg:w-full mx-auto relative"
                 x-data="{ activeSlide: 1, slides: [1, 2] }" >
                <!-- Buttons -->
                <div class="w-full flex items-center justify-center px-4 mb-10">
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

                <!-- Slides -->
                <!-- green slide -->
                <div x-show="activeSlide === 1"
                     class="p-8 text-center rounded-lg border-2 border-blueth relative">
                    <h1 class="text-2xl rounded-full bg-gradient-to-b from-greenth via-greenth to-darkgreenth text-white py-2 px-4 uppercase mt-[-3.5rem]">Paciente</h1>
                    <section class="flex flex-col lg:flex-row lg:space-x-2 items-center py-8 space-y-4">
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
                    <a href="https://wa.me/+55554598054742?text=Ol%C3%A1!%20Tenho%20interesse%20em%20fazer%20uma%20consulta%20pela%20TeleHemp,%20poderia%20me%20auxiliar?" target="_blank" class="font-thunder absolute left-1/4 mt-1 w-max text-2xl rounded-full bg-gradient-to-b from-greenth via-darkgreenth to-darkgreenth text-white py-2 px-4 uppercase border-4 border-white cursor-pointer">Consulte Agora</a>
                </div>

                <!-- blue slide -->
                <div x-show="activeSlide === 2"
                     class="p-8 text-center rounded-lg border-2 border-blueth relative">
                    <h1 class="text-2xl rounded-full bg-gradient-to-b from-darkgreenth via-lightblueth to-blueth text-white py-2 px-4 uppercase mt-[-3.5rem]">Profissionais de Saude</h1>
                    <section class="flex flex-col lg:flex-row lg:space-x-2 items-center py-8 space-y-4">
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
                    <a href="https://h4vk7tnnddh.typeform.com/to/qoVEuYBg" target="_blank" class="font-thunder absolute left-1/4 mt-1 w-max text-2xl rounded-full bg-gradient-to-b from-darkgreenth via-blueth to-blueth text-white py-2 px-4 uppercase border-4 border-white cursor-pointer">Cadastre-se Agora</a>
                </div>

                <!-- Prev/Next Arrows -->
                <div class="absolute inset-0 flex">
                    <div class="flex items-center justify-start w-1/2 ml-4">
                        <button
                            class="bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6"
                            x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                            &#8592;
                        </button>
                    </div>
                    <div class="flex items-center justify-end w-1/2 mr-4">
                        <button
                            class="bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6"
                            x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                            &#8594;
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="symptoms" class="mt-16 flex flex-col justify-center items-center bg-gradient-to-r from-blueth to-greenth rounded-3xl py-8 px-4 space-y-8"
        x-data="{ activeSlide: 1, slides: [1, 2, 3] }">
        <h1 class="text-white text-4xl text-center font-md">Nossos especialistas<br /> atendem pacientes com:</h1>
        <div class="max-w-4xl mx-auto relative pb-8"
            x-data="">
            <!-- Slides -->
{{--            <template x-for="slide in slides" :key="slide">--}}
            <div
                x-show="activeSlide === 1"
                class="font-bold flex items-center text-white rounded-lg relative">
                <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                <img src="{{ asset('images/sintomas-01.png') }}" alt="Sintoma - Depressão" class="rounded-xl">
                <p class="absolute font-bold text-4xl left-4 bottom-2">Depressão</p>
            </div>

            <div
                x-show="activeSlide === 2"
                class="font-bold flex items-center text-white rounded-lg relative">
                <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                <img src="{{ asset('images/sintomas-02.png') }}" alt="Sintoma - Insônia" class="rounded-xl">
                <p class="absolute font-bold text-4xl left-4 bottom-2">Insônia</p>
            </div>

            <div
                x-show="activeSlide === 3"
                class="font-bold flex items-center text-white rounded-lg relative">
                <div class="absolute h-full w-full rounded-xl bg-gradient-to-b from-transparent via-transparent to-greenth"></div>
                <img src="{{ asset('images/sintomas-03.png') }}" alt="Sintoma - Enxaqueca" class="rounded-xl">
                <p class="absolute font-bold text-4xl left-4 bottom-2">Enxaqueca</p>
            </div>


{{--            </template>--}}

            <!-- Prev/Next Arrows -->
            <div class="absolute inset-0 flex">
                <div class="flex items-center justify-start w-1/2">
                    <button
                        class="bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6"
                        x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                        &#8592;
                    </button>
                </div>
                <div class="flex items-center justify-end w-1/2">
                    <button
                        class="bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6"
                        x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                        &#8594;
                    </button>
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

        <x-th.symptons-card
            x-show="activeSlide === 1"
            title="Depressão"
            subtitle="Muito comum"
            text="Casos por ano: mais de 2 milhões (Brasil)"
            grade="4"
            link="#" />

        <x-th.symptons-card
            x-show="activeSlide === 2"
            title="Insônia"
            subtitle="Muito comum"
            text="Casos por ano: mais de 2 milhões (Brasil)"
            grade="3"
            link="#" />

        <x-th.symptons-card
            x-show="activeSlide === 3"
            title="Enxaqueca"
            subtitle="Muito comum"
            text="Casos por ano: mais de 2 milhões (Brasil)"
            grade="5"
            link="#" />
    </section>

    <x-th.footer />
</x-public-layout>
