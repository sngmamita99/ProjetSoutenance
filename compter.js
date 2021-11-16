function comptage_numRegistre()
 {
	 var ann=document.getElementById("annee_registre");
	 var annValue=ann.value;
	 var url='comptage_registre.php?msg='+annValue;
	var xhr=new XMLHttpRequest();
	xhr.open('GET',url);
	xhr.send();
	if (xhr.readyState == 4 && xhr.status == 200)
	{
		var num_registre=document.getElementById("num_registre").value=xhr.responseText;
}
 }