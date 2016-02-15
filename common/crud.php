<?php

function read($table, $where, $order, $fetch){
	GLOBAL $db;

	if($where != null && $order != null){
		$query = "SELECT * FROM $table WHERE $where ORDER BY $order";
	}else if($order != null){
		$query = "SELECT * FROM $table ORDER BY $order";
	}else if($where != null){
		$query = "SELECT * FROM $table WHERE $where";
	}else{
		$query = "SELECT * FROM $table";
	}

	$request = $db->query($query);

	if($fetch == "assoc"){
		$result = $request->fetch_assoc();
	}else{
		$result = $request->fetch_all(MYSQLI_ASSOC);
	}
	
	return $result;
}

function update($table, $set, $where){
	GLOBAL $db;

	$query = "UPDATE $table SET $set WHERE $where";
	$result = $db->query($query);
}

function create($table, $columns, $values){
	GLOBAL $db;

	$query = "INSERT INTO $table ($columns) VALUES ($values)";
	$result = $db->query($query);
}

function delete($table, $where){
	GLOBAL $db;

	$query = "DELETE FROM $table WHERE $where";
	$result = $db->query($query);
}