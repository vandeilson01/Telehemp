<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Telehemp') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
              
          $('.delete').on('click', function() {
              Swal.fire({
                title: 'Deseja Deletar ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'SIM',
                cancelButtonText: 'NÃO',
              }).then((result) => {
                if (result.isConfirmed) {
                  var id = $(this).attr('data-id');

                  $.ajax({
                      url: "{{url('especialist/destroy/')}}",
                      type: "POST",
                      data: {
                          Mid: id,
                          _token: '{{csrf_token()}}'
                      },
                      dataType: 'json',
                  });

                  Swal.fire({
                    title: 'Deletado com sucesso.',
                    icon:'success',
                    showConfirmButton: false,
                })

                  location.href='/especialist';

                }
              })
            });

            // 



            $('.delete-ca').on('click', function() {
              Swal.fire({
                title: 'Deseja Deletar ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'SIM',
                cancelButtonText: 'NÃO',
              }).then((result) => {
                if(result.isConfirmed) {
                  var id = $(this).attr('data-id');

                  $.ajax({
                      url: "{{url('categoria/destroy/')}}",
                      type: "POST",
                      data: {
                          Mid: id,
                          _token: '{{csrf_token()}}'
                      },
                      dataType: 'json',
                  });

                  Swal.fire({
                    title: 'Deletado com sucesso.',
                    icon:'success',
                    showConfirmButton: false,
                })

                  location.href='/categoria';

                }
              })
            });

            // 


           

            //animation

            

           
            // Adiciona o valor retornado da boxTop a cada div
            // $('#azul').html('<p>' + boxTop('#azul') + 'px </p>');
            // $('#verde').html('<p>' + boxTop('#verde') + 'px </p>');
            // $('#roxo').html('<p>' + boxTop('#roxo') + 'px </p>');




      </script>
    </body>
</html>
