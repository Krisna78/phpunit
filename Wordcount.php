<?php 
// membuat class word count sebagai contoh library
class Wordcount {
    // dan membuat method untuk mengisi kata atau kalimat yang akan di masukkan ke parameter
    public function countWords($sentence) {
        /* explode digunakan untuk memecah data yang memiliki space pada kalimat */
        return count(explode(" ",$sentence));
    }
}
?>