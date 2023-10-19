<?php 
// mengambil data TestCase dari resource
use PHPUnit\Framework\TestCase;
// mengambil data dari class wordcount.php
require "Wordcount.php";
class simpleTest extends TestCase {
    public function testCountWords() {
        // Kita pakai class yang mau kita test.
        $Wc = new WordCount();
        // Kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Joko"; // 4 Kata ..
        $WordCount = $Wc->countWords($TestSentence);
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals(4, $WordCount); 
    }
}
?>