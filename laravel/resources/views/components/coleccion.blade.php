@extends('layout.parent')
@section('title', 'Coleccion')
@section('content')
<style>
.container{
    width:90%;
    height:auto;
    flex-wrap:wrap;
}
/*Profile Card 5*/
.profile-card-5{
    margin-top:20px;
}
.profile-card-5 .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
}
.profile-card-5 .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -20px;
    
}
.profile-card-5 .card-img-block img{
    border-radius:5px;
    box-shadow:0 0 10px rgba(0,0,0,0.63);
}
.profile-card-5 h5{
    color:#4E5E30;
    font-weight:600;
}
.profile-card-5 p{
    font-size:14px;
    font-weight:300;
}
.profile-card-5 .btn-primary{
    background-color:#4E5E30;
    border-color:#4E5E30;
}

</style>

<body>
<p>Coleccion.</p>
    <div class="container">
    	<div class="row">
            @foreach($Mujeres as $obj)
                        <div class="col-md-4 mt-4">
                            <div class="card profile-card-5">
                                <div class="card-img-block">
                                    <img class="card-img-top" src="{{ $obj->Img_Ruta}}" alt="Card image cap">
                                </div>
                                <div class="card-body pt-0">
                                <h5 class="card-title">{{ $obj->Nombre}} <br> {{ $obj->Apellido}}</h5>
                                <p class="card-text">{{ $obj->Zona_Geografica}}</p>
                                
                            </div>
                        </div>
                @endforeach 
        </div>
    </div>
</body>
    
@stop