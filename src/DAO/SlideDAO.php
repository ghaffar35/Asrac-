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

	//Return one Slide with id
	public function find($id) {
        $sql = "select * from Slide where sl_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No slide matching id " . $id);
    }

	// Creates an Slide object based on a DB row.
    protected function buildDomainObject($row) {
        $slide = new Slide();
        $slide->setId($row['sl_id']);
        $slide->setTitle($row['sl_title']);
        $slide->setSubTitle($row['sl_subTitle']);
		$slide->setImage($row['sl_image']);
        return $slide;
    }
}
