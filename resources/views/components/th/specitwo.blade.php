@php 
    use App\Models\Especialistas;

    $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');

    $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');

@endphp 
@if(!empty(Especialistas::all()))
    @foreach(Especialistas::all() as $row)
        <div class="especialita {{$row->name}} {{$row->surname}} {{str_replace($comAcentos, $semAcentos, $row->especialit)}} m-1 mt-5  grid grid-cols-2 rounded-3xl border-t-2 border-l-2 border-r-2 border-blueth">
            <div class="esp-imagem my-5 mx-5 overflow-hidden">
                <img class="bef" src="https://telehempphotoscategoria.sfo3.cdn.digitaloceanspaces.com/especialistas/icon/{{$row->icon}}">
                <div class="rounded-[10px] border border-blueth">
                    <img src="https://telehempphotoscategoria.sfo3.cdn.digitaloceanspaces.com/especialistas/img/{{$row->img}}"/>
                </div>
            </div>
            <div class="esp-dados my-3 text-start">
                @if(!empty($row->valid))
                    <img class="rounded text-greenth mt-2" src="{{url('verificado.svg')}}">
                @endif
                <h2 class="text-4xl overflow-hidden font-bold mb-4 overflow-hidden mt-4 text-blueth"><span class="pname">{{$row->name}}</span><br/><span class="sname">{{$row->surname}}</span></h2>
                <p class="underline">{{$row->especialit}}</p>
                <br/><br/>
                <button onclick="javascript:location.href='https://telehemp.vsaudeapp.com.br/schedule'" class="rounded-[10px] bg-greenth p-1 border border-blueth text-blueth font-bold">Agende</button>
            </div>
        </div>
    @endforeach
@endif
