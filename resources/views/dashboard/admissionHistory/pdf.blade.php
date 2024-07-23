<!DOCTYPE html>
<html>
<head>
    <title>Admission History PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>HC DE INGRESO</h1>
        </div>
        <div class="content">
            <p><strong>Fecha:</strong> {{ $admissionHistory->adhistory_date }}</p>
            <p><strong>Nombre de quien diligencia:</strong> {{ $admissionHistory->psychologist }}</p>
            <h2>1. Datos de identificación del consultante</h2>
            <p><strong>Paciente:</strong> {{ $admissionHistory->patient->name }} {{ $admissionHistory->patient->last_name }} {{ $admissionHistory->patient->second_last_name }}</p>
            <p><strong>Tipo de documento:</strong> {{ $admissionHistory->Document_type }}</p>
            <p><strong>Número de documento:</strong> {{ $admissionHistory->Document_number }}</p>
            <p><strong>Fecha de nacimiento:</strong> {{ $admissionHistory->patient->date_of_birth }}</p>
            <p><strong>Género:</strong> {{ $admissionHistory->gender }}</p>
            <p><strong>Estado civil:</strong> {{ $admissionHistory->personal_status }}</p>
            <p><strong>Nivel de educación:</strong> {{ $admissionHistory->education }}</p>
            <p><strong>Ocupación:</strong> {{ $admissionHistory->occupation }}</p>
            <h2>2. Tipo de evolución</h2>
            <p><strong>Evolución:</strong> {{ $admissionHistory->evolution }}</p>
            <p><strong>Motivo de la consulta:</strong> {{ $admissionHistory->motive_for_consultation }}</p>
            <p><strong>Subjetivo:</strong> {{ $admissionHistory->subjective }}</p>
            <p><strong>Examen mental:</strong> {{ $admissionHistory->mental_test }}</p>
            <p><strong>Objetivo de la intervención:</strong> {{ $admissionHistory->purpose_of_the_intervention }}</p>
            <p><strong>Análisis-Hipótesis:</strong> {{ $admissionHistory->hypothesis }}</p>
            <p><strong>Impresión diagnóstica general (DSMV):</strong> {{ $admissionHistory->dsmv }}</p>
            <h2>3. Evolución</h2>
            <p><strong>Proceso:</strong> {{ $admissionHistory->process }}</p>
            <p><strong>Plan de manejo:</strong> {{ $admissionHistory->management_plan }}</p>
            <p><strong>Evaluación clínica de riesgo de suicidio:</strong> {{ $admissionHistory->clinical_assessment_of_suicide_risk }}</p>
            <p><strong>Remisión a otras especialidades de apoyo:</strong> {{ $admissionHistory->remission }}</p>
        </div>
    </div>
</body>
</html>
