<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Ambitos;
use Illuminate\Http\Request;

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

    }/* 
    public function search(Request $request){
            // get the search term
            if($request->ajax()){
                  $output = '';
                  $query = $request->get('query');
                  if($query != ''){
                    $data= Mujeres::getMujeresInf()->get();
                    }
                else if($query == ''){
                    $data= Mujeres::orderBy('Mujeres_Id','asc')
                    ->get();
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
         */
}

