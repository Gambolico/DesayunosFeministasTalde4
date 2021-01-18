var _token = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        var cant=0;
        fetch_customer_data(query ='',ambitos=null,ordenarPor='Mujeres_Id', cant);
        $('.mdb-select').formSelect();
        /* Al escribir en el buscador... */
        $('#search').on('keyup',function(){
        var ordenarPor = document.getElementById('ordenarPor').value;
        var ambitos=document.getElementById('select').value;
        var query = $(this).val();
        fetch_customer_data(query,ambitos,ordenarPor,cant);
        }); 
        /* Al seleccionar en el select  */
        $('#select').on('change',function(){
                var ordenarPor = document.getElementById('ordenarPor').value;
                var query = document.getElementById('search').value;
                console.log(query);
                var ambitos = document.getElementById("select").value
                ambitos=Array($(this).val());
                fetch_customer_data(query,ambitos,ordenarPor,cant);
                });
        /* Ordenar por  */
        $('#ordenarPor').on('change',function(){
                var ordenarPor = document.getElementById('ordenarPor').value;
                fetch_customer_data(query,ambitos,ordenarPor,cant);
        });

        /* Coger valor de la cantidad */
        $("#cantidadCartas").on('change',function(){
                cant=document.getElementById('cantidadCartas').value;
                fetch_customer_data(query,ambitos,ordenarPor,cant);
                

        });

        /* Coger valor de la cantidad */
        $("#addCartas").on('click',function(){
                cant=Number(cant)+Number(cant);
                console.log(cant);
                fetch_customer_data(query,ambitos,ordenarPor,cant);
        });


        /* Radio button, para cambiar de activo a no activo y viceversa */
        $('#radioBtn a').on('click', function(){
                var sel = $(this).data('title');
                var tog = $(this).data('toggle');
                $('#'+tog).prop('value', sel);
                
                $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
                $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
        })
        /* Scrolling down */
});    
    function fetch_customer_data(query,ambitos,ordenarPor,cant){
        console.log(ordenarPor);
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
