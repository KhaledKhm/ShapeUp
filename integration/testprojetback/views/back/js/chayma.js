function alpha(ch)
{
	ch = ch.toUpperCase();
	for (i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if (c < 'A' || c > 'Z')
			return false;
	}

	return true;
}



function verif(){
    /*code=f.code.value;
	if(isNaN(code) || code<100 || code >= 999999999)
	{
		alert("code invalide");
		return false;
	}*/

libelleP=f.libelleP.value;
if(alpha(libelleP)==false || libelleP.length<3 || libelleP.length>30)
	{
		alert("champ libelle invalide");
		return false;
	}

quantite=f.quantite.value;
	if(isNaN(quantite) || quantite<1 || quantite.indexOf('.') >= 0)
	{
		alert("quantite invalide");
		return false;
	}

prix=f.prix.value;
	if(isNaN(prix) || prix<1 || prix.indexOf('.') >= 0)
	{
		alert("Prix invalide");
		return false;
	}

}