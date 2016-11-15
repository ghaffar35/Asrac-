<?php

namespace Asrac\DAO;

use Asrac\Domain\Slide;

class SlideDAO extends DAO {

	// Return a list of all slide, sorted by id (most recent first).
    public function findAll() {
        $sql = "select * from Slide order by sl_id desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $slides = array();
        foreach ($result as $row) {
            $slidesId = $row['ev_id'];
            $slides[$slidesId] = $this->buildDomainObject($row);
        }
        return $slides;
    }
}
