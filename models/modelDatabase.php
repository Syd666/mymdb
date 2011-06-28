<?

abstract class          Database
{
    abstract public function select($table1, $columns, $whereColumn, $whereValue, $orderBy, $table2, $onColumn1, $onColumn2);
    abstract public function insert($table, $values);
    abstract public function delete($table, $whereColumn, $columnValue);
}

?>