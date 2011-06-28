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

    public function     getMovies()
    {
        $result = $_db->getColumns(MOVIE, array(ID, TITLE, ORIGINAL_TITLE, PRODUCTION_YEAR));
        return $result;
    }

    public function     getMovie($id)
    {
        $result = $_db->getAllByColumn(MOVIE, ID, $id);
        return $result;
    }

    public function     addMovie()
    {

    }

    public function     deleteMovie($id)
    {
        $_db->deleteByColumn(MOVIE, ID, $id);
    }
}

?>