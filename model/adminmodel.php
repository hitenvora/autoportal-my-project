<?php 
class AdminModel 
{
    public $connection="";
    public function __construct()
    {
        session_start();
        // database connections
        //exception handeling
        try 
        {
        $this->connection=new mysqli("localhost","root","","autoportal");
        // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
    //create a member function for insert data 
    public function insertalladata($data,$table)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }

    // manage all or fetch all data create a member function
    public function showalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }


    public function  manageprofiledata($table,$table1,$table2,$table3,$where,$where1,$where2)
    {
        $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    public function modeljon($table,$table1,$where)
    {
        $select="select * from $table join $table1 on $where";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }


    // delete a data for users create a member function
   public function deletedata($table,$id)
   {
       $column=array_keys($id);
       $column1=implode(",",$column);

       $value=array_values($id);
       $value1=implode("','",$value);

       $delete="delete from $table where $column1='$value1'";
       $exe=mysqli_query($this->connection,$delete);
       return $exe;
   }



    public function adminjoindata($table,$table1,$where)
    {
        $select="select * from $table join $table1 on $where";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }



  // create a member function for select category and display its products
  public function loginselect($table,$column,$id)
  {
      $select="select * from $table where $column='$id'";
      $exe=mysqli_query($this->connection,$select);
      while($fetch=mysqli_fetch_array($exe))
      {
          $arr[]=$fetch;
      }
      return $arr;
  }

    
      // fetch and join to create a member function 
      public function joindata($table,$table1,$where)
      {
          $select="select * from $table join $table1 on $where";
          $exe=mysqli_query($this->connection,$select);
          while($fetch=mysqli_fetch_array($exe))
          {
              $arr[]=$fetch;
          }
          return $arr;
      }


      

    // update a data for users create a member function
    public function carshowupdatedata($table,$carname,$model,$city,$year,$fual,$trasmission,$kmdriven,$ownerno,$description,$image,$amout,$mobile,$column,$id)
    {

        $update="update $table set car_id='$carname',model_id='$model',city_id='$city',year='$year',fual='$fual',Transmission='$trasmission',km_driven='$kmdriven',owner_no='$ownerno',descrption='$description',images='$image',price='$amout',mobile_no='$mobile'where $column='$id'";
        $exe=mysqli_query($this->connection,$update);
        return $exe;
    }
      

//update brand
    public function updatebrand($tabel,$nm,$column,$id)
    {
      $update="update $tabel set car_name='$nm' where $column='$id'";
      $exe=mysqli_query($this->connection,$update);
      return $exe;
    }

    //update city
    public function updatecity($tabel,$cu,$column,$id)
    {
      $update="update $tabel set city_name='$cu' where $column='$id'";
      $exe=mysqli_query($this->connection,$update);
      return $exe;
    }

 //update model
 public function updatemodel($tabel,$mu,$column,$id)
 {
   $update="update $tabel set model_name='$mu' where $column='$id'";
   $exe=mysqli_query($this->connection,$update);
   return $exe;
 }
     // manage to count data  create a member function
     public function countdata($table,$column)
     {
         $select="select count($column) as total  from $table";
         $exe=mysqli_query($this->connection,$select);
         while($fetch=mysqli_fetch_array($exe))
         {
             $arr[]=$fetch;
         }
         return $arr;
     }

    // create a member function for admin login
    public function adminlogin($table,$em,$pass)
    {
        $sel="select * from $table where email='$em' and password='$pass'";
        $exe=mysqli_query($this->connection,$sel);
        $fetch=mysqli_fetch_array($exe);
        $no_rows=mysqli_num_rows($exe);
        if($no_rows==1)
        {
          $_SESSION["id"]=$fetch["id"];
          $_SESSION["email"]=$fetch["email"];
          return true;
        }
        else 
        {
        return false;
        }
    } 

    // logout here to create a member function 
    public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
     
}

?>