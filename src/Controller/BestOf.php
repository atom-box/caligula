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

    public function inputTheList()
    {
        return new Response(
            '<html>
             <style>
             div.container4 {
                height: 40em;
                border: 2px solid red;
                position: relative }
            div.container4 h1     { width: 60vw; min-width: 360px; text-align: center; margin: 5% auto; background-color: #FEEE33; }
            div.container4 form   { width: 60vw; min-width: 360px; text-align: center; margin: 5% auto; background-color: #ccc; }
            </style>
            <body>
                <div class=container4>
                    <h1 style="font-size:48px">
                        &#128466; End of the year Best-of lists &#128334;
                    </h1>
                    <form method="post" action="">
                    <p>
                        <label for="name">Name:</label><br>
                        <input name="user-name" id="user-name" type="text" ></input>
                    </p>
                    <p>
                        <label for="category">Category:</label><br>
                        <input name="category"  id="category"  type="text" >
                    </p>
                    <p>
                        <label for="user-submit-list">Your favorites:</label><br>
                        <textarea name="message" id="user-list" rows="10" cols="30">x</textarea> 
                    </p>
                    <p>
                        <input name="send" type="submit" value="Make"><br>
                    </p>

                    </form>
                </div>
             </body>
             </html>'
        );
    }
}
