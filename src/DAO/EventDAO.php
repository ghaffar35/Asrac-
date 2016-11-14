<?php

namespace Asrac\DAO;

use Asrac\Domain\Event;

class EventDAO extends DAO {

	// Return a list of all Event, sorted by date (most recent first).
    public function findAll() {
        $sql = "select * from Event order by ev_id desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $events = array();
        foreach ($result as $row) {
            $eventId = $row['ev_id'];
            $events[$eventId] = $this->buildDomainObject($row);
        }
        return $events;
    }

	//Return one Event with id
	public function find($id) {
        $sql = "select * from Event order by ev_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No event matching id " . $id);
    }

	// Creates an Event object based on a DB row.
    protected function buildDomainObject($row) {
        $article = new Article();
        $article->setId($row['ev_id']);
        $article->setTitle($row['ev_title']);
        $article->setLieu($row['ev_lieu']);
		$article->setDateEv($row['ev_date']);
		$article->setDesc($row['ev_desc']);
        return $article;
    }
