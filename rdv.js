// setTimeout(function(){
	// alert(Bonjour);
// },100);
var d= new Date();
var today=document.getElementsByTagName("a");
var n=today.length;
var i=0;
for(i=0;i<n;i++)
{
	today[i].addEventListener("mousemove",function(e){
		// alert(this.innerText);
		if(this.innerText<d.getDate())
		{
			this.setAttribute('href','#');
			
		}
	},false);
}
var dd=document.getElementById('dateSoumission');
dd.addEventListener("click",function(e)
{
	alert("sql");
});
// today.addEventListener("click",function(e){
	// alert(tfat);
// },false);

// alert("Bonjour");
// var variableRecuperee = document.getElementById(variableAPasser).value;