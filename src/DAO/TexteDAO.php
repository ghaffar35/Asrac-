<?php

namespace Asrac\DAO;

use Asrac\Domain\Texte;

class TexteDAO extends DAO {

	// Return a list of all texte, sorted by id (most recent first).
    public function findAll() {
        $sql = "select * from Texte";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $texte = array();
        foreach ($result as $row) {
            $texteId = $row['te_id'];
            $texte[$texteId] = $this->buildDomainObject($row);
        }
        return $texte;
    }

	// Creates an texte object based on a DB row.
    protected function buildDomainObject($row) {
        $texte = new Texte();
        $texte->setId($row['te_id']);
        $texte->sgetTexteDesc($row['te_texteDesc']);
        return $texte;
    }

	// Saves an texte into the database.
    public function save(Texte $texte) {
        $texteData = array(
            'te_texteDesc' => $texte->getTexteDesc(),
            );

        if ($texte->getId()) {
            // The texte has already been saved : update it
            $this->getDb()->update('Texte', $texteData, array('te_id' => $texte->getId()));
        }
		else {
            // The texte has never been saved : insert it
            $this->getDb()->insert('Texte', $texteData);
            // Get the id of the newly created texte and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $texte->setId($id);
        }
    }
}
