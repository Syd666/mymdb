<?

abstract class          Database
{
    abstract public function getAllByColumn($table, $whereColumn, $columnValue);
    abstract public function getAllJointByColumn($table1, $table2, $whereColumn, $columnValue, $onColumn1, $onColumn2);
    abstract public function setAllByColumn($table, $whereColumn, $columnValue, $columns);
    abstract public function deleteByColumn($table, $whereColumn, $columnValue);
}

?>