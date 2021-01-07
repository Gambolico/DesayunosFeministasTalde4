<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Ambitos;
use Illuminate\Http\Request;
use Log;

class MujeresController extends Controller
{
    //
    public function coleccion()
    {

        /* 
        Tambien se puede hacer asi
        return view('components.coleccion')->with('Mujeres', $mujeres); 
        */
        return view('components.coleccion');

    }
    public function filtrarMujeres(Request $request){
        // get the search term
        if($request->ajax()){
                $output='';
                $respuesta=$request->post('query');
                if(!empty($respuesta)){
                    $data = Mujeres::where('Mujeres_Id', 'like', '%'.$respuesta.'%')
                    ->orWhere('Nombre', 'like', '%'.$respuesta.'%')
                    ->orWhere('Apellido', 'like', '%'.$respuesta.'%')
                    ->orWhere('Fecha_Nacimiento', 'like', '%'.$respuesta.'%')
                    ->orWhere('Zona_Geografica', 'like', '%'.$respuesta.'%')
                    ->orderBy('Mujeres_Id','desc')
                    ->get();

                }
                else{
                    $data =Mujeres::select('Mujeres_Id', 'Nombre','Apellido','Fecha_Nacimiento','Fecha_Muerte','Lore_Esp','Zona_Geografica','continentes.Nombre_Continente','Img_Ruta','Enlace_Referencia','ambitos.Nombre_Ambito','Ambito_Id','Cod_Color')
                    ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') ->join('continentes','continentes.Id_Continente', '=', 'mujeres.Continente_Id')
                    ->orderBy('Mujeres_Id', 'asc')
                    ->get();
                }
                $total_row=$data->count(); 
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .='
                        <div id="'.$row->Mujeres_Id.'" id="show-modal" @click="showModal = true;" href="{{route(mujer,[id=>'.$row->Mujeres_Id.'])}}" class="col-md-3">
                            <div class="card card-blog" style="background:'.$row->Cod_color.';">
                                <div id="'.$row->Mujeres_Id.'" class="card-image">
                                    <a href="#"> <img class="img" src="images/fotos de mujeres/'.$row->Img_Ruta.'"> </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                    <div class="table">
                                        <p lass="category text-warning">
                                            <i class="fa fa-soundcloud"></i> 
                                        </p>
                                        <h6 class="card-caption">
                                            <a href="#">'.$row->Nombre.' '.$row->Apellido.'</a>
                                        </h6>
                                        <div class="ftr">
                                            <div class="stats"> <i class="fa fa-clock-o">'.$row->Nombre_Ambito.'</i></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        ';
                    }
                }
                else{
                    $output='
                    <tr>
                        <td> no data found</td>
                    </tr>
                    ';
                }
                $data = array(
                    'cartas_data' => $output,
                    'total_data' => $total_row
                );
        
            // return the results
                return json_encode($data);
            }
        }
    
} 


