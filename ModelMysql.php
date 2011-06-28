<?

require_once 'ModelDatabase.php';

abstract class          Mysql
{
    private $_link;

    public function     __construct($hostname, $database, $username, $password)
    {
        try
        {
            $this->_link = new PDO('mysql:dbname=' . $database . ':host=' . $hostname, $username, $password);
        }
        catch (PDOException $e)
        {
            // TO DO
        }

    }

    public function     __destruct()
    {
        unset($this->_link);
    }

    protected function  _execute()
    {
        $this->_link->prepare($this->_query);
        $result = $this->_link->execute();
    }

    public function     getAllByColumn($table, $whereColumn, $columnValue)
    {
        $this->_query = 'SELECT * FROM '.$table.' WHERE '.$whereColumn.' = '.$columnValue.';';
        $results = $this->_execute();
        return $results;
    }

    public function    getAllJointByColumn($table1, $table2, $whereColumn, $columnValue, $onColumn1, $onColumn2)
    {
        $this->_query = 'SELECT * FROM '.$table1.' INNER JOIN '.$table2.' ON '.$onValue1.' = '.$onValue2.' WHERE '.$whereColumn.' = '.$columnValue.';';
        $results = $this->_execute();
        return $results;
    }

    public function    setAllByColumn($table, $whereColumn, $columnValue, $columns)
    {
        $this->_query = 'UPDATE '.$table.' SET '.$columns.' WHERE '.$whereColumn.' = '.$columnValue';';
        $this->_execute;
    }

    public function     add($table, $values)
    {
        $this->_query = 'INSERT INTO '.$table.' VALUES ('.$values.');';
        $this->_execute;
    }

    public function    deleteByColumn($table, $whereColumn, $columnValue)
    {
        // TO DO
    }
}

?>