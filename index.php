<?php

// Creare un Computer con Dependency Injection e Object Composition, composto da 
// RAM
// ROM
// Scheda Video
// altro

class Computer {
    public $ram;
    public $rom;
    public $schedaVideo;
    public $cpu;

    public function __construct(Ram $ram, Rom $rom, Schedavideo $schedaVideo, Cpu $cpu)
    {
        $this->ram = $ram;
        $this->rom = $rom;
        $this->schedaVideo = $schedaVideo;
        $this->cpu = $cpu;


    }

    public function boot(){
            $this->ram->lavora();
            $this->rom->salvataggio();
            $this->schedaVideo->schermo();
            $this->cpu->cuore();

    }

}

class Ram {
    public function lavora(){
        echo "sto esplodendo, chiudi qualcosa \n";
    }
}

class Rom {
    public function salvataggio(){
        echo "mi impegno a terenrti le cose in memoria \n";
    }
}

class Schedavideo{
    public function schermo(){
    echo "grazie a me puoi vedere quello che vuoi sul monitor \n";    
    }    
}

class Cpu{
    public function cuore(){
    echo "Con il mio impegno tutto funziona a meraviglia \n";    
    }    
}

$ram = new ram();
$rom = new rom();
$schedaVideo = new Schedavideo();
$cpu = new Cpu();
$Computer = new Computer($ram,$rom, $schedaVideo,$cpu);
$Computer->boot();

// new attacco -> funzione