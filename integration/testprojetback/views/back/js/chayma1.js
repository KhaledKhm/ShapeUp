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


function verif1(){
id=f.id.value;
	if(isNaN(id) || id<1 || id.indexOf('.') >= 0)
	{
		alert("identifiant invalide");
		return false;
	}

	libelleC=f.libelleC.value;
if(alpha(libelleC)==false || libelleC.length<3 || libelleC.length>100)
	{
		alert("champ libelle invalide");
		return false;
	}

	descriptionC=f.descriptionC.value;
if(alpha(descriptionC)==false || descriptionC.length<3 || descriptionC.length>100)
	{
		alert("champ description invalide");
		return false;
	}



}