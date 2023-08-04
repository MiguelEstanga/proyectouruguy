<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seccion;
use App\Models\Estudiante;
use App\Models\Reprecentnte;
use App\Models\grado;
class estudianteController extends Controller
{  


    public function busqueda(Request $request)
    {
          $usuario = User::where('cedula' , '=' ,$request->cedula)->first();


         if($usuario)
         {
            $estudiante = Estudiante::where( 'id_usuario' , $usuario->id )->first();

              if($usuario->roles[0]->name != 'Estudiante'){
                 return redirect('director/estudiantes')
                        ->with('mensage','Esta cedula no pertenece a un estudiante'); 
              }
                 
         }else{
            return redirect('director/estudiantes')
                    ->with('mensage','No se encontró resultado, por favor asegúrese de colocar una cédula de identidad válida ');
         }
        return view('director.estudiante_single'  , ['estudiante' => $estudiante  ] );
    }
    public function single(Request $request)
    {
       $filtro = Estudiante::where('id_seccion' , $request->seccion)
            ->where('id_grado', $request->grado)->get();
           
        $secciones = Seccion::all();
        $grados = grado::all();     
        return view(  'estudiante.filtro' , 
                [
                    'estudiantes' => $filtro,
                    'grados' => $grados,
                    'secciones' =>$secciones,
                    'seccion_r' => $request->seccion,
                    'grado_r' => $request->grado
                ]);
    
    }

    /**
     * Display a listing of the different options resource.
     */
    public function menu()
    {
        $estudiante = Estudiante::all();
        $numero_de_estudiante = Estudiante::all()->count();

      return view('director.estudiantesMenu', 
            [
                'estudiantes' => $estudiante,
                'numero_de_estudiante' => $numero_de_estudiante
            ] );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiante = Estudiante::all();
       return view('director.estudiantes' , [
        'estudiantes' => $estudiante,
        'secciones' => Seccion::all(),
        'grados' => grado::all()
      ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('director.estudiantesCrear' , ['secciones' => Seccion::all()] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    return $request;
      //creando el reprecnetante

      $reprecentante_user = User::create([
            'email' => $request->email_reprecentante,
            'password' => bcrypt('R_CLAVE'),
            'fecha_nacimiento' => $request->fecha_nacimiento_Reprecentante,
            'cedula' => $request->cedula,
            'tipo' => 'Reprecentnte'      
      ])->assignRole('Reprecentante');

     $reprecentante = Reprecentnte::create(
        [
        'nombre1' => $request->nombre_reprecentante,
        'nombre2' => $request->nombre_reprecentante,
        'apellido' => $request->apellido_reprecentante,
        'domicilio' => $request->domicilio,
        'localidad' => $request->localidad,
        'id_usuario'=> $reprecentante_user->id ,
        ]
      );

      //guardando estudiante 
      $estudiante = User::create(
            [
                
                'email' => $request->email,
                'password' => $request->password,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'tipo' => 'Estudiante',
                'cedula' => $request->cedula
             ]
        )->assignRole('Estudiante');


        Estudiante::create([
            'nombre1' =>$request->nombre,
            'nombre2' =>$request->nombre,
            'apellido' =>$request->apellido,
            'cedulaescolar' => '202020',
            'genero' => 'masculino' ,
            'id_usuario' => $estudiante->id,
            'seccion' => 'null',
            'id_seccion' => $request->id_seccion,
            'id_reprecentante'=>  $reprecentante->id
        ]);


        
        return redirect()->route('director_estudiante.index');
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
        $grado = grado::all();
        $seccion = Seccion::all();
        $estudiante = User::find($id);

       // return $estudiante->estudiante;

         return view('director.estudianteEditar' , 
            [
                'estudiante' => $estudiante,
                'secciones' => $seccion,
                'grados' => $grado
             ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = User::find($id);
        $estudiante = Estudiante::where('id_usuario' , $usuario->id )->first();
        $estudiante->id_grado = $request->id_grado;
        $estudiante->id_seccion = $request->id_seccion;
        $estudiante->nombre1 = $request->nombre;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiante->apellido = $request->apellido;

        $estudiante->save();
        $usuario->save();
        return redirect('director/estudiantes/'.$usuario->id.'/edit'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = Reprecentnte::find($id);
        //return $user->estudiante;
        

        foreach($user->estudiante as $estudiante){
          $estudiante =  Estudiante::find($estudiante->id);
          $estudiante->delete();
        }
        
        $user->delete();


        
        return redirect()->route('director_estudiante.index');
    }


    /**
     * Display a listing of the resource.
     */
    public function verRendimiento()
    {
        $estudiante = Estudiante::all();
       return view('director.rendimiento', ['estudiantes' => $estudiante] );
    }


}
