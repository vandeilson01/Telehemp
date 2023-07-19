@php 
    use App\Models\Categorias;

    $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');

    $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');

@endphp
 
      
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>

	<!-- <label for="brand">Categorias</label> -->
	<select id="frm_brand" class="mb-1" style="width:100%;">
    <option value="categorias">Categorias</option>						
		@if(!empty(Categorias::all()))
          @foreach(Categorias::all() as $get)
            <option data-image="{{$get->img}}" value="{{(str_replace($comAcentos, $semAcentos, $get->name))}}">
              {{$get->name}}
            </option>
        @endforeach
    @endif
	</select>
<script>

	function formatState (state) {
        if (!state.id) {
            return state.text;
        }

        var optimage = $(state.element).attr('data-image'); 

        var item = "";
        item +='<span class="flex">';
        if(state.text != 'Categorias'){
            item +='<img src="https://telehempphotoscategoria.sfo3.cdn.digitaloceanspaces.com/categorias/'+optimage+'" class="img-flag pr-1 '+state.text.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "")+' " /> ';
        } 
        item += state.text + '</span>';
            
        var $state = $(item);
        return $state;
	};

	$("#frm_brand").select2({
		templateResult: formatState,
	});
 

    function myFunction(){
        console.log('njdsnd');
        $this = $(this);
        $('.especialita').hide();
        var name = $('.InputPes').val();
        $('.'+name).show();

        if($('.'+name.toLowerCase())){
            $('.'+name.toLowerCase()).show();
        }

        if(name == null){
            $('.especialita').show();
        }

    }

    $("#frm_brand").change(function() {
        console.log($('#frm_brand').val());

        $('.especialita').hide();
        $('.'+$('#frm_brand').val()).show();

        if($('#frm_brand').val() == 'categorias'){
            $('.especialita').show();
        }
    });

</script>
 
<style>
.img-flag
{
	width:25px
}

.select2{
    background: rgb(42, 46, 128 );
    border-radius: 10em;
    height: 50px;
    z-index: 10;
} 
.select2-container--default .select2-selection--single{
    margin-top: 10px;
    background: transparent;
    border: none;
    color: white;
} 
.select2-container--default .select2-selection--single .select2-selection__arrow{
    margin-top: 10px;
    color: white;
    
} 

.select2-container--default .select2-selection--single .select2-selection__rendered{
    color: white !important;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b{
    border-color: white transparent transparent transparent ;
}

.select2-container--open .select2-dropdown--below{
    background: #E5E5E5;
    padding: 2%;
    border-radius: 0 0 1em 1em;
    border: 4px solid rgb(42, 46, 128);
    border-top: none;
    margin-top: -16px;
}

.select2-results__option[aria-selected]{
    color: #1D1D1D;
    border-bottom: 1px solid #ADADAD;
}
.select2-results__option[aria-selected]:last-child{
    border-bottom: none;
    border-radius: 0 0 1em 1em;
}

</style>