  /*recuperation c'est là ou l'on veut fare la recuperation le div*/
  var recuperation=document.getElementById('recuperation');
  /* icon_prefix c'est l'identifiant de la barre de recherche*/
     var icon_prefix=document.getElementById('icon_prefix');
	  // l_naissance l'identifiant du tableau affichée
	var l_naissance=document.getElementById('l_naissance');
	// var titreR=document.getElementById('titreR');
       recuperation.style.visibility='hidden';
     icon_prefix.addEventListener("keyup",function(e){
       l_naissance.style.visibility='hidden';
	   // titreR.style.visibility='hidden';
       var nt=icon_prefix.value;
       var xhr=new XMLHttpRequest();
       var url="rechercherDec.php";
       xhr.open('POST',url);
       xhr.setRequestHeader("Content-Type",

       "application/x-www-form-urlencoded");
        xhr.send("nom="+nt);
        xhr.onreadystatechange=function(){
          if(xhr.readyState==4 && xhr.status==200);{
          recuperation.innerHTML=xhr.responseText;

          recuperation.style.visibility='visible';
          }
        }
        
       
        var tds=document.querySelectorAll('#autoc td');
        var n=tds.length;
        var i=0;
        for(i=0;i<n;i++){
          td=tds[i];
          td.addEventListener('click',function(){
            this.style.backgroundColor='yellow';
          },false);
        }
        td.addEventListener('click',function(){
          icon_prefix.value=this.innerHTML ;
        },false);
     
      


     },false);


    

