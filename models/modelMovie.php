<?php

class                   modelMovie
{
    const MOVIE = 't_movie';
    const ID = 'id';
    const ID_ALLOCINE = 'id_allocine';
    const ID_IMDB = 'id_imdb';
    const ID_SENSCRITIQUE = 'id_senscritique';
    const TITLE = 'title';
    const ORIGINAL_TITLE = 'original_title';
    const PRODUCTION_YEAR = 'production_year';
    const SYNOPSIS = 'synopsis';

    public function     getAll()
    {
        $result = $_db->select(MOVIE, array(ID, TITLE, ORIGINAL_TITLE, PRODUCTION_YEAR));
        return $result;
    }

    public function     getById($id)
    {
        $result = $_db->select(MOVIE, null, ID, $id);
        return $result;
    }

    public function     add($values)
    {
        $_db->insert(MOVIE, $values);
    }

    public function     delete($id)
    {
        $_db->delete(MOVIE, ID, $id);
    }
}

?>