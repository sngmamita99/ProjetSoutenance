<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css?t=<?php echo time();?>">
    <title>Accueuil</title>
    </head>
    <body>
        <section id="part1">
		 <p  id="lien0"><a href="accueil.php?profil=admin"><button>ADMIN</button></a></p>
		<p>
            <p id="lien1"><a href="officier.php"><button>OFFICIER</button></a></p>
           <p id="lien2"><a href="agent.php"><button>AGENT</button></a></p>
		    </p>
		   <p>
           <p id="lien3"><a  href="citoyen.php"><button>CITOYEN</button></a></p>
           <p  id="lien4"><a href="livreur.php"><button>LIVREUR</button></a></p>
		   </p>
        </section>
    </body>
</html>