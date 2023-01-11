<?php
class model
{
    public $connection;

    public function __construct()
    {
        try
        {
            $this->connection = new mysqli("localhost", "root", "", "ajax_country_city");
              //echo "connections successfully";
        }
        catch(Exception $e)
        {
            echo "connection is not stablished";
        }
    }
    // create a member function for insertall data
    public function insertalldata($table,$data)
    {
       $column=array_keys($data);
       $column1=implode(",",$column);
       
       $values=array_values($data);
       $values1=implode("','",$values);

        $insert = "insert into $table($column1) values('$values1')";
       $query=mysqli_query($this->connection,$insert);
       return $query;
    }
  // fetch all data create a member function
  public function selectalldata($table)
  {
      $select="select * from $table";
      $exe=mysqli_query($this->connection,$select);
      while($fetch=mysqli_fetch_array($exe))
      {
          $arr[]=$fetch;
      }
      return $arr;
  }  
}



?>