<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        return response()->json($supports);
    }

    public function show(string | int $id)
    {
        $support = Support::find($id);

        if (!$support) {
            return response()->json(['error' => 'Support not found'], 404);
        }

        return response()->json($support);
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $support = $support->create($data);

        return response()->json($support, 201); // 201 Created
    }

    public function update(StoreUpdateSupport $request, Support $support, string $id)
    {
        $support = Support::find($id);

        if (!$support) {
            return response()->json(['error' => 'Support not found'], 404);
        }

        $support->update($request->validated());

        return response()->json($support);
    }

    public function destroy(string | int $id)
    {
        $support = Support::find($id);

        if (!$support) {
            return response()->json(['error' => 'Support not found'], 404);
        }

        $support->delete();

        return response()->json(['message' => 'Support deleted']);
    }
}
