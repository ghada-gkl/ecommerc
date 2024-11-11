<?php
class produit{
    private $id,$libelle,$prix,$qte,$desc,$image,$promo;
    public function __construct($i,$l,$p,$q,$d,$im,$pr)
    {
        $this->id=$i;
        $this->libelle=$l;
        $this->prix=$p;
        $this->qte=$q;
        $this->desc=$d;
        $this->image=$im;
        $this->promo=$pr;

    }
    
}