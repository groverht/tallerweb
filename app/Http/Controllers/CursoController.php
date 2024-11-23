<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        //return $cursos;
        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function show(Curso $curso)
    {
        //compact('curso') es lo mismo ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        Curso::create($request->all());
        return redirect()->route('cursos.index');
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }
    public function update(Curso $curso, Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        /* $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save(); */
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
