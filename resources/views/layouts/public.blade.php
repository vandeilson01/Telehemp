<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-ML3RBZS');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TeleHemp - Sua ponte para a saúde canábica.</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="manifest" href="/manifest.webmanifest">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <meta name="description" content="TeleHemp - Sua ponte para a saúde canábica.">
    <meta name="keywords" content="saúde, canábis, CBD, THC, planta medicinal, uso terapêutico, cannabis medicinal, tratamento com cannabis, óleo de cannabis, extrato de cannabis, efeitos medicinais, dor crônica, ansiedade, epilepsia, esclerose múltipla, glaucoma, náusea, vômitos, tratamento alternativo, cannabis e câncer, legalização da cannabis, benefícios da cannabis">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="font-sans antialiased">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML3RBZS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="min-h-screen bg-[#E5E5E5] py-8 px-4">
        <!-- Page Heading -->
    {{--    @if (isset($header))--}}
    {{--    @endif--}}
    {{--                {{ $header }}--}}

        <!-- Page Content -->
        {{ $slot }}
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script>


            function boxTop(idBox) {
                var boxOffset = $(idBox).offset();
                return boxOffset.top;
            }

            $(document).scroll(function() {
              
              var documentTop = $(this).scrollTop();
                
                if (documentTop >  10) {
                    $('#leading').addClass('top_text_ini');
                } else {
                    $('#leading').removeClass('top_text_ini');
                }
                
                if (documentTop > boxTop('#leadingtwo') - 150) {
                    $('#leadingtwo').addClass('left_text_ini');
                } else {
                    $('#leadingtwo').removeClass('left_text_ini');
                }
                
                if (documentTop > boxTop('#roxo') - 120) {
                    $('#roxo').addClass('animar');
                } else {
                    $('#roxo').removeClass('animar');
                }	
            });




            // termos


            const cookieBox = $(".wrapper"),
            buttons = $(".button");

          
            
        
            buttons.on("click", function() {
                cookieBox.remove();
                alert('nsjd');

                //if button has acceptBtn id
                if (buttons.id == "acceptBtn") {
                    //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
                    document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
                }
            });
            
            
            // $("load", executeCodes);
    </script>
 
    <x-terms/>

</body>
</html>
