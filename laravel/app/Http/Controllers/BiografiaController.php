<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use Illuminate\Http\Request;
use Log;
class BiografiaController extends Controller
{

    public function datosBiografia(Request $mujerId)
    {
        
        if($request->ajax()){
            $output='';
            $id=$request->post('mujerId');
            $data =Mujeres::filtrarId($id);
                foreach($data as $row)
                {
                    /* COmo ueremos que salga por el html esto se guarda en output, array. El punto .=' sirve como un push.*/
                    $output .='
                    <div class="modal-header">
                        <a href="#"> <img class="img" src="images/fotos_de_mujeres/'.$row->Img_Ruta.'"> </a>
                            <slot name="header">'.$row->Nombre.'</slot>
                        </div>
                        <div class="modal-body">
                        <img class="img" src="">
                            <a href="#"></a>
                        </div>
                        <div class="modal-footer">
                            <slot name="footer">default footer
                            <button class="modal-default-button" @click="$emit('close')">OK</button>
                            </slot>
                        </div>
                    ';
                }
            else{
                $output='
                <tr>
                    <td> no data found</td>
                </tr>
                ';
            }
            $data = array(
                'biografia_data' => $output
            );
    
        // return the results
            return json_encode($data);
        }
        return view('components.coleccion')->with('Mujeres', $Ambitos);
    }
}
