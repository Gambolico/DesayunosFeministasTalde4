$(document).ready(function() {

    new Vue({
        el: '#containerBiografia',
        data: {
                ambito: 'N/A',
                continente: 'N/A',
                zona:'N/A',
                nac:'N/A',
                muer:'N/A',
                message:'N/A',
                imageLink:''
            
        },
        mounted() {
            //this.getDisabledDate();
            /* Miramos todos y cada uno de los ambitos y extraemos la informacion para si esta lleno el valor, calbiarlo */
                
                /* Ambito */
                var variable1=document.getElementById("ambito").name
                if(variable1!=''){
                    this.ambito=variable1;
                    this.ambitosImg(variable1);
                }
                /* Continente */
                var variable2=document.getElementById("continente").name
                if(variable2!=''){
                    this.continente=variable2;
                    
                }
                /* Zona */
                var variable3=document.getElementById("zona").name
                if(variable3!=''){
                    this.zona=variable3;
                }
                /* Nacimiento */
                var variable4=document.getElementById("nac").name
                if(variable4!=''){
                    this.nac=variable4;
                }
                /* Continente */
                var variable5=document.getElementById("muer").name
                if(variable5!=''){
                    this.muer=variable5;
                }
                return this.ambito,this.continente, this.zona, this.nac, this.muer

                


            },
        methods: {
            ambitosImg: function(variable1){
                console.log('entra');
                console.log(variable1)
                /* Vamos a sacar una bandera dependiendo del continente */
                switch (variable1) {
                    case 'História':
                        console.log('entta histo')
                        this.imageLink='/images/ambitos/Historia.png'
                        console.log(this.imageLink)
                    break;
                    case 'Derecho':
                        this.imageLink='/images/ambitos/Derecho.png'
                      break;
                    case 'Antropología':
                        this.imageLink='/images/ambitos/Antropologia.png'
                      break;
                    case 'Geografía':
                        this.imageLink='/images/ambitos/Geografia.png'
                      break;
                    case 'Filosofía':
                        this.imageLink='/images/ambitos/Filosofia.png'
                        break;
                    case 'Psicología':
                        this.imageLink='/images/ambitos/Psicologia.png'
                      break;
                    case 'Economía':
                        this.imageLink='/images/ambitos/Economia.png'
                    break;
                    case 'Sociología':
                        this.imageLink='/images/ambitos/Sociologia.png'
                    break;
                    case 'Pedagogía':
                        this.imageLink='/images/ambitos/Pedagogia.png'
                    break;
                }
            }
        }
    });
});