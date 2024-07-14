<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'user_id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'token' => $this->createToken('Token')->plainTextToken,
            // 'roles' => $this->roles->pluck('name'), // Fetch role names
            'roles' => $this->roles, // Fetch role names
            'permissions' => $this->getAllPermissions()->pluck('name'), // Fetch permission names
        ];

       // return parent::toArray($request);

    //    return [
    //     'user_id' => $this->id,
    //     'name' => $this->name,
    //     'email' =>$this->email,
    //     'token' => $this->createToken('Token')->plainTextToken,
    //     'roles' => $this->roles,
    //     'permissions' => $this->permisssion

    //    ];
    }
}
