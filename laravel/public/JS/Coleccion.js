var _token = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        
        fetch_customer_data(query ='',ambitos=null);
        $('#search').on('keyup',function(){
        var ambitos=document.getElementById('select').value;
        var query = $(this).val();
        fetch_customer_data(query,ambitos);
        }); 

        $('select').on('change',function(){
                var query = document.getElementById('search').value;
                console.log(query);
                ambitos=Number($(this).val());
                fetch_customer_data(query,ambitos);
                });
            });
    function fetch_customer_data(query,ambitos){
        console.log(ambitos)
        $.ajax({
        /* Direccion del web.php */
            url: 'coleccionFiltrar',
            method: 'post',
            data: {
                query:query,
                ambitos:ambitos,
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

/* PAra el select */
$(document).ready(function() {
        $('.mdb-select').formSelect();
});