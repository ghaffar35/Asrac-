<?php

namespace Asrac\DAO;

use Asrac\Domain\Event;

class EventDAO extends DAO {

	// Return a list of all event, sorted by id (most recent first). 
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
	
	// Return a list of Event in interval, sorted by date (most recent first).
    public function findByDate() {
		$date = new \DateTime();
		$endDate = new \DateTime();
		$endDate->add(new \DateInterval('P3M'));
        $sql = "select * from Event where ev_date BETWEEN '".$date->format('Y-m-d')."' AND '".$endDate->format('Y-m-d')."' order by ev_date asc";
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
        $sql = "select * from Event where ev_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No event matching id " . $id);
    }

	// Creates an Event object based on a DB row.
    protected function buildDomainObject($row) {
        $event = new Event();
        $event->setId($row['ev_id']);
        $event->setTitle($row['ev_title']);
        $event->setLieu($row['ev_lieu']);
		$event->setDateEv($row['ev_date']);
		$event->setImage($row['ev_image']);
		$event->setDesc($row['ev_desc']);
        return $event;
    }

	// Saves an Event into the database.
    public function save(Event $event) {

        $eventData = array(
            'ev_title' => $event->getTitle(),
            'ev_lieu' => $event->getLieu(),
			'ev_date' => $event->getdateEv()->format('Y-m-d H:i:s'),
			'ev_image' => $event->getImage(),
			'ev_desc' => $event->getDesc()
            );

        if ($event->getId()) {
            // The event has already been saved : update it
            $this->getDb()->update('Event', $eventData, array('ev_id' => $event->getId()));
        } else {
            // The event has never been saved : insert it
            $this->getDb()->insert('Event', $eventData);
            // Get the id of the newly created event and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $event->setId($id);
        }
    }
	
	// Removes an event from the database.
    public function delete($id) {
        // Delete the event
        $this->getDb()->delete('Event', array('ev_id' => $id));
    }
}
