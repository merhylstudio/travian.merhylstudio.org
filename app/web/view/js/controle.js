function controle()
{
	nom = document.getElementById('nom').value;
	prenom = document.getElementById('prenom').value;
	tel = document.getElementById('phone').value;
	mail =  document.getElementById('email').value;
	msg =  document.getElementById('msg').value;
	if (nom == '')
	{
		alert ('Requis : nom');
		document.getElementById('nom').style.border='solid 2px red' ;
		error =1;
		return false;
	}
	if ( prenom =='')
	{
		alert ('Requis : prenom');
		document.getElementById('prenom').style.border='solid 2px red' ;
		return false;
		error =1;
	}
	if ( tel =='')
	{
		alert ('Requis : téléphone');
		document.getElementById('phone').style.border='solid 2px red' ;
		return false;
		error =1;
	}
	if ( mail =='')
	{
		alert ('Requis : email');
		document.getElementById('email').style.border='solid 2px red' ;
		return false;
		error =1;
	}
	if ( msg =='')
	{
		alert ('Requis : message ');
		document.getElementById('msg').style.border='solid 2px red' ;
		return false;
		error =1;
	}
}
