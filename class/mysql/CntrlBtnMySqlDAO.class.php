<?php
/**
 * Class that operate on table 'cntrl_btn'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CntrlBtnMySqlDAO implements CntrlBtnDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CntrlBtnMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cntrl_btn WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cntrl_btn';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cntrl_btn ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cntrlBtn primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cntrl_btn WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlBtnMySql cntrlBtn
 	 */
	public function insert($cntrlBtn){
		$sql = 'INSERT INTO cntrl_btn (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CNTRL_NAME, PAR_VIEW_ID, CNTRL_BTN_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlBtn->cREATED);
		$sqlQuery->set($cntrlBtn->cREATEDBY);
		$sqlQuery->set($cntrlBtn->lASTUPD);
		$sqlQuery->set($cntrlBtn->lASTUPDBY);
		$sqlQuery->set($cntrlBtn->cNTRLNAME);
		$sqlQuery->setNumber($cntrlBtn->pARVIEWID);
		$sqlQuery->set($cntrlBtn->cNTRLBTNCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$cntrlBtn->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlBtnMySql cntrlBtn
 	 */
	public function update($cntrlBtn){
		$sql = 'UPDATE cntrl_btn SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CNTRL_NAME = ?, PAR_VIEW_ID = ?, CNTRL_BTN_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlBtn->cREATED);
		$sqlQuery->set($cntrlBtn->cREATEDBY);
		$sqlQuery->set($cntrlBtn->lASTUPD);
		$sqlQuery->set($cntrlBtn->lASTUPDBY);
		$sqlQuery->set($cntrlBtn->cNTRLNAME);
		$sqlQuery->setNumber($cntrlBtn->pARVIEWID);
		$sqlQuery->set($cntrlBtn->cNTRLBTNCOMMENT);

		$sqlQuery->setNumber($cntrlBtn->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cntrl_btn';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCNTRLNAME($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE CNTRL_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPARVIEWID($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE PAR_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCNTRLBTNCOMMENT($value){
		$sql = 'SELECT * FROM cntrl_btn WHERE CNTRL_BTN_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cntrl_btn WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cntrl_btn WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cntrl_btn WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cntrl_btn WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCNTRLNAME($value){
		$sql = 'DELETE FROM cntrl_btn WHERE CNTRL_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPARVIEWID($value){
		$sql = 'DELETE FROM cntrl_btn WHERE PAR_VIEW_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCNTRLBTNCOMMENT($value){
		$sql = 'DELETE FROM cntrl_btn WHERE CNTRL_BTN_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CntrlBtnMySql 
	 */
	protected function readRow($row){
		$cntrlBtn = new CntrlBtn();
		
		$cntrlBtn->iD = $row['ID'];
		$cntrlBtn->cREATED = $row['CREATED'];
		$cntrlBtn->cREATEDBY = $row['CREATED_BY'];
		$cntrlBtn->lASTUPD = $row['LAST_UPD'];
		$cntrlBtn->lASTUPDBY = $row['LAST_UPD_BY'];
		$cntrlBtn->cNTRLNAME = $row['CNTRL_NAME'];
		$cntrlBtn->pARVIEWID = $row['PAR_VIEW_ID'];
		$cntrlBtn->cNTRLBTNCOMMENT = $row['CNTRL_BTN_COMMENT'];

		return $cntrlBtn;
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
	 * @return CntrlBtnMySql 
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