<?php
class latihan1 extends CI_controller
{
      public function index()
     {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
     }
   
        public function penjumlahan($n1, $n2)
     {
        $this->load->Model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
     }
}



