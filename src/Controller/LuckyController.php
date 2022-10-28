<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @throws Exception if random_int can't find an appropriate source of randomness.
     */
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html lang="en"><body>Lucky number: '.$number.'</body></html>'
        );
    }
}