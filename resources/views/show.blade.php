@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Contrato</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Student Name</b></label>
			<div class="col-sm-10">
				{{ $student->student_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Student Email</b></label>
			<div class="col-sm-10">
				{{ $student->student_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Student Gender</b></label>
			<div class="col-sm-10">
				{{ $student->student_gender }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Student Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $student->student_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
	<div class="card-body">
	<div class="row mb-3">
			<!--label class="col-sm-2 col-label-form"><b>Student Name</b></label-->
			<div class="col-sm-10">
			<p>Pelo presente instrumento, devidamente assinado pelas partes contratantes e pelas
				 testemunhas, de um lado, na qualidade de LOCADOR o Sr. {{ $student->nome_locador }},
				 {{ $student->nacionalidade_locador }}, {{ $student->estado_civil_locador }}, portador da carteira de identidade nº. {{ $student->RG_locador }} expedida 
				  pelo DETRAN-RJ e CPF nº. {{ $student->CPF_locador }}, e outra, na condição de LOCATÁRIOS, o sr 
				  JEFFERSON SERAPHIM CONCEIÇÃO, brasileiro, 
				  portador da Carteira de Identidade nº. 21.066.493-4 expedida pelo DETRAN-RJ e 
				  CPF nº. 106.062.527-03 , 
				  celebram o presente CONTRATO DE LOCAÇÃO obedecida às condições das cláusulas seguintes:</p>
				
			</div>
	</div>
</div>

@endsection('content')