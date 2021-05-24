<?php 
use PHPUnit\Framework\TestCase;

/**
 * Class test del model Llibre
 * 
 * @author Ronny
 * @version 1.0
 */

final class LlibreTest extends TestCase{

    /**
     * Prova si es pot guardar un llibre a la BD
     */
    public function testSave(){
        $llibre = new Llibre();
        $llibre->setId_escriptor('2');
        $llibre->setTitol("El joc d'ender");
        $llibre->setDescripcio_curta("Un mon futurista del 2100");
        $llibre->setSinopsis("Aquest mon futurista tè una guerra inevitable");
        $llibre->setPortada_url("/write_and_read/assets/img/cover_books/fantasy-4615631_640");
        $llibre->setId_categoria('4');

        $resultat = $llibre->save();

        $this->assertNotFalse($resultat);
        
    }

    /**
     * Test que busca un llibre per ID
     */
    public function testBuscarLlibrePerId(){
        $llibre = new Llibre();
        $llibre->setId('10');
        $resultat = $llibre->buscarLlibrePerId();

        $this->assertNotNull($resultat);
        $this->assertEquals("Alícia a través del mirall", $resultat->titol);

    }

    /**
     * Prova si es poden aconseguir els llibres per id categoria
     */
    public function testGetLlibresPerCategoria(){
        $llibre = new Llibre();
        $llibre->setId_categoria('4');

        $resultat = $llibre->getLlibresPerCategoria()->num_rows;

        $this->assertNotNull($resultat);
        $this->assertGreaterThan(0 , $resultat);
    }

    /**
     * Prova si es pot fer busquedas per una cadena de text
     */
    public function testGetLlibresPerString(){
        $llibre = new Llibre();

        $resultat = $llibre->getLlibresPerString('Ender')->num_rows;

        $this->assertNotNull($resultat);
        $this->assertEquals(1, $resultat);
        
        
    }
}