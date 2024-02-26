<?php

namespace App\Services;


use App\Http\Resources\SalesLead\SalesLeadResource;
use App\Http\Resources\SalesLead\SalesTagResource;
use App\Models\SalesLead;
use App\Models\SalesTag;


class SalesLeadService
{
    public function store(array $salesLeadDetails): SalesLead
    {
        $lead = SalesLead::create([
            'title' => $salesLeadDetails['title'],
            'message' => $salesLeadDetails['message'],
        ]);

        $tags = collect($salesLeadDetails['tags']);

        $formattedTag = $tags->map(function ($item) {
            return ['name' => $item];
        });

        $lead->tags()->createMany($formattedTag);

        return $lead;
    }

    public function update(array $salesLeadDetails, SalesLead $salesLead): SalesLeadResource
    {
        $salesLead->tags()->sync($salesLeadDetails['tags'], false);

        return new SalesLeadResource($salesLead);
    }
}
