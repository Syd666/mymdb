<?php

class                   modelGenre
{
    const GENRE = 'ts_genre';
    const ID = 'id';
    const NAME = 'name';

    public function     getGenres()
    {
        $result = $_db->getColumns(GENRE, '*');
        return $result;
    }

    public function     addGenre()
    {

    }

    public function     deleteGenre($id)
    {
        $_db->deleteByColumn(GENRE, ID, $id);
    }
}

?>