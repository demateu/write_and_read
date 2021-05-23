<?php 
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

/**
 * Class test del model Usuari
 * @author Ronny
 * @version 1.0
 */

final class UsuariTest extends TestCase{

    /**
     * Metode de prova de la llibreria per instanciar l'objecte Usuari
     */
    public function testInstacia() : void{
        $usuari = new Usuari();

        $this->assertIsObject($usuari, "S'ha instanciat l'objecte i la conexio amb la bd es correcte");
    }

    /**
     * Prova si es pot guardar un usuari a la BD
     */
    public function testSave() : void {
        $usuari = new Usuari();
        $usuari->setNickname('Barney');
        $usuari->setNom_i_cognoms('Barney Mehr');
        $usuari->setDni('14857635Q');
        $usuari->setEmail('barneyDinosaur@gmail.com');
        $usuari->setData_alta('2020-04-02');
        $usuari->setAvatar_id(1);
        $usuari->setPassword('password');
        $usuari->setSubscrit(1);
        $usuari->setData_naixement('1998-10-01');
        $usuari->setId_tipus_usuari(1);
        $usuari->setBiografia(null);

        $save = $usuari->save();
        $this->assertNotEmpty($save);
        // 0 - guardat , 1 - Nickname ja existeix , 2 - correu ja existeix , 3 - DNI ja existeix
        $this->assertLessThanOrEqual(3, $save);

    }


    /**
     * Prova si es pot actualitza l'informacio d'un usuari
     */
    public function testUpdateUser() : void{
        $usuari = new Usuari();
        $usuari->setNickname('Kenny');
        $usuari->setNom_i_cognoms('Kenny Mehr');
        $usuari->setDni('14857635Q');
        $usuari->setEmail('barneyDinosaur@gmail.com');
        $usuari->setAvatar_id(1);
        $usuari->setBiografia(null);

        //Retorna true si la consulta s'ha fet correctament
        $resultat = $usuari->updateUser($usuari->getNickname(), $usuari->getNom_i_cognoms(), $usuari->getEmail(), $usuari->getDni(),$usuari->getBiografia(), $usuari->getAvatar_id());
        
        assertTrue($resultat, "No s'ha actualitzat l'usuari");
    }

    /**
     * Prova si es pot aconseguir tots l'usuaris de la BD
     */
    public function testGetAll() : void{
        $usuari = new Usuari();
        $resultat = $usuari->getAll();
        $resultat->fetch_all(MYSQLI_ASSOC);
        $this->assertNotNull($resultat);
    }

    /**
     * Prova si es pot aconseguir tots els escriptors de la BD
     */
    public function testGetAllEscriptors() : void {
        $usuari = new Usuari();
        $resultat = $usuari->getAllEscriptors();
        $tipusUsuari = $resultat->fetch_object()->id_tipus_usuari;
        $resultat = $resultat->num_rows;
        $this->assertEquals('2', $tipusUsuari);//Comprova que sigui el id de tipus 2 (escriptor)
        $this->assertGreaterThan(0, $resultat, "No s'han trobat resultats o n'hi ha");//Que retorni rows de resultats
    }

    /**
     * Prova si es pot aconseguir tots els lectors de la BD
     */
    public function testGetAllLectors() : void {
        $usuari = new Usuari();
        $resultat = $usuari->getAllLectors();
        $tipusUsuari = $resultat->fetch_object()->id_tipus_usuari;
        $resultat = $resultat->num_rows;
        $this->assertEquals('1', $tipusUsuari);//Comprova que sigui el id de tipus 1 (Lector)
        $this->assertGreaterThan(0, $resultat, "No s'han trobat resultats o n'hi ha");//Que retorni rows de resultats
    }

    /**
     * Busca un usuari per ID
     */
    public function testBuscarUsuari() : void{
        $usuari = new Usuari();
        $usuari->setId('7');
        $resultat = $usuari->buscarUsuari();
        $this->assertEquals('eren@gmail.com' , $resultat->email);
    }

    /**
     * Prova si es pot aconseguir tots els llibres d'un escriptor
     */
    public function testBuscarUsuariLlibres() : void {
        $usuari = new Usuari();
        $usuari->setId('7');
        $resultat = $usuari->buscarUsuariLlibres()->fetch_object();

        $this->assertEquals('eren@gmail.com', $resultat->email);
        $this->assertNotNull($resultat->id);
    }

    /**
     * Prova si es pot aconseguir un usuari per el seu Email
     */
    public function testBuscarUsuariPerEmail() : void{
        $usuari = new Usuari();
        $usuari->setEmail('eren@gmail.com');
        $resultat = $usuari->buscarUsuariperEmail();

        $this->assertEquals($usuari->getEmail(), $resultat->email);
    }

    /**
     * Prova aconseguir tots els llibres favorits d'un usuari
     */
    public function testBuscarFavoritsUsuari(){
        $usuari = new Usuari();
        $usuari->setId('1');
        $resultat = $usuari->buscarFavoritsUsuari();

        $this->assertNotNull($resultat);

    }

    /**
     * Prova si es pot aconseguir totes les imatges d'avatar
     */
    public function testGetAllAvatars(){
        $usuari = new Usuari();

        $resultat = $usuari->getAllAvatars();

        $this->assertNotNull($resultat);
    }
}