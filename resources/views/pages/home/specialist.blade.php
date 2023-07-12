
<x-public-layout>
    <div class="flex flex-col items-center lg:max-w-7xl lg:mx-auto">
        <div id="header-background" class="w-full rounded-[36px] bg-gradient-to-br from-blueth via-blueth to-greenth p-8">
            @include('layouts.navigation-public')

            <div class="espl grid grid-cols-1 md:grid-cols-2  mx-auto px-4">

                <div class="my-5 p-5">
                    <h2 class="font-bold mx-5 text-6xl my-5 text-white">
                        Especialistas
                    </h2>

                    <p class="text-white mx-5 ">
                        Conheça os especialistas que<br/> fazem parte da nossa plataforma.
                    </p>

                </div>
                <div class="mt-5 md:order-last lg:order-last sm:order-first">
                    <x-th.img-specialist />
                </div>
            </div>

        </div>
    </div>

    <section id="especialistas-alt" class="my-6 flex flex-col items-center text-center">
    <div class="grid grid-cols-1 content-center my-6 md:grid-cols-2	">
         
         <input onkeyup="myFunction()" class="mb-1 InputPes bg-transparent focus:border-blueth mr-1 md:mr-0 lg:w-full rounded-3xl h-12 border-1 border-blueth" placeholder="Pesquisar..." type="text">
     
         <!-- <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom" class="text-center hidden lg:flex mt-2 w-32 h-12 rounded-3xl text-white bg-blueth hover:bg-blueth focus:ring-4 focus:outline-none focus:ring-blueth font-medium text-sm px-4 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Categorias <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

         <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom" class="text-center lg:hidden mt-2 h-12 rounded-3xl text-white bg-blueth hover:bg-blueth focus:outline-none focus:ring-blueth font-medium text-sm px-4 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Categorias <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button> -->
  
         <x-th.select-categorias  />
          
         <div id="dropdownUsers" class="z-10 hidden bg-[#E5E5E5] w-auto rounded-lg shadow dark:bg-gray-700">
             <ul class="text-sm font-medium text-gray-900 border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="one" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class=" w-6 h-6 rounded-full" src="{{url('images/categorias/anestesiologista.svg')}}">
                         <label for="one" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Anestesiologista</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="two" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class=" w-6 h-6 rounded-full" src="{{url('images/categorias/familia.svg')}}">
                         <label for="two" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Família</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="tree" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/farmaceutico.svg')}}">
                         <label for="tree" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Farmacêutico(a)</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="four" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/generalista.svg')}}">
                         <label for="four" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Generalista</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="five" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/neurologista.svg')}}">
                         <label for="five" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Neurologista</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="six" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/nutrologo.svg')}}">
                         <label for="six" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Nutrólogo(a)</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="seven" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/ortopedista.svg')}}">
                         <label for="seven" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Ortopedista</label>
                     </div>
                 </li>
                 <li class="w-full rounded-t-lg dark:border-gray-600">
                     <div class="flex p-1 border-b-2 border-[#ADADAD] hover:bg-[#EEEEEE]">
                         <input id="eight" type="radio" value="" name="list-radio" class="hidden w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <img class="w-6 h-6rounded-full" src="{{url('images/categorias/psicologo.svg')}}">
                         <label for="eight" class="w-full ml-2 p-1 text-start  font-medium text-gray-900 dark:text-gray-300">Psicólogo</label>
                     </div>
                 </li>
             </ul>
         </div>
        </div>

        <div class="all-esp grid grid-cols-1 content-center md:mx-0 md:grid-cols-2 ">
            <x-th.specitwo />
        </div>

        <div class="container border border-b-[#000000] mt-10 my-10 grid grid-cols-1 md:grid-cols-1"></div>
       
        <div class="grid grid-cols-1 content-center md:grid-cols-2 ">

            <div class="my-10 m-1">
                <hr/>
                <div class="mt-8 p-2 grid grid-cols-2 rounded-3xl border-2 border-blueth space-y-8 items-center align-center">
                    <div class="p-3 mb-4">
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
            
            <div class="my-10 m-1">
                <hr/>
                <div class="mt-8 p-2 grid grid-cols-2 rounded-3xl border-2 border-blueth space-y-8 items-center align-center">
                    <div class="p-1 mb-4 text-start">
                        <h2 class="font-bold  mb-4 text-blueth text-3xl">
                        Pergunte aos<br/> Especialistas
                        </h2>
                        <a href="{{ url('pergunte-aos-especialistas')}}" class="bg-greenth py-3 px-6 rounded-xl text-blueth">Clique aqui</a>
                    </div>
                    <div>
                        <x-th.img-ask-specialist />
                    </div>
                </div>
            </div>
            
         </div>
    </section>

    <x-th.footer />
 
</x-public-layout>
