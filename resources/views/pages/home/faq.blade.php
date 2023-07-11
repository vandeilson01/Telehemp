<x-public-layout>
    <div class="flex flex-col items-center lg:max-w-7xl lg:mx-auto">
        <div id="header-background" class="w-full rounded-[36px] bg-gradient-to-br from-blueth via-blueth to-greenth p-8">
            @include('layouts.navigation-public')

            <div class="espl grid grid-cols-1 text-center md:grid-cols-2 mx-auto px-4">

                <div class="my-5">

                    <h2 class="font-bold mx-5 p-5 text-9xl my-5 text-white">
                        FAQ
                    </h2>

                    <p class="text-white mx-5 p-5 my-2">
                        Perguntas frequentes
                    </p>
                </div>

                <div class="mt-5 md:order-last lg:order-last sm:order-first">
                    <x-th.img-faq width="615" height="388" />
                </div>
                
            </div>

        </div>
    </div>

    <section id="faqp" class="faqp mt-10  rounded-3xl section-bg text-blueth border-t border-blueth lg:max-w-7xl lg:mx-auto">
		<div class="container ">
            <!--  -->
            <x-th.faqs />
        </div>
	</section>

    <section id="ask-here" class="space-y-2 mt-10 flex justify-center border-t border-t-[#929292] lg:max-w-7xl lg:mx-auto">
        <div class="my-10 ">
            <hr/>
            <div class="mt-8 p-3 pl-1 grid grid-cols-2 rounded-3xl border-2 border-blueth space-y-8 items-center align-center">
                <div class="">

                    <h2 class="font-bold p-3 mb-4 text-4xl text-blueth">
                        Pergunte aos<br/> Especialistas
                    </h2>
                    <a href="{{url('pergunte-aos-especialistas')}}" class="bg-greenth p-3 mb-1 ml-3 rounded-xl text-blueth">Clique aqui</a>

                </div>

                <x-th.img-ask-specialist />

            </div>
        </div>
    </section>
	 

    <x-th.footer />
</x-public-layout>
