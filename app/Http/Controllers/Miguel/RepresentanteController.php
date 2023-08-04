<?php

namespace App\Http\Controllers\Miguel;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Reprecentnte;
use App\Models\Estudiante;
use App\Models\Proyecto; 
use App\Models\Periodo;
use App\Models\grado;
class RepresentanteController extends Controller
{
  


     public function index()
    {
       $representantes = Reprecentnte::all();
        
       return view('director.representantes' , [
        'representantes' => $representantes
      ]);
    }

  public function menu()
  {
    return view('director.representantesMenu');
  }

  public function inicio() {
    $periodo = Periodo::latest('created_at')->first();
   

    $proyecto = Proyecto::all();

    $lapsos =  $periodo->lapso->where('activar' , '=' , true)->count();

    $reprecentante = Reprecentnte::where('id_usuario' , Auth::user()->id )->first();

    $contandor =  $reprecentante->estudiante[0]->informe->count();
   
    $informe = $reprecentante->estudiante[0]->informe[$contandor-1];

    return view('representante.index', [
      'representado' => $reprecentante,
      
      'proyecto' => $proyecto,
      'user' => $reprecentante ,
      'lastInforme' => $informe,
      'lapsos' => $lapsos
    ]);
  }

/**
   * Display admin data example.
   */
  public function single()
  {
      // $representante = buscar admin con el id recibido;

    $representante = [
      'nombre' => 'Sergio Mauricio',
      'apellido' => 'Perez Correa',
      'fecha_nacimiento' => '1999-06-19',
      'direccion' => 'La llovizna',
      'cedula' => '25578951',
      'email' => 'smpc@gmail.com',
      'password' => 'Pas5w0rd',
      'representados' => [
        [
          'nombre' => 'Sergio Mauricio',
          'apellido' => 'Perez Correa',
          'cedula_escolar' => '1-99-24758632',
          'fecha_nacimiento' => '1999-06-19',
          'direccion' => 'La llovizna',
          'lugar_nacimiento' => 'La llovizna',
          'grado' => ['label' => 'Cuarto', 'id' => 4],
          'seccion' => ['seccion' => 'A', 'id' => 2]
        ]
      ]
    ];
    return view('director.representantesEditar', [
      'representante' => $representante,
      'secciones' => Seccion::all(),
      'grados' => self::grados
    ] );
  }

    /**
     * Display a listing of the resource.
     */
 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     // return grado::all();
        return view('director.representantesCreate', [
          'secciones' => Seccion::all(),
          'grado' => grado::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
      
      $request->validate([
        'email_reprecentante' => 'required|unique:users,email',
        'cedula_reprecentante' => 'required|unique:users,cedula|min:6|max:8',
      ]);

     // return  $request;

      $reprecentante_user = User::create([
            'email' => $request->email_reprecentante,
            'password' => 'R_CLAVE',
            'fecha_nacimiento' => $request->fecha_nacimiento_reprecentante,
            'cedula' => $request->cedula_reprecentante,
            'tipo' => 'Representnte'      

      ])->assignRole('Representante');

     $reprecentante = Reprecentnte::create(
        [
        'nombre1' => $request->nombre_reprecentante,
        'nombre2' => $request->nombre_reprecentante,
        'apellido' => $request->apellido_reprecentante,
        'domicilio' => $request->direccion_reprecentante,
        'localidad' => $request->direccion_reprecentante,
        'id_usuario'=> $reprecentante_user->id ,
        
        ]
      );

      //guardando estudiante 

     foreach($request->representado as $estudiante)
      {
          $estudiante_data = User::create(
            [
                
                'email' => date('h:d:m').$request->email_reprecentante,
                'password' => 'R_CLAVE',
                'fecha_nacimiento' => $estudiante['fecha_nacimiento'],
                'tipo' => 'Estudiante',
                'cedula' => $estudiante['cedula'].date('h:m:s'),

             ]
          )->assignRole('Estudiante');

          Estudiante::create([
            'nombre1' =>$estudiante['name'],
            'nombre2' =>$estudiante['name'], 
            'apellido' =>$estudiante['apellido'],
            'cedulaescolar' => $estudiante['cedula'].date('h:m:s'),
            'genero' => 'masculino' ,
            'id_seccion' =>  $estudiante['id_seccion'],
            'id_usuario' => $estudiante_data->id,
            'seccion' => $estudiante['id_seccion'],
            'id_reprecentante'=>  $reprecentante->id,
            'grado' => $estudiante['grado'] ,
            'id_grado' => $estudiante['grado'] ,

        ]);

      }
      return redirect()->route('director_estudiante.index');
  }

  
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        return $user; 
        return redirect()->route('director_estudiante.index');
    }
}
