$(document).ready(function() {
    $('#sel-bs').formSelect({
    defaultMaterialInput: true
    });
    new Vue({
        el: '.card',
        color:cambioColor(event),
        methods: {
            cambioColor: function(event) {

                console.log('entra');
                console.log(targetId); // returns 'foo'
            }
        }
    })
}) 