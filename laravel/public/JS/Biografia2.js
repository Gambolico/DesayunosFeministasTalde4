$(document).ready(function() {
    console.log('entra al b2');

    new Vue({
        el: '#containerBiografia',
        data(){
            return{
                ambito: meterVar(),
                continente: '',
                zona:'',
                nac:'',
                muer:'',
                message:''
            }
            
        },
        methods: {
            meterVar: function(){
                var variable=document.querySelector("input[name=ambito]").value
                if(variable!=''){
                    this.ambito=variable;
                }else{
                    this.ambito='';
                }
                console.log('holi'+variable);
                
                return this.ambito;
            }

        },
        created: function (){
           
           
        }

    });
});