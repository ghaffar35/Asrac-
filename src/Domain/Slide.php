<?php
namespace Asrac\Domain;

class Slide {

	private $id;
	private $title;
	private $subTitle;
	private $image;

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

    public function getSubTitle() {
        return $this->subTitle;
    }

    public function setSubTitle($subTitle) {
        $this->subTitle = $subTitle;
    }

	public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

}
