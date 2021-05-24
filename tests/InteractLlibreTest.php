<?php 

use PHPUnit\Framework\TestCase;

/**
 * Class test del model InteractLlibre
 * 
 * @author Ronny
 * @version 1.0
 */

final class InteractLlibreTest extends TestCase {

    /**
     * Prova si es pot fer comentaris 
     */
    public function testComenta() : void{
        $interaccio = new InteractLlibre();
        $interaccio->setId_lector('6');
        $interaccio->setId_llibre('10');
        $interaccio->setCritica('Bona lectura');
        $resultat = $interaccio->comenta();

        $this->assertNotFalse($resultat);
    }

    /**
     * Fa la prova si la puntuacio es correcte
     */
    public function testPuntua() : void{
        $interaccio = new InteractLlibre();
        $interaccio->setId_lector('6');
        $interaccio->setId_llibre('10');
        $interaccio->setPuntuacio('4');

        $resultat = $interaccio->puntua();

        $this->assertNotNull($resultat);
        $this->assertEquals('4', $resultat['puntuacio_total']);
    }

}
