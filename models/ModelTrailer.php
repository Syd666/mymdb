<?php

class                   modelTrailer
{
    const TRAILER = 't_trailer';
    const ID = 'id';
    const ID_MOVIE = 'id_movie';
    const URL = 'url';

    public function     getTrailers($id)
    {
        $result = $_db->getAllByColumn(TRAILER, ID, $id);
        return $result;
    }

    public function     addTrailer()
    {
        $_db->add(TRAILER, array());
    }

    public function     deleteTrailer($id)
    {
        $_db->deleteByColumn(TRAILER, MOVIE_ID, $id);
    }
}

?>