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

             <style>
             div.container4 {
                height: 40em;
                border: 2px solid red;
                position: relative }
                div.container4 p   { width: 60vw; min-width: 360px; text-align: center; margin: 5% auto; background-color: #FEEE33; }
                div.container4 form   { width: 60vw; min-width: 360px; text-align: center; margin: 5% auto; background-color: #ccc; }
             
            </style>

             <body>
<div class=container4>
            <p style="font-size:48px">
             &#128466; End of the year Best-of lists &#128334;
</p>
<form action="welcome.php" method="post">
<input type="submit" value="Submit"><br>

<textarea name="message" rows="10" cols="30">
Paste your list here
</textarea> 

</form>
</div>
             </body>
             </html>'
            );
            
        }
}
