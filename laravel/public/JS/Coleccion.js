var _token = $('meta[name="csrf-token"]').attr('content');
var primeraVez;
    $(document).ready(function(){
        comprobarPrimeraVez();

        $('.mdb-select').formSelect();
        /* Al escribir en el buscador... */

        $('#search').on('keyup',function(){
        fetch_customer_data(cant);
        }); 
        /* Al seleccionar en el select  */
        $('#select').on('change',function(){
                fetch_customer_data(cant);
                });
        /* Ordenar por  */
        $('#ordenarPor').on('change',function(){
                fetch_customer_data(cant);
        });

        /* Coger valor de la cantidad */
        $("#cantidadCartas").on('change',function(){
                if (document.getElementById('cantidadCartas').value > cant){
                        cant=document.getElementById('cantidadCartas').value;
                }
                fetch_customer_data(cant);
                

        });

        var timer;
        $("document").ready(function(){

                var callFunction = true;
               /* Coger valor de la cantidad */
               
                window.onscroll = function(e) {
                clearTimeout(timer);
                timer = setTimeout(function() {
                        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                                console.log('entra')
                                console.log(cant + 'antigua');
                                cant=parseInt(cant)+parseInt(document.getElementById('cantidadCartas').value);
                                console.log(cant + 'nueva');
                                console.log('query ' + query);
                                fetch_customer_data(cant);
                                callFunction=false;
                        }
                }, 300);
                
            };   
        });

        
  /*       $("#addCartas").on('view',function(e){
               
               
        }); */
});    

function comprobarPrimeraVez(){
        /* Miramos si es la primera vez que entra a la seccion */
        
        console.log('entra al primeravez');
        if(primeraVez==null){
                console.log('entra aun siendo null');
                fetch_customer_data(cant = 20);
                primeraVez='no esta empty';
        }
        
}
function sumarCant(){
        /* Miramos si es la primera vez que entra a la seccion */
        
        
}
    function fetch_customer_data(cant){
        
        ordenarPor = document.getElementById('ordenarPor').value;
        query = document.getElementById('search').value;
        ambitos = document.getElementById("select").value

        $.ajax({
        /* Direccion del web.php */
            url: 'coleccionFiltrar',
            method: 'post',
            data: {
                query:query,
                ambitos:ambitos,
                ordenarPor:ordenarPor,
                cant:cant,
                /* token necesario para el post */
                _token:_token
                
                },
            dataType: 'json',
                traditional: true,
            success:function(data)
            {
                $('#carta').html(data.cartas_data);
                $('#cantidad').text(data.total_data);
            }
               });
}
