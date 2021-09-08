var p=document.getElementById('bsubmit');
var sec1=document.getElementById('section1');
var sec2=document.getElementById('section2');
var val=document.getElementById('rech');

p.addEventListener("click",function(){	
    var objb = new XMLHttpRequest();
    var v= val.value;
	var url="TROfficier.php?vals="+v;
    objb.open('GET',url);
    objb.send(null);

    objb.onreadystatechange=function(){
        if(objb.readyState==4){
	        if(objb.status==200){
				//alert(sec2.innerHTML);
	            sec2.innerHTML=objb.responseText;
				sec1.style.visibility="hidden";
	       }
        }				
    }
},false);