<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dompdf\Dompdf;

class admissionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'adhistory_date',
        'psychologist',
        'idPatient',
        'Document_type',
        'Document_number',
        'date_of_birth',
        'gender',
        'personal_status',
        'education',
        'occupation',
        'evolution',
        'motive_for_consultation',
        'subjective',
        'mental_test',
        'purpose_of_the_intervention',
        'hypothesis',
        'idDiagnosis',
        'process',
        'management_plan',
        'clinical_assessment_of_suicide_risk',
        'remission'
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'idPatient');
    }

// Accesores y mutadores (opcional)
    public function getFormattedDateAttribute()
    {
        return $this->adhistory_date->format('d/m/Y');
    }

    public function generatePdf($id)
    {
        $admissionHistory = AdmissionHistory::findOrFail($id);
    
        // Generar la vista
        $html = view('pdf', compact('admissionHistory'))->render();
    
        // Crear una instancia de Dompdf
        $pdf = new Dompdf();
    
        // Cargar el contenido HTML
        $pdf->loadHtml($html);
    
        // Renderizar el PDF
        $pdf->render();
    
        // Obtener el contenido del PDF
        $output = $pdf->output();
    
        // Descargar el PDF
        return response($output, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="admission_history_' . $id . '.pdf"'
        ]);
    }
}



    