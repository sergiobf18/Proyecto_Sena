<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            //table admissionHistory
            'Ver-AdmissionHistory',
            'Crear-AdmissionHistory',
            'Editar-AdmissionHistory',
            'Eliminar-AdmissionHistory',
            //table appointment
            'Ver-Appointment',
            'Crear-Appointment',
            'Editar-Appointment',
            'Eliminar-Appointment',
            //table diagnosis
            'Ver-Diagnosis',
            'Crear-Diagnosis',
            'Editar-Diagnosis',
            'Eliminar-Diagnosis',
            //table document
            'Ver-Document',
            'Crear-Document',
            'Editar-Document',
            'Eliminar-Document',
            //table followUpHistory
            'Ver-FollowUpHistory',
            'Crear-FollowUpHistory',
            'Editar-FollowUpHistory',
            'Eliminar-FollowUpHistory',
            //table patient
            'Ver-Patient',
            'Crear-Patient',
            'Editar-Patient',
            'Eliminar-Patient',
            //table psychologist
            'Ver-Psychologist',
            'Crear-Psychologist',
            'Editar-Psychologist',
            'Eliminar-Psychologist',
             
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
