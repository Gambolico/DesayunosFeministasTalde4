// register modal component

$(document).ready(function() {



    // start app
     new Vue({
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

}) ;



