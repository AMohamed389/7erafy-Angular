<?php
/**
 * Class that operate on table 'zones'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class ZonesMySqlDAO implements ZonesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ZonesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM zones WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM zones';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM zones ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param zone primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM zones WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ZonesMySql zone
 	 */
	public function insert($zone){
		$sql = 'INSERT INTO zones (city_id, zone, arabic_zone) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($zone->cityId);
		$sqlQuery->set($zone->zone);
		$sqlQuery->set($zone->arabicZone);

		$id = $this->executeInsert($sqlQuery);	
		$zone->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ZonesMySql zone
 	 */
	public function update($zone){
		$sql = 'UPDATE zones SET city_id = ?, zone = ?, arabic_zone = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($zone->cityId);
		$sqlQuery->set($zone->zone);
		$sqlQuery->set($zone->arabicZone);

		$sqlQuery->setNumber($zone->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM zones';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCityId($value){
		$sql = 'SELECT * FROM zones WHERE city_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByZone($value){
		$sql = 'SELECT * FROM zones WHERE zone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByArabicZone($value){
		$sql = 'SELECT * FROM zones WHERE arabic_zone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCityId($value){
		$sql = 'DELETE FROM zones WHERE city_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByZone($value){
		$sql = 'DELETE FROM zones WHERE zone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByArabicZone($value){
		$sql = 'DELETE FROM zones WHERE arabic_zone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ZonesMySql 
	 */
	protected function readRow($row){
		$zone = new Zone();
		
		$zone->id = $row['id'];
		$zone->cityId = $row['city_id'];
		$zone->zone = $row['zone'];
		$zone->arabicZone = $row['arabic_zone'];

		return $zone;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ZonesMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>