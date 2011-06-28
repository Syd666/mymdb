<?php

class                   modelTrailer
{
    const TRAILER = 't_trailer';
    const ID = 'id';
    const ID_MOVIE = 'id_movie';
    const URL = 'url';

    public function     getById($id)
    {
        $result = $_db->select(TRAILER, URL, ID, $id);
        return $result;
    }

    public function     add($values)
    {
        $_db->add(TRAILER, $values);
    }

    public function     delete($id)
    {
        $_db->delete(TRAILER, MOVIE_ID, $id);
    }
}

?>