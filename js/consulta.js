//função para pegar o objeto ajax do navegador
function xmlhttp()
{
	// XMLHttpRequest para firefox e outros navegadores
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}

	// ActiveXObject para navegadores microsoft
	var versao = ['Microsoft.XMLHttp', 'Msxml2.XMLHttp', 'Msxml2.XMLHttp.6.0', 'Msxml2.XMLHttp.5.0', 'Msxml2.XMLHttp.4.0', 'Msxml2.XMLHttp.3.0','Msxml2.DOMDocument.3.0'];
	for (var i = 0; i < versao.length; i++)
	{
		try
		{
			return new ActiveXObject(versao[i]);
		}
		catch(e)
		{
			alert("Seu navegador não possui recursos para o uso do AJAX!");
		}
	} // fecha for
	return null;
} // fecha função xmlhttp

//função para fazer a requisição da página que efetuará a consulta no DB

/*-- Campo 01 --*/

function carregar1()
{
   a = document.getElementById('busca1').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca1='+a, true);
	   ajax.onreadystatechange = trazconteudo1; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo1()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada1").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada1").textContent;
			var caminho = document.getElementById("saida1").innerHTML = pegaid;
			document.getElementById("saida1").value = caminho;
		}
	}
}

function Enviar1(){
	var pegaid = document.getElementById("entrada1").textContent;
	var caminho = document.getElementById("saida1").innerHTML = pegaid;
	document.getElementById("saida1").value = caminho;
}

function sendfunct1 (){
window.setTimeout(carregar1(),0050);
window.setTimeout(Enviar1(),1000)
}

/*-- Campo 02 --*/

function carregar2()
{
   a = document.getElementById('busca2').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca2='+a, true);
	   ajax.onreadystatechange = trazconteudo2; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo2()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada2").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada2").textContent;
			var caminho = document.getElementById("saida2").innerHTML = pegaid;
			document.getElementById("saida2").value = caminho;
		}
	}
}

function Enviar2(){
	var pegaid = document.getElementById("entrada2").textContent;
	var caminho = document.getElementById("saida2").innerHTML = pegaid;
	document.getElementById("saida2").value = caminho;
}

function sendfunct2 (){
window.setTimeout(carregar2(),0050);
window.setTimeout(Enviar2(),1000)
}

/*-- Campo 03 --*/

function carregar3()
{
   a = document.getElementById('busca3').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca3='+a, true);
	   ajax.onreadystatechange = trazconteudo3; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo3()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada3").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada3").textContent;
			var caminho = document.getElementById("saida3").innerHTML = pegaid;
			document.getElementById("saida3").value = caminho;
		}
	}
}

function Enviar3(){
	var pegaid = document.getElementById("entrada3").textContent;
	var caminho = document.getElementById("saida3").innerHTML = pegaid;
	document.getElementById("saida3").value = caminho;
}

function sendfunct3 (){
window.setTimeout(carregar3(),0050);
window.setTimeout(Enviar3(),1000)
}

/*-- Campo 04 --*/

function carregar4()
{
   a = document.getElementById('busca4').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca4='+a, true);
	   ajax.onreadystatechange = trazconteudo4; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo4()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada4").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada4").textContent;
			var caminho = document.getElementById("saida4").innerHTML = pegaid;
			document.getElementById("saida4").value = caminho;
		}
	}
}

function Enviar4(){
	var pegaid = document.getElementById("entrada4").textContent;
	var caminho = document.getElementById("saida4").innerHTML = pegaid;
	document.getElementById("saida4").value = caminho;
}

function sendfunct4 (){
window.setTimeout(carregar4(),0050);
window.setTimeout(Enviar4(),1000)
}

/*-- Campo 05 --*/

function carregar5()
{
   a = document.getElementById('busca5').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca5='+a, true);
	   ajax.onreadystatechange = trazconteudo5; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo5()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada5").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada5").textContent;
			var caminho = document.getElementById("saida5").innerHTML = pegaid;
			document.getElementById("saida5").value = caminho;
		}
	}
}

function Enviar5(){
	var pegaid = document.getElementById("entrada5").textContent;
	var caminho = document.getElementById("saida5").innerHTML = pegaid;
	document.getElementById("saida5").value = caminho;
}

function sendfunct5 (){
window.setTimeout(carregar5(),0050);
window.setTimeout(Enviar5(),1000)
}

/*-- Campo 06 --*/

function carregar6()
{
   a = document.getElementById('busca6').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca6='+a, true);
	   ajax.onreadystatechange = trazconteudo6; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo6()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada6").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada6").textContent;
			var caminho = document.getElementById("saida6").innerHTML = pegaid;
			document.getElementById("saida6").value = caminho;
		}
	}
}

function Enviar6(){
	var pegaid = document.getElementById("entrada6").textContent;
	var caminho = document.getElementById("saida6").innerHTML = pegaid;
	document.getElementById("saida6").value = caminho;
}

function sendfunct6 (){
window.setTimeout(carregar6(),0050);
window.setTimeout(Enviar6(),1000)
}

/*-- Campo 07 --*/

function carregar7()
{
   a = document.getElementById('busca7').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca7='+a, true);
	   ajax.onreadystatechange = trazconteudo7; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo7()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada7").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada7").textContent;
			var caminho = document.getElementById("saida7").innerHTML = pegaid;
			document.getElementById("saida7").value = caminho;
		}
	}
}

function Enviar7(){
	var pegaid = document.getElementById("entrada7").textContent;
	var caminho = document.getElementById("saida7").innerHTML = pegaid;
	document.getElementById("saida7").value = caminho;
}

function sendfunct7 (){
window.setTimeout(carregar7(),0050);
window.setTimeout(Enviar7(),1000)
}

/*-- Campo 08 --*/

function carregar8()
{
   a = document.getElementById('busca8').value;
   ajax = xmlhttp();
   if (ajax)
   {
	   ajax.open('get','busca.php?busca8='+a, true);
	   ajax.onreadystatechange = trazconteudo8; 
	   ajax.send(null);
   }
}

//função para incluir o conteúdo na pagina

function trazconteudo8()
{
	if (ajax.readyState==4)
	{
		if (ajax.status==200)
		{
			document.getElementById("entrada8").innerHTML = ajax.responseText;
			var pegaid = document.getElementById("entrada8").textContent;
			var caminho = document.getElementById("saida8").innerHTML = pegaid;
			document.getElementById("saida8").value = caminho;
		}
	}
}

function Enviar8(){
	var pegaid = document.getElementById("entrada8").textContent;
	var caminho = document.getElementById("saida8").innerHTML = pegaid;
	document.getElementById("saida8").value = caminho;
}

function sendfunct8 (){
window.setTimeout(carregar8(),0050);
window.setTimeout(Enviar8(),1000)
}