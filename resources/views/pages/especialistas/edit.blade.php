@php 
    use App\Models\Categorias;
@endphp

<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Especialista') }}
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
                            <a class="bg-transparent float-right hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="{{ url('especialist') }}">
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
                                     
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        
                            <form action="{{ url('especialist/update',$especialistas->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                        
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div>
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                            <input type="text" value="{{$especialistas->name}}" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome" required>
                                        </div>

                                        <div>
                                            <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sobrenome</label>
                                            <input type="text" value="{{$especialistas->surname}}" name="surname" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sobrenome" required>
                                        </div>

                                        <div>
                                            <label for="especialit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidade</label>
                                            <select id="especialit" name="especialit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                              <option selected>{{$especialistas->especialit}}</option>
                                              @if(!empty(Categorias::all()))
                                                  @foreach(Categorias::all() as $get)
                                                      <option value="{{$get->name}}">{{$get->name}}</option>
                                                  @endforeach
                                              @endif
                                          </select>
                                        </div>

                                        <div>
                                            <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalhes</label>
                                            <textarea name="details" id="details" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$especialistas->details}}</textarea>
                                        </div>


                                        <div>
                                            <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagem</label>
                                            <input type="file" value="{{$especialistas->img}}" name="img" id="img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @if(!empty($especialistas->img))
                                              <img class="w-full h-86 mt-2" src="{{url('especialista/img/'.$especialistas->img)}}" />
                                            @else
                                              <p>Adicione uma imagem</p>
                                            @endif
                                        </div>

                                        <div>
                                            <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon</label>
                                            <input type="file" value="{{$especialistas->icon}}" name="icon" id="icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            @if(!empty($especialistas->icon))
                                              <img class="w-16 h-16 mt-2"  src="{{url('especialista/icon/'.$especialistas->icon)}}" />
                                            @else
                                              <p>Adicione uma imagem</p>
                                            @endif
                                        </div>

                                        <div>
                                            <label for="valid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Verificado?</label>
                                            <input type="checkbox" value="1" name="valid" id="valid" class="bg-gray-50 border border-blueth text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                              {{$especialistas->valid!=null ? 'checked' : ''}} >
                                        </div>
                                        
                                    </div>

                                    
                                  </div>
                                  
                                  
                              </div>

                              <div>
                                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Salvar</button>
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
 