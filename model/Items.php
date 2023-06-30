<?php
class Items{
    //DB stuff
    private $con;
    private $table='items';

    //registration properties 
    public $item_name;
    public $item_description;
    public $item_photo;
    public $item_id;

    public function __construct($db)
    {
        $this->con=$db;
    }

    public function create(){
        //create query
            $query='INSERT INTO '.$this->table.'
             SET
                item_name=:item_name,
                item_description=:item_description,
                item_photo=:item_photo
            ';
        //prepare statement 
        $stmt=$this->con->prepare($query);

        //clean data
        $this->item_name=htmlspecialchars(strip_tags($this->item_name));
        $this->item_description=htmlspecialchars(strip_tags($this->item_description));
        $this->item_photo=htmlspecialchars(strip_tags($this->item_photo));

        //bind data
        $stmt->bindParam(':item_name',$this->item_name);
        $stmt->bindParam(':item_photo',$this->item_photo);
        $stmt->bindParam(':item_description',$this->item_description);
        //execute query 
        if($stmt->execute()){
            return true;
        }
        else{
            echo'Error : '.$stmt->error;
        }

    }

    //get post

    public function read(){
        //create query
        $query='SELECT *
        FROM
        '. $this->table . ' 
        ';
       
        // prepare statement
        $stmt=$this->con->prepare($query);

        //execute queery
        $stmt->execute();

        return $stmt;
    }

    //get a single post
    
    public function read_single(){
        //create query
        $query='SELECT 
        *
        FROM
        '. $this->table . '
        WHERE
        item_name=?
        LIMIT 0,1';
        
         // prepare statement
         $stmt=$this->con->prepare($query);

         //bind ID
         $stmt->bindParam(1,$this->item_name);
        
          //execute queery
        $stmt->execute();

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        //set propreties
        $this->item_name=$row['item_name'];
        $this->item_description=$row['item_description'];  
        $this->item_photo=$row['item_photo'];
        $this->item_id=$row['item_id'];

    }
    //delete 
    public function delete(){
        //create query 
        $query='DELETE FROM '.$this->table.'
        WHERE 
        item_id=:item_id';

        //prepare statement
        $stmt=$this->con->prepare($query);
        //clean data
        $this->item_id=htmlspecialchars(strip_tags($this->item_id));
        //bind
        $stmt->bindParam(':item_id',$this->item_id);

        if($stmt->execute()){
            return true;
        }
        else{
            echo'Error : '.$stmt->error;
        }
    }
    //update
    public function update(){
        //create query
        $query='UPDATE '.$this->table.'
        SET
            item_name=:item_name,
            item_description=:item_description
        WHERE 
        item_id=:item_id
        ';
        //prepare statement 
        $stmt=$this->con->prepare($query);
        //clean data
        $this->item_id=htmlspecialchars(strip_tags($this->item_id));
        $this->item_name=htmlspecialchars(strip_tags($this->item_name));
        $this->item_description=htmlspecialchars(strip_tags($this->item_description));
        //bind data
        $stmt->bindParam(':item_id',$this->item_id);
        $stmt->bindParam(':item_name',$this->item_name);
        $stmt->bindParam(':item_description',$this->item_description);
        //execute query 
        if($stmt->execute()){
            return true;
        }
        else{
            echo'Error : '.$stmt->error;
        }
    }
}