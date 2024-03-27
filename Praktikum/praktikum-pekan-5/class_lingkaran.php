<?php
class Lingkaran{
    /**
     * Access Modifier:
     * 1. Public -> Dapat di access walaupun diluar class
     * 2. Private -> Hanya dapat di dalam class
     * 3. Protected -> mirip seperti private, tetapi dapat juga diaccess oleh 
     */

     
    //  properti/atribut
    private $jari;
    const PHI = 3.14;

    // method -> function yang ada dalam class
    public function __construct($r){

        // isi atribut saat pembuattan object
        $this->jari = $r;
    }

    public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling(){
        return 2* self::PHI * $this->jari;
    }

}
