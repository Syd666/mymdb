<?php

class                   modelMovieGenre
{
    const MOVIEGENRE = 'tj_moviegenre';
    const ID_MOVIE = 'id_movie';
    const ID_GENRE = 'id_genre';

    public function     getGenresForMovie($id)
    {
        $result = $_db->getAllByColumn(MOVIEGENRE, ID_MOVIE, $id);
        return $result;
    }

    public function     addMovieGenre($table, $values)
    {

    }

    public function     deleteMovieGenre($id)
    {
        $_db->deleteByColumn(MOVIEGENRE, ID_MOVIE, $id);
    }
}

?>