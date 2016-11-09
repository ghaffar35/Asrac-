<?php

namespace Asrac\DAO;

use Asrac\Domain\Article;

class ArticleDAO extends DAO
{
    // Return a list of all articles, sorted by date (most recent first).
    public function findAll() {
        $sql = "select * from Article order by art_id desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }

	//Return one article with id
	public function find($id) {
        $sql = "select * from Article where art_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }

    // Creates an Article object based on a DB row.
    protected function buildDomainObject($row) {
        $article = new Article();
        $article->setId($row['art_id']);
        $article->setTitle($row['art_title']);
        $article->setContent($row['art_content']);
		$article->setImage($row['art_image']);
		$article->setDateArt($row['art_date']);
		$article->setTheme($row['art_theme']);
        return $article;
    }

    // Saves an article into the database.
    public function save(Article $article) {

        $articleData = array(
            'art_title' => $article->getTitle(),
            'art_content' => $article->getContent(),
			'art_image' => $article->getImage(),
			'art_date' => $article->getDateArt()->format('Y-m-d H:i:s'),
			'art_theme' => $article->getTheme()
            );

        if ($article->getId()) {
            // The article has already been saved : update it
            $this->getDb()->update('Article', $articleData, array('art_id' => $article->getId()));
        } else {
            // The article has never been saved : insert it
            $this->getDb()->insert('Article', $articleData);
            // Get the id of the newly created article and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $article->setId($id);
        }
    }

    // Removes an article from the database.
    public function delete($id) {
        // Delete the article
        $this->getDb()->delete('Article', array('art_id' => $id));
    }

}
