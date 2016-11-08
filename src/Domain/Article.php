<?php
namespace Asrac\Domain;

class Article {

    private $id;
    private $title;
    private $content;
    private $image;
    private $dateArt;
    private $theme;

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

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

	public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }
	public function getDateArt() {

		if(is_string($this->dateArt)){
			$this->dateArt = \DateTime::createFromFormat('Y-m-d H:i:s', $this->dateArt);
		}
        return $this->dateArt;
    }

    public function setDateArt($dateArt) {
		if(! is_string($dateArt)){
			$dateArt = $dateArt->format('Y-m-d H:i:s');
		}
        $this->dateArt = $dateArt;
    }

	public function getTheme() {
        return $this->theme;
    }

    public function setTheme($theme) {
        $this->theme = $theme;
    }

}
