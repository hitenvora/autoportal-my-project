<?php 
class Model 
{
    public $connection="";
    public function __construct()
    {
        // database connections
        // exception handeling
        session_start();
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

   // fetch all data create a member functions
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


   

      // fetch and join data create

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
      
      // fetch and join data create a member functions

   public function logintabledata($table,$table1,$where,$column,$id)
   {
    $select="select * from $table join $table1 on $where where $column='$id'"; 
        $exe=mysqli_query($this->connection,$select); 
       while($fetch=mysqli_fetch_array($exe))
       {
           $arr[]=$fetch;
       }
       return $arr;
   }


    // create a member function for forgetpassword
    public function frgpassword($table,$column,$em)
    {
          $select="select password from $table where $column='$em'";
          $exe=mysqli_query($this->connection,$select);
          $fetch=mysqli_fetch_array($exe);
          $no_rows=mysqli_num_rows($exe);
          if($no_rows==1)
          {
            $pass=($fetch["password"]);
            return $pass; 
          }
          else 
          {
            return false;
          }

    }



   // fetch and join data create a member functions
   public function manageprofiledata($table,$table1,$table2,$table3,$where,$where1,$where2,$column,$id)
   {
       $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2  where $column='$id'";
      $exe=mysqli_query($this->connection,$select); 
       while($fetch=mysqli_fetch_array($exe))
       {
           $arr[]=$fetch;       
       }
       return $arr;
   }


  // fetch and join data create a member functions
  public function showsellcardata($table,$table1,$table2,$table3,$where,$where1,$where2)
  {
      $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2";
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



   

    // update a data for users create a member function
    public function updatedata($table,$name,$em,$mob,$column,$id)
    {

        $id=$_SESSION["login_id"];
        $update="update $table set name='$name',email='$em',mobile='$mob'where $column='$id'";
        $exe=mysqli_query($this->connection,$update);
        return $exe;
    }



       // update a sellng car for user
       public function sellcarusereditdata($table,$car,$model,$city,$year,$fual,$transmission,$kmdriven,$owner,$desc,$price,$images,$mobile,$column,$id)
       {
        $id=$_SESSION["login_id"];
        $upd="update $table set car_id='$car',model_id='$model',year='$year',fual='$fual',	Transmission='$transmission',km_driven='$kmdriven',owner_no='$owner',descrption='$desc',price='$price',images='$images',mobile_no='$mobile' where $column='$id'";
        $exe=mysqli_query($this->connection,$upd);
        return $exe;
         
       }
   
   

 // change password create a member function
 public function changepassworddata($table,$opass,$npass,$cpass,$column,$id)
 {
     $id=$_SESSION["login_id"];
     $select="select password from $table where $column='$id'";
     $exe=mysqli_query($this->connection,$select);
     $fetch=mysqli_fetch_array($exe);
     $pass=$fetch["password"];
     if($pass==$opass && $npass==$cpass)
     {
         $upd="update $table set password='$npass',confirm_password='$npass'  where $column='$id'";
         $exe=mysqli_query($this->connection,$upd);
         return $exe;

     }

     else 
     {
        return false;
     }


 }


// custmoer email id login
    public function userlogin($table,$em,$pass)
    {
        $sel="select * from $table where email='$em' and password='$pass'";
        $exe=mysqli_query($this->connection,$sel);
        $fetch=mysqli_fetch_array($exe);
        $no_rows=mysqli_num_rows($exe);
        if($no_rows==1)
        {
          $_SESSION["login_id"]=$fetch["login_id"];
          $_SESSION["email"]=$fetch["email"];
          $_SESSION["name"]=$fetch["name"];

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
      unset($_SESSION["login_id"]);
      unset($_SESSION["email"]);
      unset($_SESSION["fnm"]);
      session_destroy();
      return true;
  }
   
}





?>