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
      
      
      ]);
    }




    public function menu()
    {

        $profesores =  User::where('Tipo' , 'Profesor')->count();  
      return view('director.docentesMenu' , 
            ['profesores' => $profesores]
       );
    }

    public function proyectosList() {
      Profesor::where( 'id_usuario' , Auth::user()->id)->first();
        $periodo = Periodo::latest('created_at')->first();
        

       $proyectos = Proyecto::where('id_profesor' , Auth::user()->profesor[0]->id)->get();  
     $ultimo_lapso = $periodo->lapso->where('activar' , '=' , true)->count();

      if($ultimo_lapso != 0)
      {
        $lapso =  $periodo->lapso->where('activar' , '=' , true)[$ultimo_lapso - 1];
        $validate =  Proyecto::where('id_lapso' , $lapso->id)->first();

      }

      return view('docente.proyectos' ,[
        'proyectos' => $proyectos , 
        'lapso' => $lapso,
        'validate' => $validate
        ]);
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
        $proyecto =  Proyecto::where('id_lapso' , $lapso->id)->first();
      }


      return view('docente.estudiante', [
        'estudiante' => $estudiante,
        'lapso' => $lapso,
        'ultimo_lapso' => $ultimo_lapso,
        'proyecto' => $proyecto
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
    public function single($id)
    {
        

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
      ] );
    }

 
    public function create(Request $request)
    {
      $grados = grado::all();
       return view('director.docentesCrear' , ['secciones' => Seccion::all(), 'grados' => $grados ]);
    }

      public function  busqueda(Request $request)
    {

     $usuario = User::where('cedula' , '=' ,$request->cedula)->first();

     if($usuario){
        $profesor = Profesor::where( 'id_usuario' , $usuario->id )->first();
     }else{
        return redirect('director/docentes')->with('mensage','No se encontro resultado, porfavor asegurece de colacar de identidad una cedula valida');
     }

   
     return view('director.UsuarioBusqueda' , ['usuario' => $usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;

        $periodo = Periodo::latest('created_at')->first();
        
        if(gettype($periodo) == 'null' ){
           return redirect('director/docentes')
                ->with('mensage', 'Cree primero un periodo escolar' );
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
            'id_grado' => $request->grado

        ]);


        return redirect('director/docentes')
                ->with('mensage', 'Se ha creado un nuevo docente'.$profesor->nombre1.' '. $profesor->apellido2 );
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
        $profesor =  Profesor::find($id);
        $secciones = Seccion::all()  ;

      
        return view('director.docenteEditar' , [
            'docente' => $profesor,
            'secciones' => $secciones,
         
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $profesor =  Profesor::find($id);
        $usuario= User::find($profesor->id_usuario);
     
      
       
        //return $request->habilitar;

        $profesor->nombre1 = $request->nombre1;
        $profesor->nombre2 = $request->nombre2;
        $profesor->apellido2 = $request->apellido;
        $profesor->id_seccion = $request->id_seccion;

        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->cedula = $request->cedula;
        
        $usuario->removeRole( $usuario->roles[0]->name);
        $usuario->assignRole($request->habilitar);
       
        $usuario->save();
        $profesor->save();

        $usuario->roles;


        return redirect('director/docentes/'.$id.'/edit' );  
    }       

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $delete = Profesor::find($id);
        return $delete;
        $usuario = User::where('id' , $delete->id_usuario)->first();
        $usuario->removeRole($usuario->getRoleNames()[0]);
        $usuario->assignRole('Desabilitado');
        return $usuario;
       
    }
}
