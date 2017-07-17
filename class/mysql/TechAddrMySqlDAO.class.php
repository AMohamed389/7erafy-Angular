<?php
/**
 * Class that operate on table 'tech_addr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechAddrMySqlDAO implements TechAddrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechAddrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_addr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_addr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_addr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techAddr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_addr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechAddrMySql techAddr
 	 */
	public function insert($techAddr){
		$sql = 'INSERT INTO tech_addr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, ADDR_COMMENT, APARTMENT, FLOOR, BUILDING, STREET, CITY_ID, ZONE_ID, COUNTRY_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techAddr->cREATED);
		$sqlQuery->set($techAddr->cREATEDBY);
		$sqlQuery->set($techAddr->lASTUPD);
		$sqlQuery->set($techAddr->lASTUPDBY);
		$sqlQuery->setNumber($techAddr->tECHID);
		$sqlQuery->set($techAddr->aDDRCOMMENT);
		$sqlQuery->set($techAddr->aPARTMENT);
		$sqlQuery->set($techAddr->fLOOR);
		$sqlQuery->set($techAddr->bUILDING);
		$sqlQuery->set($techAddr->sTREET);
		$sqlQuery->setNumber($techAddr->cITYID);
		$sqlQuery->setNumber($techAddr->zONEID);
		$sqlQuery->setNumber($techAddr->cOUNTRYID);

		$id = $this->executeInsert($sqlQuery);	
		$techAddr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechAddrMySql techAddr
 	 */
	public function update($techAddr){
		$sql = 'UPDATE tech_addr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, ADDR_COMMENT = ?, APARTMENT = ?, FLOOR = ?, BUILDING = ?, STREET = ?, CITY_ID = ?, ZONE_ID = ?, COUNTRY_ID = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techAddr->cREATED);
		$sqlQuery->set($techAddr->cREATEDBY);
		$sqlQuery->set($techAddr->lASTUPD);
		$sqlQuery->set($techAddr->lASTUPDBY);
		$sqlQuery->setNumber($techAddr->tECHID);
		$sqlQuery->set($techAddr->aDDRCOMMENT);
		$sqlQuery->set($techAddr->aPARTMENT);
		$sqlQuery->set($techAddr->fLOOR);
		$sqlQuery->set($techAddr->bUILDING);
		$sqlQuery->set($techAddr->sTREET);
		$sqlQuery->setNumber($techAddr->cITYID);
		$sqlQuery->setNumber($techAddr->zONEID);
		$sqlQuery->setNumber($techAddr->cOUNTRYID);

		$sqlQuery->setNumber($techAddr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_addr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_addr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_addr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_addr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_addr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_addr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByADDRCOMMENT($value){
		$sql = 'SELECT * FROM tech_addr WHERE ADDR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAPARTMENT($value){
		$sql = 'SELECT * FROM tech_addr WHERE APARTMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFLOOR($value){
		$sql = 'SELECT * FROM tech_addr WHERE FLOOR = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBUILDING($value){
		$sql = 'SELECT * FROM tech_addr WHERE BUILDING = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTREET($value){
		$sql = 'SELECT * FROM tech_addr WHERE STREET = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCITYID($value){
		$sql = 'SELECT * FROM tech_addr WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByZONEID($value){
		$sql = 'SELECT * FROM tech_addr WHERE ZONE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCOUNTRYID($value){
		$sql = 'SELECT * FROM tech_addr WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_addr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_addr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_addr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_addr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_addr WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByADDRCOMMENT($value){
		$sql = 'DELETE FROM tech_addr WHERE ADDR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAPARTMENT($value){
		$sql = 'DELETE FROM tech_addr WHERE APARTMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFLOOR($value){
		$sql = 'DELETE FROM tech_addr WHERE FLOOR = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBUILDING($value){
		$sql = 'DELETE FROM tech_addr WHERE BUILDING = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTREET($value){
		$sql = 'DELETE FROM tech_addr WHERE STREET = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCITYID($value){
		$sql = 'DELETE FROM tech_addr WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByZONEID($value){
		$sql = 'DELETE FROM tech_addr WHERE ZONE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCOUNTRYID($value){
		$sql = 'DELETE FROM tech_addr WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechAddrMySql 
	 */
	protected function readRow($row){
		$techAddr = new TechAddr();
		
		$techAddr->iD = $row['ID'];
		$techAddr->cREATED = $row['CREATED'];
		$techAddr->cREATEDBY = $row['CREATED_BY'];
		$techAddr->lASTUPD = $row['LAST_UPD'];
		$techAddr->lASTUPDBY = $row['LAST_UPD_BY'];
		$techAddr->tECHID = $row['TECH_ID'];
		$techAddr->aDDRCOMMENT = $row['ADDR_COMMENT'];
		$techAddr->aPARTMENT = $row['APARTMENT'];
		$techAddr->fLOOR = $row['FLOOR'];
		$techAddr->bUILDING = $row['BUILDING'];
		$techAddr->sTREET = $row['STREET'];
		$techAddr->cITYID = $row['CITY_ID'];
		$techAddr->zONEID = $row['ZONE_ID'];
		$techAddr->cOUNTRYID = $row['COUNTRY_ID'];

		return $techAddr;
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
	 * @return TechAddrMySql 
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