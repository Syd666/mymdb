<?

require_once 'ModelDatabase.php';

abstract class          Mysql
{
    private $_link;
    private $_query;

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
        if ($this->_whereColumn && $this->_whereValue)
            $this->_query += ' WHERE '.$this->_whereColumn.' = '.$this->_columnValue;
        if ($this->_orderBy)
            $this->_query += ' ORDER BY '.$this->_orderBy;
        $this->_query += ';';
        $this->_link->prepare($this->_query);
        $result = $this->_link->execute();
    }

    public function     select($table1,
                               $columns = null,
                               $whereColumn = null,
                               $whereValue = null,
                               $orderBy = null,
                               $table2 = null,
                               $onColumn1 = null,
                               $onColumn2 = null)
    {
        $this->_query =  'SELECT * FROM '.$table;
        if ($table2 && $onColumn1 && $onColumn2)
            $this->_query += ' INNER JOIN '.$table2.' ON '.$onColumn1.' = '.$onColumn2;
        $this->_whereColumn = $whereColumn;
        $this->_whereValue = $whereValue;
        $this->_orderBy = $orderBy;
        $results = $this->_execute();
        return $results;
    }

    public function     insert($table, $values)
    {
        $this->_query = 'INSERT INTO '.$table.' VALUES ('.$values.')';
        $this->_execute;
    }

    public function    delete($table, $whereColumn, $whereValue)
    {
        $this->_query =  'DELETE FROM '.$table;
        $this->_whereColumn = $whereColumn;
        $this->_whereValue = $whereValue;
        $this->_execute;
    }
}

?>