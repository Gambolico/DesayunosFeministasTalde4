@extends('layout.parent')

@section('title', 'Login')


<style>
/* BASIC */

html {
    background-color: #56baed;
}

body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
}

/* STRUCTURE */
.wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    height: 80%;
}

#formContent h3{
    margin-top: 15px;
    margin-bottom: 15px;
}
#formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 100%;
    max-width: 450px;
    position: relative;
    padding: 1px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
}

#formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
}

/* TABS */

/* FORM TYPOGRAPHY*/
input[type=button], input[type=submit], input[type=reset]  {
    background-color: #261343;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-top: 25px;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #5c2ba6;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text], input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
    background-color: #ede9f5;
    border-bottom: 2px solid #261343;
}

input[type=text]:placeholder {
    color: #cccccc;
}

/* OTHERS */
*:focus {
    outline: none;
} 

.backgroundGeneral{
    background-image: url('https://desayunosfeministascantabria.files.wordpress.com/2018/10/cropped-logotipo-2.jpg');
    background-repeat: no-repeat;
    background-size: contain;
    background-size: 100% 100%;
}

</style>

@section('content')


<div class="wrapper fadeInDown">
    <div id="formContent">
        <h3>Desayunos Feministas</h3>

        <!-- Login Form -->
        <form action="/register/login" method="POST">
            @csrf

            <input type="text" id="username" class="fadeIn second @error('usuario') is-invalid @enderror" name="username" placeholder="Usuario">

            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Registrarme">
        </form>

    </div>
</div>
@stop