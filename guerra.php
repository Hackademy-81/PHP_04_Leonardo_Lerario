<?php
// Siamo in guerra!
// Creare una classe Esercito, che sarà costituita da una Difesa e da un Attacco.
// Entrambe le classi si estenderanno a loro volta e avranno i rispettivi metodi: date sfoggio alla vostra fantasia!

// Esempio: 
// ATTACCO: Fanteria, cavalleria, arcieri, catapulte
// DIFESA: Fossato, fortezza, mura di cinta ecc..
// Creare quindi degli oggetti di classe esercito che possano attaccare o difendere utilizzando i metodi delle diverse classi create

class Esercito{
        public $attacco;
        public $difesa;


        public function __construct(Attacco $attacco, Difesa $difesa)
        {
            $this->attacco = $attacco;
            $this->difesa = $difesa;

        }

        public function attacco(){
        
        echo "i malati di clash royal \n \n";
            $this->attacco->goblin();
            $this->attacco->scheletri();
            $this->attacco->barbari();
            $this->attacco->principessa();
            $this->attacco->drago();

        }

        public function difesa(){
        
            echo "i difensori malati di clash royal \n \n";
                $this->difesa->cannone();
                $this->difesa->tesla();
                $this->difesa->tronco();
                $this->difesa->mortaio();
                $this->difesa->reclute();
    
            }
}


class Attacco{
    public function goblin(){
        echo "Goblin: Esseri brutti minuscoli armati di coltello \n \n";
    }

    public function scheletri(){
        echo "Scheletri: scheletrini piccoli e cazzuti pronti a rompere tutto \n \n";
    }

    public function barbari(){
        echo "Barbari: tizi biondi muscolosi super belli, spadati, pronti a romperti il culo \n \n";
    }

    public function principessa(){
        echo "Principessa: spara con il suo arco a distanze allucinanti \n \n";
    }

    public function drago(){
        echo "Cucciolo di drago: Draghetto che sputa palle di fuoco potenti \n \n";
    }
}

class Difesa{
    public function cannone(){
        echo "Cannone: Spara palle di cannone e fa male \n \n";
    }

    public function tesla(){
        echo "Tesla: spara fulmini e paralizza i nemici \n \n";
    }

    public function tronco(){
        echo "IL TRONCO: tronco con spuntoni che che schiaccia e macera i nemici  \n \n";
    }

    public function mortaio(){
        echo "Mortaio: Spara palle di ferro gigantesche e fa esplodere tutto \n \n";
    }

    public function reclute(){
        echo "Reclute Royal: Tizi armati di lancia con il nasone e uno scudo \n \n";
    }
}


$attacco = new Attacco();
$difesa = new Difesa();

$esercito = new Esercito($attacco,$difesa);
$esercito->attacco();
$esercito->difesa();
