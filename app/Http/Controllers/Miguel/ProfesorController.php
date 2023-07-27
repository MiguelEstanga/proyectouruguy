<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Profesor;
use App\Models\grado;
use Illuminate\Support\Facades\Auth;
use App\Models\Estudiante;
use App\Models\Proyecto;
use App\Models\Periodo;
class ProfesorController extends Controller
{ 
      public function index()
    {
       $profesores = Profesor::all();

    
       return view('director.docentes' , [
        'docentes' => $profesores,
        'secciones' => Seccion::all(),
      
        'grados' => self::grados
      ]);
    }


  const grados = [
    ['label' => 'Primero', 'id' => 1],
    ['label' => 'Segundo', 'id' => 2],
    ['label' => 'Tercero', 'id' => 3],
    ['label' => 'Cuarto', 'id' => 4],
    ['label' => 'Quinto', 'id' => 5],
    ['label' => 'Sexto', 'id' => 6]
  ];

    public function menu()
    {
      return view('director.docentesMenu');
    }

    public function proyectosList() {
      Profesor::where( 'id_usuario' , Auth::user()->id)->first();
       $proyectos = Proyecto::where('id_profesor' , Auth::user()->profesor[0]->id)->get();  
      return view('docente.proyectos' ,['proyectos' => $proyectos]);
    }

    public function proyectoSingle() {
      return view('docente.proyecto'  );
    }

    public function evaluar($id) {
      
      $estudiante = Estudiante::find($id);
      
      $periodo = Periodo::latest('created_at')->first();

      $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();

      if($ultimo_lapso != 0)
      {
        $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
      }

      return view('docente.estudiante', [
        'estudiante' => $estudiante,
        'lapso' => $lapso,
        'ultimo_lapso' => $ultimo_lapso,
      ]);
    }

    public function inicio() {
       $profesor =  Profesor::where("id_usuario" ,  Auth::user()->id)->first();
       $estudiantes = Estudiante::where('seccion' , $profesor->seccion->id)->get();
       
      return view('docente.index' , [
            'profesor' =>$profesor,
            'estudiantes'=> $estudiantes ,
      ]);
    }

  /**
     * Display profesor data example.
     */
    public function single()
    {
        // $docente = buscar docente con el id recibido;

      $docente = [
        'nombre' => 'Sergio Mauricio',
        'apellido' => 'Perez Correa',
        'fecha_nacimiento' => '1999-06-19',
        'direccion' => 'La llovizna',
        'cedula' => '25578951',
        'grado' => ['label' => 'Cuarto', 'id' => 4],
        'seccion' => ['seccion' => 'A', 'id' => 2],
        'contraseña' => 'Pas5w0rd',
        'habilitado' => true
      ];
      return view('director.docenteEditar', [
        'docente' => $docente,
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
    public function create(Request $request)
    {

       return view('director.docentesCrear' , ['secciones' => Seccion::all(), 'grados' => self::grados ]);
    }

      public function  busqueda(Request $request)
    {

     $usuario = User::where('cedula' , '=' ,$request->cedula)->first();
        return view('director.UsuarioBusqueda' , ['usuario' => $usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $periodo = Periodo::latest('created_at')->first();
        
        if(gettype($periodo) == 'null' ){
           return redirect('director/docentes')
                ->with('mensage', 'Cree Primero Un Periodo Escolar' );
        }
        $request->validate(
            [
                'email' => 'required',
                'password' =>'required',
                'fecha_nacimiento' => 'required',
                'cedula' => 'required' ,
                'nombre' => 'required',
                'apellido' =>'required',
                
                'direccion' => 'required'
            ]
        );
        $grado = grado::create([
            'grado' => $request->grado,
            'id_seccion' => $request->id_seccion,
            'id_periodo' =>  $periodo->id
        ]);


       
        $data = User::create(
            [
                
                'email' => $request->email,
                'password' => bcrypt( $request->password),
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'tipo' => 'Profesor',
                'cedula' => $request->cedula
             ]
        )->assignRole('Profesor');

       $profesor = Profesor::create([
            'nombre1' => $request->nombre,
            'nombre2'=> $request->nombre,
            'apellido2' => $request->apellido,
            'id_seccion' => $request->id_seccion,
            'id_usuario' => $data->id,
            'id_grado' => $grado->id

        ]);


        return redirect('director/docentes')
                ->with('mensage', 'Se Ha Creado Un Nuevo Docente'.$profesor->nombre1.' '. $profesor->apellido2 );
    }

    /**
     * Display the specified resource.
     */
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
   
        $delete = Profesor::find($id);

        User::where('id' , $delete->id_usuario)->first();

        $delete->delete();

        return redirect()->route('director_docente.index');
    }
}
