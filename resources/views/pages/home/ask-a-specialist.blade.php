<x-public-layout>
    <div class="flex flex-col items-center lg:max-w-7xl lg:mx-auto">
        <div id="header-background" class="w-full rounded-[36px] bg-gradient-to-br from-blueth via-blueth to-greenth p-8">
            @include('layouts.navigation-public')

            <div class="espl grid grid-cols-1 md:grid-cols-2 mx-auto px-4">

                <div class="my-5">

                    <h2 class="font-bold p-3 text-4xl text-white">
                        Pergunte aos Especialistas
                    </h2>

                    <p class="text-white p-3 text-2xl">
                        Tire suas dúvidas sobre saúde com os melhores especialistas.
                    </p>

                    <ul class="text-lg p-3">
                        <li class="flex items-start text-left justify-start gap-2 text-white">
                            <x-th.icon-canabis class="fill-greenth h-4 mt-2"/>
                            <p>Você receberá várias respostas</p>
                        </li>

                        <li class="flex items-start text-left justify-start gap-2 text-white">
                            <x-th.icon-canabis class="fill-greenth h-4 mt-2"/>
                            <p>Geralmente em 48h</p>
                        </li>

                        <li class="flex items-start text-left justify-start gap-2 text-white">
                            <x-th.icon-canabis class="fill-greenth h-4 mt-2"/>
                            <p>Serviço gratuito</p>
                        </li>
                    </ul>
                </div>

                <div class="mt-5 md:order-last lg:order-last sm:order-first">
                    <x-th.img-ask-specialist />
                </div>
                
            </div>

        </div>
    </div>

    <section id="ask-your-question" class="mt-8 flex flex-col items-center text-center lg:max-w-7xl lg:mx-auto">
        <!-- <button class="text-white uppercase border-2 border-[#EEEEEE] cursor-none p-3 rounded bg-[#EEEEEE]">Pergunta</button> -->
        <x-th.h2-color color="text-blueth">Faça sua pergunta?</x-th.h2-color>

        <div class="lg:hidden flex flex-col justify-center items-center">
            <div class="max-w-4xl mx-auto relative"
               x-data="{ activeSlide: 1, slides: [1, 2, 3, 4] }" >
                <!-- Buttons -->
                
                <!-- Slides -->
                <div x-show="activeSlide === 1"
                    class="p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">1</div>
                    <div class="flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Pergunte</p>
                        <p>Escreva sua pergunta sobre saúde de forma breve e direta. Lembre-se de ser claro e objetivo.</p>
                    </div>
                </div>

                <div x-show="activeSlide === 2"
                    class="p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">2</div>
                    <div class="flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Envie</p>
                        <p>Os moderadores verificam sua pergunta e distribuem entre os especialistas disponíveis.</p>
                    </div>
                </div>

                <div x-show="activeSlide === 3"
                    class="p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">3</div>
                    <div class="flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Aguarde</p>
                        <p>Você pode ser respondido por mais de um especialista, neste momento você só precisa aguardar.</p>
                    </div>
                </div>

                <div x-show="activeSlide === 4"
                    class="p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">4</div>
                    <div class="flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Leia</p>
                        <p>Quando sua resposta for postada, você será notificado por e-mail.
                        </p>
                    </div>
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

                <div class="w-full flex items-center justify-center px-4 mt-4">
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
        </div>


        <div class="hidden lg:block flex flex-col justify-center items-center ">
            <div class=" mx-auto relative grid grid-cols-4"
               {{-- x-data="{ activeSlide: 1, slides: [1, 2, 3, 4] }" --}}
                >
                <!-- Buttons -->
                
                <!-- Slides -->
                <div
                    class=" p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">1</div>
                    <div class="w-full h-72 flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Pergunte</p>
                        <p>Escreva sua pergunta sobre saúde de forma breve e direta. Lembre-se de ser claro e objetivo.</p>
                    </div>
                </div>

                <div
                    class=" p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">2</div>
                    <div class="w-full h-72 flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Envie</p>
                        <p>Os moderadores verificam sua pergunta e distribuem entre os especialistas disponíveis.</p>
                    </div>
                </div>

                <div
                    class=" p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">3</div>
                    <div class="w-full h-72 flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Aguarde</p>
                        <p>Você pode ser respondido por mais de um especialista, neste momento você só precisa aguardar.</p>
                    </div>
                </div>

                <div
                    class=" p-8 text-center rounded-lg relative flex flex-col items-center">
                    <div class="py-1 px-4 rounded-t-md border-blueth border-l-2 border-t-2 border-r-2 border-b-transparent text-3xl font-extrabold  text-blueth">4</div>
                    <div class="w-full h-72 flex flex-col space-y-4 bg-blueth rounded-3xl p-8 text-white">
                        <p class="font-medium border-b border-b-greenth pb-2 uppercase text-3xl font-thunder">Leia</p>
                        <p>Quando sua resposta for postada, você será notificado por e-mail.
                        </p>
                    </div>
                </div>

                <!-- Prev/Next Arrows -->
                <!-- <div class="absolute inset-0 flex">
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
                </div> -->

                <div class="w-full flex items-center justify-center px-4 mt-4 ">
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
        </div>
        
    </section>

    <section id="ask-here" class="space-y-2 lg:max-w-7xl lg:mx-auto">
        <form action="{{url('enviar_email')}}" method="post" >
            @csrf
            <div class="my-10 grid grid-cols-1 md:grid-cols-3 ">
                <div class="ml-3 mt-2 space-y col-span-1"><input placeholder="Nome Sobrenome" name="name" type="text" class=" w-full rounded-3xl"></div>
                <div class="ml-3 mt-2 space-y col-span-1"><input placeholder="(DDD) 9 0000-0000" name="numero" type="tel" maxlength="15" onkeyup="handlePhone(event)" class="w-full rounded-3xl"></div>
                <div class="ml-3 mt-2 space-y col-span-1"><input placeholder="exemplo@email.com" name="email" type="email" class="w-full rounded-3xl"></div>
            </div>
            <div class="flex flex-col mt-2 items-center text-start space-y-4">
                <div class="bg-blueth rounded-3xl w-full">
                    <div class="rounded-3xl bg-white h-48 border-2 justify-end border-blueth">
                        <textarea name="content" id="ask-description" placeholder="Escreva aqui"
                            class="font-3xl border-transparent border-none outline-0 bg-transparent w-full p-8"></textarea>
                            <button type="submit" class="hidden xl:block xl:float-right bg-greenth py-3 px-6 m-3 text-white rounded-xl">Publicar</button>
                    </div>
                    <input class="hidden" type="checkbox" id="jj-1">
                    <label for="jj-1" class="text-white text-md underline py-2 block">Informações importantes</label>
                    <p class="jj text-white">Informações importantes.</p>
                </div>
                <button type="submit" class="xl:hidden p-5 bg-greenth py-3 px-6 m-3 text-white rounded-xl">Publicar</button>
            </div>
        </form>
    </section>

    <section id="ask-here" class="space-y-2 mt-10 flex justify-center border-t border-t-[#929292] lg:max-w-7xl lg:mx-auto">
        <div class="my-10 ">
            <hr/>
            <div class="mt-8 p-2 grid grid-cols-2 rounded-3xl border-2 border-blueth space-y-8 items-center align-center">
                <div class="p-1 mb-4">
                    <h2 class="font-bold p-2 mb-4 text-4xl text-blueth">
                        FAQ
                    </h2>
                    <a href="{{ url('faq')}}" class="bg-greenth py-3 px-6 rounded-xl text-blueth">Clique aqui</a>
                </div>
                <div>
                    <x-th.img-faq  />
                </div>
            </div>
        </div>
    </section>

    <x-th.footer />
</x-public-layout>

<script>

    const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
    }

</script>