/* apartado ajax */
let _token = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        fetch_customer_data();
        $('#search').on('keyup',function(){
        var query = $(this).val();
        console.log(query)
        fetch_customer_data(query);
        }); 
    });
    function fetch_customer_data(query =''){
        
        $.ajax({
        /* Direccion del web.php */
            url: 'coleccionFiltrar',
            method: 'post',
            data: {
                /* QUery lo que coje */
                query:query,
                /* token necesario para el post */
                _token:_token
                
                },
            dataType: 'json',
            traditional: true,
            success:function(data)
            {
                $('#carta').html(data.cartas_data);
                $('#cantidad').text(data.total_data);
            },
        });
     }


