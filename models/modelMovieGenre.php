<?php

class                   modelMovieGenre
{
    const MOVIEGENRE = 'tj_moviegenre';
    const ID_MOVIE = 'id_movie';
    const ID_GENRE = 'id_genre';

    public function     getByMovie($id)
    {
        $result = $_db->select(MOVIEGENRE, ID_MOVIE, $id);
        return $result;
    }

    public function     add($values)
    {
        $_db->insert(MOVIEGENRE, $values);
    }

    public function     delete($id)
    {
        $_db->delete(MOVIEGENRE, ID_MOVIE, $id);
    }
}

?>