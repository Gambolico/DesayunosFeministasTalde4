<?php

namespace App\Http\Controllers;
use App\Models\Mujeres;
use App\Models\Ambitos;
use Illuminate\Http\Request;
use DB;

class MujeresController extends Controller
{
    //
    public function coleccion()
    {
        $mujeres=Mujeres::first()->getMujeresInf();
        $ambitos=Ambitos::first()->getAmbitos();
        /* 
        Tambien se puede hacer asi
        return view('components.coleccion')->with('Mujeres', $mujeres); 
        */
        return view('components.coleccion',['Mujeres'=> $mujeres,'Ambitos'=> $ambitos]);

        
    }
    public function biografia($id)
    {
        $mujeresBiografia=Mujeres::first()->getMujeresBiografia($id);
        return view('components.coleccion',['Mujeres'=> $mujeresBiografia]);

        
    }
    public function search(Request $request) {
        if($request->ajax()){
            // get the search term
            $query = $request->get('query');
            if($query != ''){
                $data= DB::table('mujeres')
                ->where('Nombre', 'Like','%'. $query.'%')
                ->orWhere('Apellido', 'Like','%'. $query.'%')
                ->orWhere('Nombre_Ambito', 'Like','%'. $query.'%')
                ->join('ambitos', 'ambitos.Id_Ambito', '=', 'mujeres.Ambito_Id') 
                ->get();
            }
            else{
                $data= DB::table('mujeres')
                ->orderBy('Mujeres_Id','asc')
                ->get();
            }
            $total_row=$data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output='
                    <tr>
                        <td>'.$row->Nombre.'</td>
                        <td>'.$row->Apellido.'</td>
                        <td>'.$row->Nombre_Ambito.'</td>
                    </tr>
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
            echo json_decode($data);
        }
        
    }
}
