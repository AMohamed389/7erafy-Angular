<?php
/**
 * Class that operate on table 'cst_hit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstHitMySqlDAO implements CstHitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstHitMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_hit WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_hit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_hit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstHit primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_hit WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstHitMySql cstHit
 	 */
	public function insert($cstHit){
		$sql = 'INSERT INTO cst_hit (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, BTN_CNT, LOGIN_CNT, VIEW_CNT, UPLD_CNT, SRCH_CNT, TECH_CNT, TOTAL_CNT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstHit->cREATED);
		$sqlQuery->set($cstHit->cREATEDBY);
		$sqlQuery->set($cstHit->lASTUPD);
		$sqlQuery->set($cstHit->lASTUPDBY);
		$sqlQuery->setNumber($cstHit->cSTID);
		$sqlQuery->setNumber($cstHit->bTNCNT);
		$sqlQuery->setNumber($cstHit->lOGINCNT);
		$sqlQuery->setNumber($cstHit->vIEWCNT);
		$sqlQuery->setNumber($cstHit->uPLDCNT);
		$sqlQuery->setNumber($cstHit->sRCHCNT);
		$sqlQuery->setNumber($cstHit->tECHCNT);
		$sqlQuery->setNumber($cstHit->tOTALCNT);

		$id = $this->executeInsert($sqlQuery);	
		$cstHit->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstHitMySql cstHit
 	 */
	public function update($cstHit){
		$sql = 'UPDATE cst_hit SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, BTN_CNT = ?, LOGIN_CNT = ?, VIEW_CNT = ?, UPLD_CNT = ?, SRCH_CNT = ?, TECH_CNT = ?, TOTAL_CNT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstHit->cREATED);
		$sqlQuery->set($cstHit->cREATEDBY);
		$sqlQuery->set($cstHit->lASTUPD);
		$sqlQuery->set($cstHit->lASTUPDBY);
		$sqlQuery->setNumber($cstHit->cSTID);
		$sqlQuery->setNumber($cstHit->bTNCNT);
		$sqlQuery->setNumber($cstHit->lOGINCNT);
		$sqlQuery->setNumber($cstHit->vIEWCNT);
		$sqlQuery->setNumber($cstHit->uPLDCNT);
		$sqlQuery->setNumber($cstHit->sRCHCNT);
		$sqlQuery->setNumber($cstHit->tECHCNT);
		$sqlQuery->setNumber($cstHit->tOTALCNT);

		$sqlQuery->setNumber($cstHit->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_hit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_hit WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_hit WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_hit WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_hit WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_hit WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBTNCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE BTN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLOGINCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE LOGIN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE VIEW_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUPLDCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE UPLD_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySRCHCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE SRCH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE TECH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTOTALCNT($value){
		$sql = 'SELECT * FROM cst_hit WHERE TOTAL_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_hit WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_hit WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_hit WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_hit WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_hit WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBTNCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE BTN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLOGINCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE LOGIN_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE VIEW_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUPLDCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE UPLD_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySRCHCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE SRCH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE TECH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTOTALCNT($value){
		$sql = 'DELETE FROM cst_hit WHERE TOTAL_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstHitMySql 
	 */
	protected function readRow($row){
		$cstHit = new CstHit();
		
		$cstHit->iD = $row['ID'];
		$cstHit->cREATED = $row['CREATED'];
		$cstHit->cREATEDBY = $row['CREATED_BY'];
		$cstHit->lASTUPD = $row['LAST_UPD'];
		$cstHit->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstHit->cSTID = $row['CST_ID'];
		$cstHit->bTNCNT = $row['BTN_CNT'];
		$cstHit->lOGINCNT = $row['LOGIN_CNT'];
		$cstHit->vIEWCNT = $row['VIEW_CNT'];
		$cstHit->uPLDCNT = $row['UPLD_CNT'];
		$cstHit->sRCHCNT = $row['SRCH_CNT'];
		$cstHit->tECHCNT = $row['TECH_CNT'];
		$cstHit->tOTALCNT = $row['TOTAL_CNT'];

		return $cstHit;
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
	 * @return CstHitMySql 
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