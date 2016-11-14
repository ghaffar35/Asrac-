<?php
namespace Asrac\Domain;

class Event {

    private $id;
    private $title;
    private $lieu;
    private $dateEv;
	private $image;
    private $desc;
	
	public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

	public function getDateEv() {

		if(is_string($this->dateEv)){
			$this->dateEv = \DateTime::createFromFormat('Y-m-d H:i:s', $this->dateEv);
		}
        return $this->dateEv;
    }

    public function setDateEv($dateEv) {
		if(! is_string($dateEv)){
			$dateEv = $dateEv->format('Y-m-d H:i:s');
		}
        $this->dateEv = $dateEv;
    }

	public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

	public function getDesc() {
        return $this->desc;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }

}
