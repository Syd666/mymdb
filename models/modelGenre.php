<?php

class                   modelGenre
{
    const GENRE = 'ts_genre';
    const ID = 'id';
    const NAME = 'name';

    public function     getAll()
    {
        $result = $_db->select(GENRE);
        return $result;
    }

    public function     add($values)
    {
        $_db->insert(GENRE, $values);
    }

    public function     delete($id)
    {
        $_db->delete(GENRE, ID, $id);
    }
}

?>