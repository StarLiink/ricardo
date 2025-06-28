<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta charset="utf-8">
<?
include ("conf/config.php");
$con = mysql_connect("$config[host]", "$config[user]", "$config[pass]");
mysql_select_db("$config[db]", $con) or die (mysql_error());

            $Eletro = (isset($_GET['bucasfkl'])) ? $_GET['bucasfkl'] : 'nao-existe' ;
            
            $folder 		= 'apps';

            if(substr_count($Eletro, '/') > 0){
                $Eletro 		= explode('/', $Eletro);
                $pagina 	= (file_exists("{$folder}/".$Eletro[0].'.php')) ? $Eletro[0]: 'nao-existe';
            }else{
                $pagina 	= (file_exists("{$folder}/".$Eletro.'.php')) ? $Eletro: 'nao-existe';
            }	
if($Eletro[0] == 'n'){
	?>
<html>
	<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>Redirecionando</title>
	</head>
	<body>
		<meta http-equiv="refresh" content="0; url=http://www.ricardoeletro.com.br">
	</body>
</html>
    <?
}else{
if($Eletro[0] == 'super-oferta'){
	

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
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


?>
<meta http-equiv="refresh" content="0; url=/produtos/<?=geraSenha(8, true, true, true);
?>/<?=$Eletro[1]?>/">
<?
}else{
?>
<?
$titlepagina = strtr($Eletro[2],"-"," "); 
$titlegame = ucwords($titlepagina); 

mysql_set_charset('utf8'); 
	            mysql_query("SET NAMES 'utf8'");
                mysql_query('SET character_set_connection=utf8');
                mysql_query('SET character_set_client=utf8');
                mysql_query('SET character_set_results=utf8'); 

?>
<html>
<head>
<title>
<? if($titlegame != ""){ echo"".$titlegame." -";}?>  Ricardo Eletro <? if($titlegame == ""){?> aqui tem Dono, pela luta do melhor pre&ccedil;o<? } ?>
</title>
<meta charset="utf-8">
<link rel="icon" href="http://www.ricardoeletro.com.br/web/re/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.ricardoeletro.com.br/web/re/favicon.ico" />
<meta name="description" content='Encontre aqui <?=$row['productNameExc']?> com &Oacute;timos pre&ccedil;os na RicardoEletro.com. Confira!' />
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../../../images.maquinadevendas.com.br/site/re/re_57.png" />

<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../images.maquinadevendas.com.br/site/re/re_72.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../images.maquinadevendas.com.br/site/re/re_114.png" />
<meta name="google-site-verification" content="hgorFwvgMHzXxUmeGTufBfhJDEM7AjkfeRHiN3ND8rc" />
<meta property="og:title" id="og-title" content="Playstation 4 com 500GB + NOVO Controle Sem Fio DualShock 4" /> <meta property="og:description" id="og-description" content="Encontre aqui <?=$row['productNameExc']?> com &Oacute;timos pre&ccedil;os na RicardoEletro.com. Confira!" />
<meta property="og:image" id="og-image" content="../../../images.maquinadevendas.com.br/50x50/produto/401490_2573107_20131114170233.jpg" />
<link href="/css/css.css" type="text/css" rel="stylesheet">
</link>

</head>
<body>
<div id="fb-root">
</div>
<div id="Limit" class="">
<div id="Busca-Cemporcento" class="content-full">
<div class="busca-content">
<div class="carrinho-resumo-atualizar">
<div class="carrinho-resumo" href="http://www.ricardoeletro.com.br/Carrinho"
tipocarrinho="1">
<div class="carrinho-resumo-titulo">
<div class="carrinho-resumo-text">meu carrinho</div>
<div class="carrinho-resumo-qnt">
</div>
</div>
<div class="carrinho-resumo-open">
<div class="carrinho-resumo-open-vazio-drag">
<div class="carrinho-resumo-open-vazio-top">
</div>
<div class="carrinho-resumo-open-vazio-middle">Arraste os produtos para adicionar ao carrinho de compras</div>
<div class="carrinho-resumo-open-vazio-bottom">
</div>
</div>
<div class="carrinho-resumo-open-vazio">
<div class="carrinho-resumo-open-vazio-top">
<div class="carrinho-resumo-vazio-subtotal">
<span class="valor">R$ 0,00</span>
<span class="subtotal">subtotal:</span>
</div>
<div class="carrinho-resumo-vazio-visualizar">
<img src="/images/site/re/button/btn_vizualisar_meu_carrinho.png" />
</div>
</div>
</div>
<div class="carrinho-resumo-open-produto">
<div class="carrinho-resumo-open-produto-top">
</div>
<div class="carrinho-resumo-open-produto-middle">
<div class="holder osX barra_resumo">
<div class="pane4" class="scroll-pane">
<div class="clear">
</div>
</div>
</div>
</div>
<div class="carrinho-resumo-open-produto-bottom">
<div class="carrinho-resumo-produto-subtotal">
<span class="valor">R$ 0,00</span>
<span class="subtotal">subtotal:</span>
</div>
<div class="carrinho-resumo-produto-visualizar">
<img src="/images/site/re/button/btn_vizualisar_meu_carrinho.png" />
</div>
</div>
</div>
</div>
</div>
</div>
<div class="barra-busca">
<div class="barra-busca-right">
</div>
<div class="barra-busca-left">
</div>
<div class="barra-busca-middle">
<input name="busca100" type="text" value="o que voce procura?" id="q2" />
</div>
</div>
<div class="duvida">
<div class="interrogacao">?</div>
</div>
<div class="busca-content-bullet-open">
</div>
</div>
</div>
<div id="envelope" data-url-envelope="" style="background: #FFF">
<div class="content-min" style="background: #FFF" class="envelopamento-topo">
</div>
<div class="content-full" id="Header" >
<div id="MiddleHome">
<div class="header-content">
<div class="logo">
<a href="http://www.ricardoeletro.com.br/">
<img src="/images/site/re/layout/logo_re.png">
</a>
</div>
<div class="menu-cliente">
<div class="saudacao">
<div id="B2cSaudacao" >
<div class="headerSaudacaoB2C">
<span id="TipoOperador">
</span> : <b> <span id="NomeOperador">
</span> </b> | <a href="https://carrinho.ricardoeletro.com.br/b2c/Sair" id="B2CSair" title="Sair">Sair</a>
</div>
<div class="content-revenda">
<div class="revenda input-container">
<input id="revenda" name="revenda" type="text" maxlength="10" conf="[{req:true,type:'num'}]" form="Revenda">
</div>
<input class="button" id="button_revenda" type="submit" value="Recuperar Venda" onsuccess="B2c_RecuperarVenda('')" form="Revenda" enter >
</div>
</div>
<div class="container-saudacao">
<div class="cadastro-login titulo-login">
<div class="headerLogin">
<span id='LoginSaudacao'>
</span>
<span id='LinkLogin'>
</span>
</div>
</div>
<div class="text titulo">Bem-vindo(a) ao site Ricardo Eletro</div>
</div>
</div>
<div class="link-acesso">
<div class="televendas">
<div class="img-televendas">
<img src="/images/site/re/icons/ico_telefone.png">
</div>
<div class="content-televendas">
<div class="pelo-telefone">Compre pelo telefone: <div class="number">
<a href="http://www.ricardoeletro.com.br/Televendas" id="regraTelevendas" title="Televendas" data-fancybox-type="ajax">0300-313-9000</a>
</div>
</div>
</div>
</div>
<div class="servico-lista-casamento">
<div class="img-ldc">
<img src="/images/40x40/site/re/icons/ico_lista_casamento.png">
</div>
<div class="content-ldc">
<div class="para-ldc">
<div class="text">
<a href="http://www.ricardoeletro.com.br/ListaCasamento">Lista de Casamento</a>
</div>
</div>
</div>
</div>
<div class="pessoal">
<div class="img-pessoal">
<img src="/images/site/re/icons/ico_interrogacao.png">
</div>
<div class="content-pessoal">
<div class="pessoal">
<div class="minha-conta">
<a href="https://carrinho.ricardoeletro.com.br/Cliente/MinhaConta">Minha Conta</a>
</div>
</div>
<div class="pessoal">
<div class="meus-pedidos">
<a href="https://carrinho.ricardoeletro.com.br/Pedido/Acompanhamento">Meus Pedidos</a>
</div>
</div>
<div class="pessoal">
<div class="cancelamento">
<a class="link-cancelamento" href="http://www.ricardoeletro.com.br/Cliente/LoginRetorno/Atendimento">Cancelamento</a>
</div>
</div>
<div class="pessoal">
<div class="Atendimento">
<a href="http://www.ricardoeletro.com.br/Atendimento">Atendimento</a>
</div>
</div>
<div class="clear">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="clear">
</div>
<div class="busca-content-header">
<div class="busca-carrinho">
<div class="carrinho-resumo-atualizar">
<div class="carrinho-resumo" href="http://www.ricardoeletro.com.br/Carrinho"
tipocarrinho="1">
<div class="carrinho-resumo-titulo">
<div class="carrinho-resumo-text">meu carrinho</div>
<div class="carrinho-resumo-qnt">
0 item</div>
</div>
<div class="carrinho-resumo-open">
<div class="carrinho-resumo-open-vazio-drag">
<div class="carrinho-resumo-open-vazio-top">
</div>
<div class="carrinho-resumo-open-vazio-middle">Arraste os produtos para adicionar ao carrinho de compras</div>
<div class="carrinho-resumo-open-vazio-bottom">
</div>
</div>
<div class="carrinho-resumo-open-vazio">
<div class="carrinho-resumo-open-vazio-top">
<div class="carrinho-resumo-vazio-subtotal">
<span class="valor">R$ 0,00</span>
<span class="subtotal">subtotal:</span>
</div>
<div class="carrinho-resumo-vazio-visualizar">
<img src="/images/site/re/button/btn_vizualisar_meu_carrinho.png" />
</div>
</div>
</div>
<div class="carrinho-resumo-open-produto">
<div class="carrinho-resumo-open-produto-top">
</div>
<div class="carrinho-resumo-open-produto-middle">
<div class="holder osX barra_resumo">
<div class="pane4" class="scroll-pane">
<div class="clear">
</div>
</div>
</div>
</div>
<div class="carrinho-resumo-open-produto-bottom">
<div class="carrinho-resumo-produto-subtotal">
<span class="valor">R$ 0,00</span>
<span class="subtotal">subtotal:</span>
</div>
<div class="carrinho-resumo-produto-visualizar">
<img src="/images/site/re/button/btn_vizualisar_meu_carrinho.png" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="barra-busca-header">
<div id="BuscaCemporcentoHeader" class="content-min">
<div class="barra-busca">
<div class="barra-busca-right" data-busca-header="1">
</div>
<div class="barra-busca-left">
</div>
<div class="barra-busca-middle">
<form action="http://www.ricardoeletro.com.br/Busca/Resultado/" method="get" id="FormBuscaHeader" >
<input type="text" value="o que voce procura?" name="q" id="q1" />
</form>
</div>
</div>
</div>
</div>
<div class="clear">
</div>
</div>
</div>
</div>
<div class="content-full">
<div id="CategoriasHeader">
<div class="conteudo center">
<div class="coluna" style="width: 191px">
<div class="loja">
<a title="Acessórios de Informática" href="http://www.ricardoeletro.com.br/Loja/Acessorios-de-Informatica/4523">Acess&oacute;rios de Inform&aacute;tica</a>
</div>
<div class="loja">
<a title="Ar e Ventilação" href="http://www.ricardoeletro.com.br/Loja/Ar-e-Ventilacao/4702">Ar e Ventila&ccedil;&atilde;o</a>
</div>
<div class="loja">
<a title="Automotivos" href="http://www.ricardoeletro.com.br/Loja/Automotivos/2553">Automotivos</a>
</div>
<div class="loja">
<a title="Bebes" href="http://www.ricardoeletro.com.br/Loja/Bebes/2322">Beb&ecirc;s</a>
</div>
<div class="loja">
<a title="Beleza & Saúde" href="http://www.ricardoeletro.com.br/Loja/Beleza-Saude/1">Beleza & Sa&uacute;de</a>
</div>
<div class="loja">
<a title="Brinquedos" href="http://www.ricardoeletro.com.br/Loja/Brinquedos/43">Brinquedos</a>
</div>
</div>
<span class="borda-divisao">
</span>
<div class="coluna" style="width: 191px">
<div class="loja">
<a title="Calçados" href="http://www.ricardoeletro.com.br/Loja/Calcados/2771">Cal&ccedil;ados</a>
</div>
<div class="loja">
<a title="Cama, Mesa & Banho" href="http://www.ricardoeletro.com.br/Loja/Cama-Mesa-Banho/2438">Cama, Mesa & Banho</a>
</div>
<div class="loja">
<a title="Câmeras & Filmadoras" href="http://www.ricardoeletro.com.br/Loja/Cameras-Filmadoras/2">C&acirc;meras & Filmadoras</a>
</div>
<div class="loja">
<a title="Casa & Ferramentas" href="http://www.ricardoeletro.com.br/Loja/Casa-Ferramentas/1085">Casa & Ferramentas</a>
</div>
<div class="loja">
<a title="Celulares & Telefones" href="http://www.ricardoeletro.com.br/Loja/Celulares-Telefones/44">Celulares & Telefones</a>
</div>
</div>
<span class="borda-divisao">
</span>
<div class="coluna" style="width: 191px">
<div class="loja">
<a title="Colchões" href="http://www.ricardoeletro.com.br/Loja/Colchoes/2772">Colch&otilde;es</a>
</div>
<div class="loja">
<a title="Eletrodomésticos" href="http://www.ricardoeletro.com.br/Loja/Eletrodomesticos/256">Eletrodom&eacute;sticos</a>
</div>
<div class="loja">
<a title="Eletrônicos" href="http://www.ricardoeletro.com.br/Loja/Eletronicos/108">Eletr&ocirc;nicos</a>
</div>
<div class="loja">
<a title="Eletroportáteis" href="http://www.ricardoeletro.com.br/Loja/Eletroportateis/258">Eletroport&aacute;teis</a>
</div>
<div class="loja">
<a title="Esporte & Lazer" href="http://www.ricardoeletro.com.br/Loja/Esporte-Lazer/889">Esporte & Lazer</a>
</div>
</div>
<span class="borda-divisao">
</span>
<div class="coluna" style="width: 191px">
<div class="loja">
<a title="Games" href="http://www.ricardoeletro.com.br/Loja/Games/47">Games</a>
</div>
<div class="loja">
<a title="Informática" href="http://www.ricardoeletro.com.br/Loja/Informatica/49">Inform&aacute;tica</a>
</div>
<div class="loja">
<a title="Instrumentos Musicais" href="http://www.ricardoeletro.com.br/Loja/Instrumentos-Musicais/3155">Instrumentos Musicais</a>
</div>
<div class="loja">
<a title="Malas de Viagem" href="http://www.ricardoeletro.com.br/Loja/Malas-de-Viagem/4302">Malas de Viagem</a>
</div>
<div class="loja">
<a title="Móveis" href="http://www.ricardoeletro.com.br/Loja/Moveis/2723">M&oacute;veis</a>
</div>
</div>
<span class="borda-divisao">
</span>
<div class="coluna" style="width: 191px">
<div class="loja">
<a title="Perfumaria" href="http://www.ricardoeletro.com.br/Loja/Perfumaria/890">Perfumaria</a>
</div>
<div class="loja">
<a title="Relógios" href="http://www.ricardoeletro.com.br/Loja/Relogios/107">Rel&oacute;gios</a>
</div>
<div class="loja">
<a title="Suplementos & Vitaminas" href="http://www.ricardoeletro.com.br/Loja/Suplementos-Vitaminas/2986">Suplementos & Vitaminas</a>
</div>
<div class="loja">
<a title="Tablets" href="http://www.ricardoeletro.com.br/Loja/Tablets/2935">Tablets</a>
</div>
<div class="loja">
<a title="Utilidades Domésticas" href="http://www.ricardoeletro.com.br/Loja/Utilidades-Domesticas/805">Utilidades Dom&eacute;sticas</a>
</div> </div>
</div>
<div class="clear">
</div>
</div>
<? require("{$folder}/{$pagina}.php");	?>
</div>

<style> #modal .conteudo .campodados .nome {padding: 1px 3px 1px 1px !important;background:#ffffff !important;height: 24px !important;margin-bottom:4px;}#modal .conteudo .campodados .nome input {height: 22px !important;}#modal .conteudo .campodados .validacao .email {padding:1px;background:#ffffff !important;height: 24px !important;}#modal .conteudo .campodados .validacao .email input {height: 22px !important;}#modal .conteudo .campodados .validacao {margin-top:0px !important;}#FormCaptacaoCliente #box_msg_retorno {color: #ffffff;float: left;font-size: 12px;font-weight: bold;padding-top: 1px;background:#B72025;padding:1px;}</style>
<div id="modal" style="display:none;">
<div class="fundo">
<div class="fechar" title="fechar">
</div>
<div class="conteudo">
<form action="#" id="FormCaptacaoCliente">
<div class="sexo">
<div class="homem">
<input type="radio" id="Homem" value="M" name="Sexo" tabindex="1">
</div>
<div class="mulher">
<input type="radio" id="Mulher" value="F" name="Sexo" tabindex="2">
</div>
</div>
<div class="campodados">
<div class="nome">
<input type="text" id="SeuNome" name="Nome" maxlength="20" tabindex="3">
</div>
<div class="validacao">
<div class="email">
<input type="text" id="SeuEmail" name="Email" maxlength="60" tabindex="4">
</div>
<div id="garantadesconto" tabindex="5">
</div>
</div>
</div>
<div class="box_msg" id="box_msg_retorno">
<div class="ErrorValidate">
</div>
</div>
</form>
</div>
</div>
</div>
<div class="clear">
</div>
<div id="Footer" class="content-full">
<div id="FooterContent">
<div class="condicoes">
<div class="barra">
</div>
<div class="text-condicoes">Os pre&ccedil;os e condi&ccedil;&otilde;es de pagamento divulgados no site da Ricardo Eletro, s&atilde;o exclusivos para compras atrav&eacute;s deste, n&atilde;o valendo necessariamente para a rede de lojas f&iacute;sicas e televendas.</div>
</div>
<div class="busca-footer">
<div class="center">
<div class="barra-footer">
<div id="BuscaCemporcentoFooter" class="content-min">
<div class="barra-busca">
<div class="barra-busca-right" href="http://www.ricardoeletro.com.br/Busca/Resultado/">
</div>
<div class="barra-busca-left">
</div>
<div class="barra-busca-middle">
<input type="text" value="o que voce procura?" name="busca100" />
</div>
</div>
</div>
</div>
</div>
</div>
<div class="content-footer">
<div class="center footer-content">
<div class="content-right">
<div class="titulo">redes sociais</div>
<div class="social">
<p>
<a class="twitter-follow-button" href="javascript:FollowTwitter('http://www.ricardoeletro.com.br/', 'RicardoEletro');">
<img src="/images/site/re/button/btn_twitter.png" alt="Seguir" />
</a>
</p>
<br />
<p>
<div class="fb-like-box" data-href="http://www.facebook.com/pages/Ricardo-Eletrocom-Oficial/194775443140?v=wall&amp;ref=nf" data-width="250" data-height="200" data-show-faces="true" data-stream="false" data-header="false">
</div>
</p>
</div>
</div>
<div class="content-left">
<div class="nossa-historia">
<a href="http://www.ricardoeletro.com.br/Hotsite/Html/4172">
<span class="titulo">nossa hist&oacute;ria</span> <span class="texto">A Ricardo Eletro &eacute; uma das cinco maiores redes de varejo de eletrodom&eacute;sticos do Brasil. Atualmente conta com mais de 290 lojas. <b>Saiba mais.</b>
</span>
</a>
</div>
<div class="institucional">
<div class="titulo">institucional</div>
<div class="content">
<div class="text ponto">
<a href="http://www.ricardoeletro.com.br/Institucional/Index/NossasLojas">Nossas Lojas</a>
</div>
<div class="text ponto">
<a href="http://www.sistematrabalheconosco.com.br/ricardoeletro" target="_blank">Trabalhe Conosco</a>
</div>
<div class="text">
<a href="http://www.ricardoeletro.com.br/MapaSite/Exibicao">Mapa do Site</a>
</div>
<div class="clear">
</div>
</div>
</div>
<div class="televendas">
<div class="titulo">televendas</div>
<div class="content">
<div class="text">0300-313-9000</div>
<div class="clear">
</div>
</div>
</div>
<div class="servicos">
<div class="titulo">servi&ccedil;os</div>
<div class="content">
<div class="text ponto">
<a href="http://www.ricardoeletrocursos.com.br/">Cursos Online</a>
</div>
<div class="text ponto">
<a href="http://www.ricardoeletro.com.br/Hotsite/Html/4138">Garantia Estendida</a>
</div>
<div class="text">
<a href="http://www.ricardoeletroviagens.com.br/" target="_blank">Viagens</a>
</div>
<div class="clear">
</div>
<div class="text ponto">
<a href="http://www.ricardoeletro.com.br/ListaCasamento">Lista de Casamento</a>
</div>
<div class="text ponto">
<a href="http://www.ricardoeletrofotos.com.br/">Revela&ccedil;&atilde;o Digital</a>
</div>
<div class="text">
<a href="http://www.ricardoeletro.com.br/ListaDesejo/Gestao">Central de Listas</a>
</div>
<div class="clear">
</div>
</div>
</div>
<div class="duvidas">
<div class="titulo">d&uacute;vidas</div>
<div class="content">
<div class="text ponto">
<a href="http://www.ricardoeletro.com.br/Atendimento">Central de Atendimento</a>
</div>
<div class="text ponto">
<a class="link-cancelamento" href="http://www.ricardoeletro.com.br/Cliente/LoginRetorno/Atendimento">Cancelamento</a>
</div>
<div class="text">
<a href="http://www.ricardoeletro.com.br/Atendimento?aid=18900341&amp;a=trocadevolucao">Troca &amp; Devolu&ccedil;&atilde;o</a>
</div>
<div class="clear">
</div>
<div class="text ponto">
<a href="http://www.ricardoeletro.com.br/Atendimento/Index/privacidade">Termo de Uso e Pol&iacute;tica de Privacidade</a>
</div>
<div class="text">
<a href="http://www.ricardoeletro.com.br/Atendimento?aid=18900341">Entrega de Produtos</a>
</div>
<div class="clear">
</div>
</div>
</div>
<div class="forma-pagamento">
<div class="titulo">formas de pagamento</div>
<div class="content">
<div class="text ponto">Cart&otilde;es de Cr&eacute;dito</div>
<div class="text">Boleto</div>
<div class="clear">
</div>
</div>
<div class="img-pagamento">
<img src="/images/site/re/icons/ico_bandeiras_cartoes.jpg">
</div>
</div>
</div>
<div class="content-middle">
<div class="titulo">certifica&ccedil;&atilde;o e seguran&ccedil;a</div>
<div class="certificado-seguranca">
<div class="clear-sale">
<img src="/images/site/re/icons/icon_clearSale.png">
</div>
<div class="buscape">
<img src="/images/site/re/icons/icon_buscape.png">
</div>
</div>
</div>
<div class="clear">
</div>
</div>
</div>
<div class="center" id="DireitosReservados">
<div class="content">
<div class="img-seguranca">
<img src="/images/site/re/icons/icon_uniCert.png">
</div>
<div class="text">RN COMERCIO VAREJISTA S.A - CNPJ:13.481.309/0101-55 - Inscri&ccedil;&atilde;o Estadual: 145.350.855.116 - Rua Luigi Galvani, n&deg; 70 - 4&deg; andar / S&atilde;o Paulo - SP - CEP: 04575-020<br />Endere&ccedil;o exclusivo para o envio/recebimento de correspond&ecirc;ncia da loja virtual.<br />Copyright &copy; 2012 ricardoeletro.com.br. Todos os direitos reservados &agrave; M&aacute;quina de Vendas Ltda.</div>
</div>
</div>
</div>
</div>
</div>
</div>

<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/981530582/?label=l3SZCKLB7gIQ1u-D1AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div style='display:none;'>OUTRO - </div>

</body>
<!-- Mirrored from www.ricardoeletro.com.br/Produto/Playstation-4-com-500GB-NOVO-Controle-Sem-Fio-DualShock-4-Fone-de-Ouvido-Cabo-HDMI/47-4635-4638-385865 by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 28 Dec 2013 00:25:08 GMT -->
</html>

<?
}
}
?>