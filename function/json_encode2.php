//对象 进行 JSON 编码

    <?php
    class user{
    	public $id;
    	public $username;
    	public $passwd;
    	public $group;
    	
    	function __construct($id,$username,$passwd,$group){
    		$this->id = $id;
    		$this->username = $username;
    		$this->passwd = $passwd;
    		$this->group = $group;
    	}
    }
     
    $newUser = new user(1,"test","123456","normal");
    echo json_encode($newUser);
    ?>

//以上例程会输出：

//    {"id":1,"username":"test","passwd":"123456","group":"normal"}
