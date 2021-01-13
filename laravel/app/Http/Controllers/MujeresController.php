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
        $Ambitos=Ambitos::getAmbitos();
        /* 
        Tambien se puede hacer asi
        return view('components.coleccion')->with('Mujeres', $mujeres); 
        */
        return view('components.coleccion')->with('Ambitos', $Ambitos);
    }
    
    public function filtrarMujeres(Request $request){
        // get the search term
        if($request->ajax()){
                $output='';
                $respuesta=$request->post('query');
                $ambitos=$request->post('ambitos');
                $data =Mujeres::FiltrarMujeresInf($respuesta,$ambitos);
                $total_row=$data->count(); 
                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        /* COmo ueremos que salga por el html esto se guarda en output, array. El punto .=' sirve como un push.*/
                        $output .='
                        <div id="'.$row->Mujeres_Id.'" id="show-modal" @click="showModal = true;" href="{{route(mujer,[id=>'.$row->Mujeres_Id.'])}}" class="col-md-3">
                            <div class="card card-blog" style="background-color:'.$row->Cod_Color.';">
                                <div id="'.$row->Mujeres_Id.'" class="card-image">
                                    <a href="#"> <img class="img" src="images/fotos_de_mujeres/'.$row->Img_Ruta.'"> </a>
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


