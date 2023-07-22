<?php

namespace App\Http\Controllers\Miguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Seccion;
use App\Models\Profesor;
class ProfesorController extends Controller
{

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
      return view('docente.proyectos');
    }

    public function proyectoSingle() {
      return view('docente.proyecto');
    }

    public function evaluar() {
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
      return view('docente.estudiante', [
        'estudiante' => $estudiante
      ]);
    }

    public function inicio() {
      return view('docente.index');
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
    public function index()
    {
       $profesores = Profesor::all();

    
       return view('director.docentes' , [
        'docentes' => $profesores,
        'secciones' => Seccion::all(),
        'grados' => self::grados
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       return view('director.docentesCrear' , ['secciones' => Seccion::all(), 'grados' => self::grados ]);
    }

      public function  busqueda(Request $request)
    {
         $usuario = User::where('nombre' , $request->nombre)->first();
        return view('director.UsuarioBusqueda' , ['usuario' => $usuario]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = User::create(
            [
                
                'email' => $request->email,
                'password' => $request->password,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'tipo' => 'Profesor',
                'cedula' => $request->cedula
             ]
        )->assignRole('Profesor');

        Profesor::create([
            'nombre1' => $request->nombre,
            'nombre2'=> $request->nombre,
            'apellido2' => $request->apellido,
            'id_seccion' => $request->id_seccion,
            'id_usuario' => $data->id

        ]);
      


        return redirect()->route('director.index');
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
        $delete = User::find($id)->delete();
        return redirect()->route('director.index');
    }
}
