<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seccion;
use App\Models\Estudiante;
use App\Models\Reprecentnte;

class estudianteController extends Controller
{
  const grados = [
    ['label' => 'Primero', 'id' => 1],
    ['label' => 'Segundo', 'id' => 2],
    ['label' => 'Tercero', 'id' => 3],
    ['label' => 'Cuarto', 'id' => 4],
    ['label' => 'Quinto', 'id' => 5],
    ['label' => 'Sexto', 'id' => 6]
  ];


    /**
     * Display student data example.
     */
    public function single()
    {
        // $estudiante = buscar estudiante con el id recibido;

      $estudiante = [
        'nombre' => 'Sergio Mauricio',
        'apellido' => 'Perez Correa',
        'fecha_nacimiento' => '1999-06-19',
        'lugar_nacimiento' => 'Maturin',
        'direccion' => 'La llovizna',
        'cedula_escolar' => '1-99-24758632',
        'grado' => ['label' => 'Cuarto', 'id' => 4],
        'seccion' => ['seccion' => 'A', 'id' => 2],
        'cedula_representante' => '24758632',
        'nombre_representante' => 'Jacinta Correa'
      ];
      return view('director.estudianteEditar', [
        'estudiante' => $estudiante,
        'secciones' => Seccion::all(),
        'grados' => self::grados
      ] );
    }

    /**
     * Display a listing of the different options resource.
     */
    public function menu()
    {
        $estudiante = Estudiante::all();
      return view('director.estudiantesMenu', ['estudiantes' => $estudiante] );
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
        'grados' => self::grados
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

    // return $request;
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
        User::find($id)->delete();
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
