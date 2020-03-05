<?php

class Catalog {
    /**
     *
     * @var Array Class Document object
     */
    private $documents = array();
    
    /**
     * создает массив классов Document
     */
    public function getDocuments() {
        $adapter = new Adapter("../index.html");
        $arrayDocs = $adapter->getDocs();
        foreach ($arrayDocs as $val) {
            $this->createDocument($val['name'], $val['href']);
        }
    }
    
    public function editDocumebt($id) {
        
    }
    
    public function createDocument($id, $source) {
        $this->documents[] = new Document($id, $source);
    }
    
}
