@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Student</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Name</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Student Email</label>
				<div class="col-sm-10">
					<input type="text" name="student_email" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Gender</label>
				<div class="col-sm-10">
					<select name="student_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Image</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
				</div>
			</div>

			<!--Meu formulário -->
			<!-- Locador -->
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Locador</label>
				<div class="col-sm-10">
					<input type="text" name="nome_locador" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nacionalidade</label>
				<div class="col-sm-10">
					<input type="text" name="nacionalidade_locador" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Estado civil</label>
				<div class="col-sm-10">
					<input type="text" name="estado_civil_locador" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">RG</label>
				<div class="col-sm-10">
					<input type="text" name="RG_locador" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">CPF</label>
				<div class="col-sm-10">
					<input type="text" name="CPF_locador" class="form-control" />
				</div>
			</div>

            
            <!-- Locatário -->
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Locatário</label>
				<div class="col-sm-10">
					<input type="text" name="nome_locatario" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nome do Locador</label>
				<div class="col-sm-10">
					<input type="text" name="nacionalidade_locatario" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">RG do Locatário</label>
				<div class="col-sm-10">
					<input type="text" name="RG_locatario" class="form-control" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">CPF do Locatário</label>
				<div class="col-sm-10">
					<input type="text" name="CPF_locatario" class="form-control" />
				</div>
			</div>
            
            <!-- Objeto -->

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Logradouro</label>
				<div class="col-sm-10">
					<input type="text" name="logradouro_objeto" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Número</label>
				<div class="col-sm-10">
					<input type="text" name="numero_objeto" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Complemento</label>
				<div class="col-sm-10">
					<input type="text" name="complemento_objeto" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Bairro</label>
				<div class="col-sm-10">
					<input type="text" name="bairro_objeto" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Cidade</label>
				<div class="col-sm-10">
					<input type="text" name="cidade_objeto" class="form-control" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">UF</label>
				<div class="col-sm-10">
					<input type="text" name="UF_objeto" class="form-control" />
				</div>
			</div>
            
            <!-- Termos -->

             <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Duração do contrato</label>
				<div class="col-sm-10">
					<input type="text" name="duracao_contrato" class="form-control" />
				</div>
			</div>

             <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Valor do contrato</label>
				<div class="col-sm-10">
					<input type="text" name="valor_contrato" class="form-control" />
				</div>
			</div>

			<!-- -->

			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
	
</div>

@endsection('content')
