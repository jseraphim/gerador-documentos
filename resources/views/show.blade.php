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
	<!-- <div class="card-body"> 
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
	</div> -->
	<div class="card-body">
	<div class="row mb-3">
			<!--label class="col-sm-2 col-label-form"><b>Student Name</b></label-->
			<div class="col-sm-10">
				<p align="center">INSTRUMENTO DE CONTRATO DE LOCAÇÃO RESIDENCIAL</p>
			<p align="justify">Pelo presente instrumento, devidamente assinado pelas partes contratantes e pelas
				 testemunhas, de um lado, na qualidade de LOCADOR o Sr. {{ $student->nome_locador }},
				 {{ $student->nacionalidade_locador }}, {{ $student->estado_civil_locador }}, portador da carteira de identidade nº. {{ $student->RG_locador }} expedida 
				  pelo DETRAN-RJ e CPF nº. {{ $student->CPF_locador }}, e outra, na condição de LOCATÁRIO, o sr 
				  {{ $student->nome_locador }}, {{ $student->nacionalidade_locador }}, 
				  portador da Carteira de Identidade nº. {{ $student->RG_locador }} expedida pelo DETRAN-RJ e 
				  CPF nº. {{ $student->CPF_locador }}, 
				  celebram o presente CONTRATO DE LOCAÇÃO obedecida às condições das cláusulas seguintes:</p>
				  <p> CLÁUSULA PRIMEIRA – OBJETO:</p>
<p align="justify">O objeto do presente CONTRATO DE LOCAÇÃO é o imóvel situado na {{ $student->logradouro_objeto }}, nº {{ $student->numero_objeto }} - {{ $student->complemento_objeto }} - {{ $student->bairro_objeto }} – {{ $student->cidade_objeto }} - {{ $student->UF_objeto }}, que os locatários recebem em perfeitas condições de habitabilidade comprometendo-se a devolvê-lo nas mesmas condições quando terminado o Contrato de Locação.</p>

<p>CLÁUSULA SEGUNDA – PRAZO:</p>
<p align="justify">O prazo da Locação é de 12 (Doze Meses) MESES, de {{ $student->duracao_contrato }}; findo o qual, o LOCATÁRIO obriga-se a restituí-lo livre e desimpedido de pessoas e de coisas ao LOCADOR, independentemente de qualquer notificação judicial ou extrajudicial, ou aviso, nos exatos termos da legislação vigente.</p>

<p>CLÁUSULA TERCEIRA – ALUGUEL:</p>
<p align="justify">O aluguel mensal, inicialmente é fixado em R$ {{ $student->valor_contrato }} (SEISCENTOS REAIS). A locação será corrigida pelo IGPM ou o maior índice determinado pelo governo. O vencimento será no quinto dia útil de cada mês para pagamento do aluguel e demais encargos, sem multa de prazo que, se excedido determinará multa de 10% (dez por cento) sobre o valor do recibo e mais 1% (hum por cento) ao mês ou fração de atraso a título de mora aplicável correção monetária nos termos da lei em vigor;</p>

<p>CLÁUSULA QUARTA:</p>
<p align="justify">O reajuste do aluguel ocorrerá anualmente, com periodicidade, desde que autorizada por Lei, observando o que consta na cláusula TERCEIRA, retro.</p>

<p>CLÁUSULA QUINTA:</p>
<p align="justify">O Locatário pagará além do aluguel, os encargos do imóvel tais como, luz, taxa incêndio ou qualquer outro tipo de encargo que venha recair sobre o imóvel, por determinação do governo federal, estadual ou municipal, que os encargos de água, IPTU e taxa de incêndio deverão ser entregues ao locador durante o tempo da locação todos quitados.</p>

<p>CLÁUSULA SEXTA:</p>
<p align="justify">É expressamente proibida a sublocação total ou parcial do imóvel, sob pena de imediata rescisão do contrato e pagamento de multa por infração contratual;</p>

<p>CLÁUSULA SÉTIMA:</p>
<p align="justify">Os aluguéis deverão ser pagos no local onde o Locador vier a determinar, dentro do período urbano do Rio de Janeiro;</p>

<p>CLÁUSULA OITAVA:</p>
<p align="justify">Ficam os locatários cientes de que não poderão fazer modificações internas ou externas no imóvel, sem a autorização do locador por escrito, que mesmo autorizado não caberá indenização aos locatários pelas benfeitorias feitas no imóvel, devendo as mesmas ficarem incorporadas ao imóvel.</p>

<p>CLÁUSULA NONA:</p>
<p align="justify">Que o locatário deverá avisar ao locador sobre o surgimento de umidade no imóvel, problemas de água e no encanamento, ou qualquer tipo de dano que caiba ao locador sanar desde que não tenha sido por culpa do locatário no uso do imóvel, caso em que se responsabilize o locatário pelo dano caberá a ele os reparos, sob pena de lei.</p>

<p>CLÁUSULA DÉCIMA:</p>
<p align="justify">Ficam os locatários responsáveis por eventuais casos de sinistros com incêndios, desabamento causado pelo locatário e seus dependentes, caso em que o dano será de plena responsabilidade do locatário, que arcará com os prejuízos.</p>

<p>Fica eleito o foro desta cidade do Rio de Janeiro, para dirimir eventuais dúvidas e litígios dele oriundos, bem como para a sua execução, com exceção de qualquer outro, por mais especial que seja.</p>
       
<p>Rio de Janeiro, 01 de dezembro de 2022.</p>

<p>E assim por estarem justos.</p>
				
			</div>
	</div>
</div>

@endsection('content')
