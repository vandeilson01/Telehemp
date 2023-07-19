@php 

  use Illuminate\Support\Facades\Storage;

@endphp

<x-app-layout>
 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ver Especialista') }}
        </h2>
    </x-slot>

    <div id="root">
         
        <div class="px-4 md:px-10 mx-auto w-full -m-34">
          <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">

                @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                @endif

                 
                <div class="rounded-t mb-0 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-2 max-w-full flex-grow flex-1"
                    > 
                      <div class="pull-right">
                            <a class="bg-transparent float-right hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ url('categoria') }}">
                              <svg class="w-[24px] h-[24px] text-blueth-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                              </svg>
                            </a>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                   
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="block w-full overflow-x-auto p-2">
                                                     
                            
                            <form>
                            <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                            <input disabled type="text" value="{{$categorias->name}}" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome" required>
                                        </div>

                                        <div>
                                            <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagem</label>
                                            @if(!empty($categorias->img))
                                              <img class="w-full h-full mt-2" src="https://telehempphotoscategoria.sfo3.cdn.digitaloceanspaces.com/categorias/{{$categorias->img}}" />
                                            @else
                                              <p>Adicione uma imagem</p>
                                            @endif
                                        </div>

                                    </div>
                                    
                                  </div>
                                  
                              </div>
                               
                            </form>

                            </div>

                        </div>

                </div>
              </div>
            </div>

          </div>

          </div>
      </div>
    </div>
</x-app-layout>
 
 