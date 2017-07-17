<?php
/**
 * Class that operate on table 'tech_hit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
class TechHitMySqlDAO implements TechHitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechHitMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM tech_hit WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM tech_hit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM tech_hit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param techHit primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM tech_hit WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechHitMySql techHit
 	 */
	public function insert($techHit){
		$sql = 'INSERT INTO tech_hit (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, TECH_ID, BTN_CNT, LOGIN_CNT, VIEW_CNT, UPLD_CNT, SRCH_CNT, TOTAL_CNT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techHit->cREATED);
		$sqlQuery->set($techHit->cREATEDBY);
		$sqlQuery->set($techHit->lASTUPD);
		$sqlQuery->set($techHit->lASTUPDBY);
		$sqlQuery->setNumber($techHit->tECHID);
		$sqlQuery->setNumber($techHit->bTNCNT);
		$sqlQuery->setNumber($techHit->lOGINCNT);
		$sqlQuery->setNumber($techHit->vIEWCNT);
		$sqlQuery->setNumber($techHit->uPLDCNT);
		$sqlQuery->setNumber($techHit->sRCHCNT);
		$sqlQuery->setNumber($techHit->tOTALCNT);

		$id = $this->executeInsert($sqlQuery);	
		$techHit->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechHitMySql techHit
 	 */
	public function update($techHit){
		$sql = 'UPDATE tech_hit SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, TECH_ID = ?, BTN_CNT = ?, LOGIN_CNT = ?, VIEW_CNT = ?, UPLD_CNT = ?, SRCH_CNT = ?, TOTAL_CNT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($techHit->cREATED);
		$sqlQuery->set($techHit->cREATEDBY);
		$sqlQuery->set($techHit->lASTUPD);
		$sqlQuery->set($techHit->lASTUPDBY);
		$sqlQuery->setNumber($techHit->tECHID);
		$sqlQuery->setNumber($techHit->bTNCNT);
		$sqlQuery->setNumber($techHit->lOGINCNT);
		$sqlQuery->setNumber($techHit->vIEWCNT);
		$sqlQuery->setNumber($techHit->uPLDCNT);
		$sqlQuery->setNumber($techHit->sRCHCNT);
		$sqlQuery->setNumber($techHit->tOTALCNT);

		$sqlQuery->setNumber($techHit->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM tech_hit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM tech_hit WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM tech_hit WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM tech_hit WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM tech_hit WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM tech_hit WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBTNCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE BTN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOGINCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE LOGIN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE VIEW_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUPLDCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE UPLD_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE SRCH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTOTALCNT($value){
		$sql = 'SELECT * FROM tech_hit WHERE TOTAL_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM tech_hit WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM tech_hit WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM tech_hit WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM tech_hit WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM tech_hit WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBTNCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE BTN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOGINCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE LOGIN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE VIEW_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUPLDCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE UPLD_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE SRCH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTOTALCNT($value){
		$sql = 'DELETE FROM tech_hit WHERE TOTAL_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechHitMySql 
	 */
	protected function readRow($row){
		$techHit = new TechHit();
		
		$techHit->iD = $row['ID'];
		$techHit->cREATED = $row['CREATED'];
		$techHit->cREATEDBY = $row['CREATED_BY'];
		$techHit->lASTUPD = $row['LAST_UPD'];
		$techHit->lASTUPDBY = $row['LAST_UPD_BY'];
		$techHit->tECHID = $row['TECH_ID'];
		$techHit->bTNCNT = $row['BTN_CNT'];
		$techHit->lOGINCNT = $row['LOGIN_CNT'];
		$techHit->vIEWCNT = $row['VIEW_CNT'];
		$techHit->uPLDCNT = $row['UPLD_CNT'];
		$techHit->sRCHCNT = $row['SRCH_CNT'];
		$techHit->tOTALCNT = $row['TOTAL_CNT'];

		return $techHit;
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
	 * @return TechHitMySql 
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