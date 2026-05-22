<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('edicion')->get();
        return $cursos;
    }

    public function show($id)
    {
        $curso = Curso::with('edicion')->find($id);
        if (!$curso) {
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        return response()->json($curso);
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::with('edicion')->find($id);
        if (!$curso) {
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->update($request->all());
        return response()->json($curso);
    }

    public function destroy($id)
    {
        $curso = Curso::with('edicion')->find($id);
        if (!$curso) {
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->delete();
        return response()->json(['message' => 'Curso eliminado']);
    }
}
