// register modal component
var _token = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function() {
    fetch_woman_data();


    // start app
    /* new Vue({
        el: '#app',
        data: {
        showModal: false,
        mujeres: [],
        },
        methods: {
            filtrarPorJuego: function(juego){
                this.$http.post('_ajax_response.php', {
                    juego: juego
                }).then(function(response){ 
                    this.personajes = response.body;
                }, function(){
                    alert('Error!')
                });
            },
            limpiarBusqueda: function(){
                this.$http.get('_ajax_response.php').then(function(response){
                    this.personajes = response.body;
                }, function(){
                    alert('Error!');
                });
            }
        },
        created: function(){
            this.$http.get('_ajax_response.php').then(function(response){
                this.mujeres = response.body;
                }, function(){
                    alert('Error!');
            });
        }
    })

})  */

function fetch_woman_data(mujerId){
        $.ajax({
        /* Direccion del web.php */
            url: 'biografia',
            method: 'post',
            data: {
            mujerId:mujerId,
            /* token necesario para el post */
            _token:_token
            
            },
            dataType: 'json',
            success:function(data)
            {
                $('.modal-container').html(data.biografia_data);
            }
        });
    }
)};
