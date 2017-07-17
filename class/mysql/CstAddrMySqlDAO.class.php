<?php
/**
 * Class that operate on table 'cst_addr'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstAddrMySqlDAO implements CstAddrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstAddrMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_addr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_addr';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_addr ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstAddr primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_addr WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstAddrMySql cstAddr
 	 */
	public function insert($cstAddr){
		$sql = 'INSERT INTO cst_addr (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, ADDR_COMMENT, APARTMENT, FLOOR_NUMBER, BUILDING, STREET, CITY_ID, Zone_ID, COUNTRY_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstAddr->cREATED);
		$sqlQuery->set($cstAddr->cREATEDBY);
		$sqlQuery->set($cstAddr->lASTUPD);
		$sqlQuery->set($cstAddr->lASTUPDBY);
		$sqlQuery->setNumber($cstAddr->cSTID);
		$sqlQuery->set($cstAddr->aDDRCOMMENT);
		$sqlQuery->set($cstAddr->aPARTMENT);
		$sqlQuery->set($cstAddr->fLOORNUMBER);
		$sqlQuery->set($cstAddr->bUILDING);
		$sqlQuery->set($cstAddr->sTREET);
		$sqlQuery->setNumber($cstAddr->cITYID);
		$sqlQuery->setNumber($cstAddr->zoneID);
		$sqlQuery->setNumber($cstAddr->cOUNTRYID);

		$id = $this->executeInsert($sqlQuery);	
		$cstAddr->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstAddrMySql cstAddr
 	 */
	public function update($cstAddr){
		$sql = 'UPDATE cst_addr SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, ADDR_COMMENT = ?, APARTMENT = ?, FLOOR_NUMBER = ?, BUILDING = ?, STREET = ?, CITY_ID = ?, Zone_ID = ?, COUNTRY_ID = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstAddr->cREATED);
		$sqlQuery->set($cstAddr->cREATEDBY);
		$sqlQuery->set($cstAddr->lASTUPD);
		$sqlQuery->set($cstAddr->lASTUPDBY);
		$sqlQuery->setNumber($cstAddr->cSTID);
		$sqlQuery->set($cstAddr->aDDRCOMMENT);
		$sqlQuery->set($cstAddr->aPARTMENT);
		$sqlQuery->set($cstAddr->fLOORNUMBER);
		$sqlQuery->set($cstAddr->bUILDING);
		$sqlQuery->set($cstAddr->sTREET);
		$sqlQuery->setNumber($cstAddr->cITYID);
		$sqlQuery->setNumber($cstAddr->zoneID);
		$sqlQuery->setNumber($cstAddr->cOUNTRYID);

		$sqlQuery->setNumber($cstAddr->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_addr';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_addr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_addr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_addr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_addr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_addr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByADDRCOMMENT($value){
		$sql = 'SELECT * FROM cst_addr WHERE ADDR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAPARTMENT($value){
		$sql = 'SELECT * FROM cst_addr WHERE APARTMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFLOORNUMBER($value){
		$sql = 'SELECT * FROM cst_addr WHERE FLOOR_NUMBER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBUILDING($value){
		$sql = 'SELECT * FROM cst_addr WHERE BUILDING = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTREET($value){
		$sql = 'SELECT * FROM cst_addr WHERE STREET = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCITYID($value){
		$sql = 'SELECT * FROM cst_addr WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByZoneID($value){
		$sql = 'SELECT * FROM cst_addr WHERE Zone_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCOUNTRYID($value){
		$sql = 'SELECT * FROM cst_addr WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_addr WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_addr WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_addr WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_addr WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_addr WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByADDRCOMMENT($value){
		$sql = 'DELETE FROM cst_addr WHERE ADDR_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAPARTMENT($value){
		$sql = 'DELETE FROM cst_addr WHERE APARTMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFLOORNUMBER($value){
		$sql = 'DELETE FROM cst_addr WHERE FLOOR_NUMBER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBUILDING($value){
		$sql = 'DELETE FROM cst_addr WHERE BUILDING = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTREET($value){
		$sql = 'DELETE FROM cst_addr WHERE STREET = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCITYID($value){
		$sql = 'DELETE FROM cst_addr WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByZoneID($value){
		$sql = 'DELETE FROM cst_addr WHERE Zone_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCOUNTRYID($value){
		$sql = 'DELETE FROM cst_addr WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstAddrMySql 
	 */
	protected function readRow($row){
		$cstAddr = new CstAddr();
		
		$cstAddr->iD = $row['ID'];
		$cstAddr->cREATED = $row['CREATED'];
		$cstAddr->cREATEDBY = $row['CREATED_BY'];
		$cstAddr->lASTUPD = $row['LAST_UPD'];
		$cstAddr->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstAddr->cSTID = $row['CST_ID'];
		$cstAddr->aDDRCOMMENT = $row['ADDR_COMMENT'];
		$cstAddr->aPARTMENT = $row['APARTMENT'];
		$cstAddr->fLOORNUMBER = $row['FLOOR_NUMBER'];
		$cstAddr->bUILDING = $row['BUILDING'];
		$cstAddr->sTREET = $row['STREET'];
		$cstAddr->cITYID = $row['CITY_ID'];
		$cstAddr->zoneID = $row['Zone_ID'];
		$cstAddr->cOUNTRYID = $row['COUNTRY_ID'];

		return $cstAddr;
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
	 * @return CstAddrMySql 
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