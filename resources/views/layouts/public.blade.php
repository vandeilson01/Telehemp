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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



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

    <x-terms/>

    <a href="https://api.whatsapp.com/send/?phone=%2B55554598054742&text=Ol%C3%A1%21+gostaria+de+tirar+algumas+duvidas+sobre+o+servico++TeleHemp%2C+poderia+me+auxiliar%3F&type=phone_number&app_absent=0" class="float-wha" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
 
    <script> 

        AOS.init({
        duration: 1000
        });

        // AOS.init({
        //    offset: 200,
        //    duration: 600,
        //    easing: 'ease-in-sine',
        //    delay: 100,
        //  });

        
        //Chama a função para verificar se inicialmente a Modal vai ser exibida ou não  
        AceitaCookies();
        
        //Clica no botão p/ aceitar os Cookies então chama a função para setar a expiração e esconde a Modal 
        $('.accepted-cookies').click(function() {
            setCookie();
            $('.message-cookies').addClass('removeone');
        });
        
        //Seta uma expiração no document.cookie e manda "true" p/ criação do cookie 
        function setCookie() {
            var tempExp = 'Wed, 30 Nov 2035 08:50:17 GMT';
            document.cookie = 'AceitaCookies=true;expires='+tempExp+';path=/';
        }
        
        //Função que chama a outra função que cria o cookie e exibe a Modal se não existir cookie
        function AceitaCookies() {
            //Chama a função que cria cookie
            var cookie = getCookie("AceitaCookies");
        
            //Exibe Modal
            if(cookie == "true") {
                $('.message-cookies').removeClass('addone');
                $('.message-cookies').addClass('removeone');
            } 
        }

        $('#acceptBtn').on('click', function(){
            $('.message-cookies').removeClass('removeone');
            $('.message-cookies').hide();
            
        });

        $('#declineBtn').on('click', function(){
            $('.message-cookies').removeClass('removeone');
            $('.message-cookies').hide();
        })
        
        //Pega o nome do cookie
        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) return parts.pop().split(";").shift();
        }
        
    </script>

</body>
</html>
