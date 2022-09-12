<?php
#function included every pages
class mysql
{
	// Define Variables
	var $errno;
	var $error;
	var $error_msg;
	var $link;
	var $sql;
	var $query;
	/*==========================*\
	|| Error Handling Functions ||
	\*==========================*/
	// Get Errors
	function getError()
	{
		if (empty($this->error)) {
			$this->errno = mysqli_errno();
			$this->error = mysqli_error();
		}
		return $this->error . ' (code:' . $this->errno . ')';
	}
	// Print Error Message
	function printError($msg1, $msg2)
	{
		printf("<b>ERROR! </b> %s<br/><i>%s</i>", $msg1, $msg2);
		exit;
	}

	// PHP Equivalent: mysqli_connect
	function connect($host, $user, $pass, $db) {
		$this->link = @mysqli_connect($host, $user, $pass, $db);
		if(!$this->link) {
			$this->errno = 0;
			$this->error = "Connection failed to " . $host . ".";
			$this->error_msg = $this->errno . ": " . $this->error;
			return $this->printError($this->error_msg,0);
		} else {
			return $this->link;
		}
	}

	function close() {
		mysqli_close($this->link);
	}

	function ping() {
		mysqli_ping($this->link);
	}

	function query($sql) {
		$query = @mysqli_query($sql);
		if (!$query) {
			$this->error_msg = $this->printError($this->getError(), $sql);
			return $this->error_msg;
		} else {
			return $query;
		}
	}
	
	function affected_rows() {
		return mysqli_affected_rows($this->link);
	}

	function escape_string($string) {
		return mysqli_escape_string($string);
	}

	function fetch_array($query) {
		return mysqli_fetch_array($query);
	}

	function fetch_field($query, $offset) {
		$query = mysqli_fetch_field($query, $offset);
		if (!$query) {
			$this->errno = 0;
			$this->error = "No information available!";
			$this->error_msg = $this->errno . ": " . $this->error;
			return $this->printError($this->error_msg, 0);
		} else {
			return $query;
		}
	}

	function fetch_row($query) {
		return mysqli_fetch_row($query);
	}

	function fetch_assoc($query) {
		return mysqli_fetch_assoc($query);
	}

	function field_name($query, $offset) {
		return mysqli_field_name($query, $offset);
	}

	function free_result($query) {
		mysqli_free_result($query);
	}

	function list_fields($db_name, $table_name) {
		mysqli_list_fields($db_name, $table_name);
	}

	function insert_id() {
		return mysqli_insert_id();
	}

	function num_fields($query) {
		return mysqli_num_fields($query);
	}

	function num_rows($query) {
		return mysqli_num_rows($query);
	}

	function real_escape_string($string) {
		return mysqli_real_escape_string($string, $this->link);
	}

	function result($query, $x, $field) {
		return @mysqli_result($query, $x, $field);
	}

	function result_array($query, $x, $string_field) {
		$string_array = explode(",", $string_field);
		foreach ($string_array as $string_id => $string_value) {
			$result[$string_value] = $this->result($query, $x, $string_value);
		}
		return $result;
	}

	function insert($data = array(), $table) {
		$key = "";
		$value = "";
		foreach ($data as $k => $v) {
			$key .= "," . $k;
			$value .= ",'" . str_replace("'", "\'", trim($v))  . "'";
		}
		if ($key{
			0} == ",") $key{
			0} = "(";
		$key .= ")";
		if ($value{
			0} == ",") $value{
			0} = "(";
		$value .= ")";
		$sql = "insert into " . $table . $key . " values " . $value;
		$query = $this->query($sql);
		return $query;
	}
	// insertData
	function insertData($data = array(), $table) {
		$key = "";
		$value = "";
		$created_at = $updated_at = date("Y-m-d H:i:s");
		foreach ($data as $k => $v) {
			$key .= "," . $k;
			$value .= ",'" . str_replace("'", "\'", trim($v))  . "'";
		}
		$key .= ",created_at";
		$value .= ",'" . $created_at . "'";
		$key .= ",updated_at";
		$value .= ",'" . $updated_at . "'";
		if ($key{
			0} == ",") $key{
			0} = "(";
		$key .= ")";
		if ($value{
			0} == ",") $value{
			0} = "(";
		$value .= ")";
		$sql = "insert into " . $table . $key . " values " . $value;
		$query = $this->query($sql);
		return $query;
	}
	function insertDataBy($data = array(), $table, $user_id) {
		$key = "";
		$value = "";
		$created_at = $updated_at = date("Y-m-d H:i:s");
		foreach ($data as $k => $v) {
			$key .= "," . $k;
			$value .= ",'" . str_replace("'", "\'", trim($v))  . "'";
		}
		$key .= ",created_by";
		$value .= ",'" . $user_id . "'";
		$key .= ",updated_by";
		$value .= ",'" . $user_id . "'";
		$key .= ",created_at";
		$value .= ",'" . $created_at . "'";
		$key .= ",updated_at";
		$value .= ",'" . $updated_at . "'";
		if ($key{
			0} == ",") $key{
			0} = "(";
		$key .= ")";
		if ($value{
			0} == ",") $value{
			0} = "(";
		$value .= ")";
		$sql = "insert into " . $table . $key . " values " . $value;
		$query = $this->query($sql);
		return $query;
	}
	// update
	function update($data = array(), $table, $where = "") {
		$values = "";
		foreach ($data as $k => $v) {
			$values .= ", " . $k . " = '" . str_replace("'", "\'", trim($v))  . "' ";
		}
		if ($values{
			0} == ",") $values{
			0} = " ";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}

	function updateData($data = array(), $table, $where = "") {
		$values = "";
		foreach ($data as $k => $v) {
			$values .= ", " . $k . " = '" . str_replace("'", "\'", trim($v))  . "' ";
		}
		$values .= ", updated_at = '" . date("Y-m-d H:i:s") . "' ";
		if ($values{
			0} == ",") $values{
			0} = " ";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}
	function updateDataBy($data = array(), $table, $where = "", $user_id) {
		$values = "";
		foreach ($data as $k => $v) {
			$values .= ", " . $k . " = '" . str_replace("'", "\'", trim($v))  . "' ";
		}
		$values .= ", updated_by = '" . $user_id . "' ";
		$values .= ", updated_at = '" . date("Y-m-d H:i:s") . "' ";
		if ($values{
			0} == ",") $values{
			0} = " ";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}
  function updateDataByNotUpdateDate($data = array(), $table, $where = "", $user_id) {
		$values = "";
		foreach ($data as $k => $v) {
			$values .= ", " . $k . " = '" . str_replace("'", "\'", trim($v))  . "' ";
		}
		$values .= ", updated_by = '" . $user_id . "' ";
		if ($values{
			0} == ",") $values{
			0} = " ";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}
	// hard Delete
	function delete($table, $where) {
		$sql = "delete from " . $table . $where;
		$query = $this->query($sql);
		return $query;
	}
	// softDelete
	function softDelete($table, $where) {
		$deleted_at = date("Y-m-d H:i:s");
		$values = " deleted_at = '" . $deleted_at . "'";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}
	function softDeleteBy($table, $where, $user_id) {
		$deleted_at = date("Y-m-d H:i:s");
		$values = " deleted_by = '" . $user_id . "' ";
		$values .= ", deleted_at = '" . $deleted_at . "' ";
		$sql = "update " . $table . " set " . $values . $where;
		$query = $this->query($sql);
		return $query;
	}
	

	function encodePQH($p) {
		$mk = "#*@" . $p . "#@*";
		$pass = md5($mk);
		$p1 = substr($pass, 2, 17);
		$pass1 = md5($p1);
		$p2 = substr($pass1, 4, 13);
		$pass2 = md5($p2);
		$p3 = substr($pass2, 8, 19) . "!@#$";
		$pass3 = md5($p3);
		$p4 = substr($pass3, 5, 16);
		$pass4 = md5($p4);
		$password = $pass4 . ":" . substr($pass3, 3, 20) . "#$*@!";
		return $password;
	}
    function randomNumberUse($num_char) {
    	$random = '';
    	$c = '0,1,2,3,4,5,6,7,8,9';
    	$char = explode(",",$c);
    	
    	$char_no = 0;
    	for($x=1; $x <= $num_char; $x++) {
    		$random_index = rand(0,9);
    		$random .= $char[$random_index];
    	}
    	return $random;
    }
    
	function loginUser($user, $p, $remember, $table = 'taxi_admins', $column_user = 'username', $column_password = 'password') {
	    
		$password = encodePQH($p);
		$su = $this->query("select * from $table where $column_user = '$user' and active = 1 and deleted_at is null");
		$nu = $this->num_rows($su);
		if ($nu) {
			$ru = $this->fetch_array($su);
      $id = $ru['id'];
			$pass = $ru['password'];
      if ($password == $pass) { // 
        $_SESSION['is_logined'] = $ru;
        if ($remember == 1) {
					$array_cookie = $ru;
					$cookie_value = "";
					foreach ($array_cookie as $kc => $vc) {
						$cookie_value .= $kc . 'cookie' . $vc . 'kiecook';
					}
					if ($cookie_value != "") {
						$cookie_value = substr($cookie_value, 0, -7);
						setcookie('islogined', $cookie_value, time() + (20 * 365 * 24 * 60 * 60), "/@admintaxi");
					}
				}
    		echo '1';
    	} elseif ($password != $pass) 
        echo '3';
    } else echo '2';
	}

	// getAll
	function getAll($table, $where = "deleted_at is null", $orderby = "id desc", $limit = "", $group_having = "")
	{
		$data = array();
		$s = $this->query("select * from $table where $where $group_having order by $orderby $limit");
		while ($r = $this->fetch_array($s)) {
			array_push($data, $r);
		}
		return $data;
	}
	function getAllSelect($select = "*", $table, $where = "deleted_at is null", $orderby = "id desc", $limit = "", $group_having = "")
	{
		$data = array();
		$s = $this->query("select $select from $table where $where $group_having order by $orderby $limit");
		while ($r = $this->fetch_array($s)) {
			array_push($data, $r);
		}
		return $data;
	}
    function getById($id, $table, $where = "")
	{
		$s = $this->query("select * from $table where id = $id $where");
		$r = $this->fetch_array($s);
		return $r;
	}
	function getOne($table, $where = "1")
	{
		$s = $this->query("select * from $table where $where");
		$r = $this->fetch_array($s);
		return $r;
	}
	function getOneSelect($select = "*", $table, $where = "1")
	{
		$s = $this->query("select $select from $table where $where");
		$r = $this->fetch_array($s);
		return $r;
	}
	function getFirst($table, $where = "deleted_at is null")
	{
		$s = $this->query("select * from $table where $where order by id asc");
		$n = $this->num_rows($s);
		if ($n)
			$r = $this->fetch_array($s);
		else
			$r = array();
		return $r;
	}
	function getLast($table, $where = "deleted_at is null")
	{
		$s = $this->query("select * from $table where $where order by id desc");
		$n = $this->num_rows($s);
		if ($n)
			$r = $this->fetch_array($s);
		else
			$r = array();
		return $r;
	}
    
	// profile
	function getProfiles()
	{
		$data = array();
		$s = $this->query("select * from profiles where id != 1 and deleted_at is null order by id");
		while ($r = $this->fetch_array($s)) {
			array_push($data, $r);
		}
		return $data;
	}
	// check exist
	function checkExist($table, $where)
	{
		$s = $this->query("select id from $table where $where");
		$n = $this->num_rows($s);
		return $n;
	}
	// get data profile has exist not id
	function checkExistId($table, $where, $id)
	{
		$s = $this->query("select id from $table where $where and id != $id");
		$n = $this->num_rows($s);
		return $n;
	}
	// check cmnd update
	function checkCMNDUpdate($table, $cmnd, $id)
	{
		$in_id = $id;
		$checkCp = $this->checkExist($table, "copy_id = $id and deleted_at is null");
		if ($checkCp) {
			$allid = $this->getAll($table, "copy_id = $id and deleted_at is null");
			foreach ($allid as $aid) {
				$in_id .= ',' . $aid['id'];
			}
		}
		$checkCopy = $this->checkExist($table, "copy_id is not null and id = $id and deleted_at is null");
		if ($checkCopy) {
			$copy = $this->getOne($table, "copy_id is not null and id = $id and deleted_at is null");
			$copy_id = $copy['copy_id'];
			$in_id .= ',' . $copy_id;
		}
		$s = $this->query("select id from $table where id NOT IN ($in_id) and cmnd = '$cmnd' and deleted_at is null");
		$n = $this->num_rows($s);
		if ($n)
			$data = 1;
		else
			$data = 0;
		return $data;
	}

	// getTotal
	function getTotal($table, $where)
	{
		$s = $this->query("select id from $table where $where");
		$n = $this->num_rows($s);
		return $n;
	}
    // function deQuyXuoi
    function getCapDuoi($id, $table = "profiles") {
        $capDuoi = array();
        $check = $this->checkExist($table, "deleted_at is null and profile_id = $id");
        if ($check) {
            $s = $this->query("select id, profile_id, role from $table where profile_id = $id and deleted_at is null");
            while ($r = $this->fetch_array($s)) {
                $prId = $r['id'];
                $role = $r['role'];
                array_push($capDuoi, $prId);
                if ($role == 2 || $role == 3) {
                    $checkExist = $this->checkExist($table, "deleted_at is null and profile_id = $prId");
                    if ($checkExist) {
                        $ss = $this->query("select id, profile_id, role from $table where profile_id = $prId and deleted_at is null");
                        while ($rs = $this->fetch_array($ss)) {
                            $prId2 = $rs['id'];
                            $role2 = $rs['role'];
                            array_push($capDuoi, $prId2);
                            if ($role2 == 2 || $role2 == 3) {
                                $checkExist2 = $this->checkExist($table, "deleted_at is null and profile_id = $prId2");
                                if ($checkExist2) {
                                    $sss = $this->query("select id, profile_id, role from $table where profile_id = $prId2 and deleted_at is null");
                                    while ($rss = $this->fetch_array($sss)) {
                                        $prId3 = $rss['id'];
                                        $role3 = $rss['role'];
                                        array_push($capDuoi, $prId3);
                                        if ($role3 == 3) {
                                            $checkExist3 = $this->checkExist($table, "deleted_at is null and profile_id = $prId3");
                                            if ($checkExist3) {
                                                $sss = $this->query("select id, profile_id, role from $table where profile_id = $prId3 and deleted_at is null");
                                                while ($rss = $this->fetch_array($sss)) {
                                                    $prId4 = $rss['id'];
                                                    array_push($capDuoi, $prId4);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }    
                
            }    
        }
        return $capDuoi;
    }
}
