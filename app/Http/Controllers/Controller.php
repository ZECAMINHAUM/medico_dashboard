<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {

        $dataForm = $request->all();

        $data = $this->model->create($dataForm);
        return response()->json($data, 201);

    }


    public function show($id)
    {
        if (!$data = $this->model->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }


    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        $data = $this->model->find($id);
        $data->update($dataForm);
        return response()->json($data);
    }


    public function destroy($id)
    {
        if ($data = $this->model->find($id)) {
            $data->delete();
            return response()->json(['Success' => 'Deletado com sucesso!']);
        } else {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
    }
}
