<?php

namespace Asrac\DAO;

use Asrac\Domain\Event;

class EventDAO extends DAO {

	// Return a list of all event, sorted by date (most recent first).
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
