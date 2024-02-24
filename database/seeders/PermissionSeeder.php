<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userFeature = Feature::create([
            'name' => 'user'
        ]);

        $userPermissions = ['user_view','user_create','user_edit','user_delete'];
        
        foreach ($userPermissions as $value) {
            Permission::create([
                'name' => $value,
                'feature_id' => $userFeature->id
            ]);
        }
        
        
        $rolePermissions = ['role_view','role_create','role_edit','role_delete'];

        $roleFeature = Feature::create([
            'name' => 'role'
        ]);

        foreach ($rolePermissions as $value) {
            Permission::create([
                'name' => $value,
                'feature_id' => $roleFeature->id
            ]);
        }
    }
}
