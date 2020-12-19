<!-- lasphere2ememethode2.php -->

<html>

               <head>

                               <title> La sphere </title>

               </head>

               

               <body bgcolor="yellow" text="blue">

                               <h1> <font color="black"> Aire ou volume d'une sphere, le resultat:</font> </h1>

                               

                               <h2>

                               <!-- Code PHP -->

                               <?php

                                       /* Comparaison de la chaine de caracteres (string en anglais) reçue de la partie

                                       "sphere" du formulaire */

                                       // Si la chaine contient la valeur "aire", alors on calcule l'aire de la sphere.

                                       if (strcmp($_GET['sphere'], "aire") == 0)

                                                               {$resultat = 4 * 3.14 * $_POST['rayon'] * $_GET['rayon'];

                                                                print ("Aire = $resultat m²");                                                                                                                                 

                                                               }

                                                               

                                       // Si la chaine contient la valeur "volume", alors on calcule le volume de la sphere.

                                       if (strcmp($_GET['sphere'], "volume") == 0)

                                                               {$resultat = 4/3 * 3.14 * $_GET['rayon'] * $_GET['rayon'] * $_GET['rayon'];

                                                                print ("Volume = $resultat m3");                                                                                                                                 

                                                               }                                        

                               ?>

                               <!-- Fin du code PHP -->

                               </h2>                                                                

               </body>

</html>