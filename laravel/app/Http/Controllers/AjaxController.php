<?php

namespace App\Http\Controllers;

use App\Models\Mujeres;
use App\Models\Ambitos;
use Illuminate\Http\Request;


class AjaxController extends Controller
{
    public function filtrarMujeres(Request $request){
    // get the search term
            $query =$request->get('query');
            if($query =''){
                $data= getMujeresInf();
            }
            else{
                /* $data= Mujeres::where('Mujeres_Id', 'like', '%'.$query.'%') 
                 ->orWhere('Nombre', 'like', '%'.$query.'%')
                 ->orWhere('Apellido', 'like', '%'.$query.'%')
                 ->orWhere('Fecha_Nacimiento', 'like', '%'.$query.'%')
                 ->orWhere('Zona_Geografica', 'like', '%'.$query.'%')
                 ->orderBy('Mujeres_Id', 'desc')
                 ->get(); */ 
            }
            $total_row=$data->count(); 
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output='
                    <div id="" id="show-modal" @click="showModal = true;" href="" class="col-md-3">
                        <div class="card card-blog" style="background:'.$row->Cod_color.';">
                            <div id="'.$row->Mujeres_Id.'" class="card-image">
                                <a href="#"> <img class="img" src="images/fotos de mujeres/'.$row->Img_ruta.'"> </a>
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
                'table_data' => $output,
                'total_data' => $total_data
            );
    
        // return the results
            return json_decode($data);
        }
    }
