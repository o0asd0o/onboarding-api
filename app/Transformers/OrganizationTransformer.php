<?php

namespace App\Transformers;

use App\Organization;
use Flugg\Responder\Transformers\Transformer;

class OrganizationTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param  \App\Organization $organization
     * @return array
     */
    public function transform(Organization $organization)
    {
        return [
            'id' => (int) $organization->id,
        ];
    }
}
