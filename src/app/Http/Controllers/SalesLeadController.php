<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesLead\StoreSalesLeadRequest;
use App\Http\Requests\SalesLead\UpdateSalesLeadRequest;
use App\Http\Resources\SalesLead\SalesLeadResource;
use App\Models\SalesLead;
use App\Services\SalesLeadService;
use Illuminate\Http\Request;

class SalesLeadController extends Controller
{
    public function store(StoreSalesLeadRequest $request, SalesLeadService $salesLeadService): SalesLeadResource
    {
        $salesLead = $salesLeadService->store($request->validated());

        return new SalesLeadResource($salesLead);
    }

    public function update(UpdateSalesLeadRequest $request, SalesLead $salesLead, SalesLeadService $salesLeadService): SalesLeadResource
    {
        $salesLead = $salesLeadService->update($request->validated(), $salesLead);

        return new SalesLeadResource($salesLead);
    }
}
