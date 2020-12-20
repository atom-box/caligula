<?php
// src/Controller/2020
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BestOf
{
    /**
     * @Route("best-of")
     */

     public function inputTheList(){

         
         
         return new Response(
             '<html>
             <body>

            <p>&#129338;</p>
            <p style="font-size:48px">
             &#128466; End of the year Best-of lists &#128334;
</p>
             <form action="welcome.php" method="post">
             Name: <input type="text" name="name"><br>
             E-mail: <input type="text" name="email"><br>
             <input type="submit">
             </form>
             </body>
             </html>'
            );
            
        }
}
