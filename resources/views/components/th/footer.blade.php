<footer class="max-w-7xl mx-auto mt-16 pd-16 grid grid-cols-1 lg:grid-cols-3 lg:justify-items-start lg:items-start justify-items-center items-center text-center lg:text-left space-y-4">
    <div class="flex flex-col items-center">
        <x-th.telehemp-logo-footer class="w-64 fill-blueth" />
        <p class="text-gray-500">Para pacientes. Para médicos. Para todos.</p>
    </div>

    <ul class="space-y-2">
        <li><a class='text-blueth underline font-bold' href="#">TeleHemp</a></li>
        <li><a class='text-blueth underline' href="#quem-somos">Quem somos</a></li>
        <li><a class='text-blueth underline' href="{{url('especialistas')}}">Especialistas</a></li>
        <li><a class='text-blueth underline' href="{{url('faq')}}">FAQ</a></li>
        <li><a class='text-blueth underline' href="{{url('pergunte-aos-especialistas')}}">Pergunte ao especialista</a></li>
    </ul>

    <div class="lg:flex lg:flex-col lg:w-full space-y-4">
        <p class="font-bold uppercase text-blueth">Novidades, Promoções e muito mais</p>

        <form action="{{url('novidades_email')}}" method="POST" class="relative flex w-full px-8 lg:px-0">
            @csrf
            <input class="bg-[#E5E5E5] border-greenth border-2 rounded-xl p-2 w-full" type="email" name="email" id="email" placeholder="Deixe seu melhor e-mail aqui">
            <button class="border-2 border-blueth bg-blueth text-white rounded-xl p-2 absolute right-0" type="submit">Inscreva-se</button>
        </form>

        <div id="social-media-icons" class="flex gap-4 justify-center lg:justify-start w-full">
            <x-th.social-facebook class="h-6 w-auto stroke-blueth" />
            <x-th.social-instagram class="h-6 w-auto stroke-blueth" />
        </div>
    </div>

    <hr class="divide-x-reverse lg:hidden">

    <p class="text-gray-400 uppercase text-sm lg:col-span-3">© Telehemp. Copyright by Telehemp</p>
</footer>
