<?php
/**
 * Class that operate on table 'cntrl_view'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CntrlViewMySqlDAO implements CntrlViewDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CntrlViewMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cntrl_view WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cntrl_view';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cntrl_view ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cntrlView primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cntrl_view WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlViewMySql cntrlView
 	 */
	public function insert($cntrlView){
		$sql = 'INSERT INTO cntrl_view (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, VIEW_NAME, VIEW_COMMENT) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlView->cREATED);
		$sqlQuery->set($cntrlView->cREATEDBY);
		$sqlQuery->set($cntrlView->lASTUPD);
		$sqlQuery->set($cntrlView->lASTUPDBY);
		$sqlQuery->set($cntrlView->vIEWNAME);
		$sqlQuery->set($cntrlView->vIEWCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$cntrlView->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlViewMySql cntrlView
 	 */
	public function update($cntrlView){
		$sql = 'UPDATE cntrl_view SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, VIEW_NAME = ?, VIEW_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cntrlView->cREATED);
		$sqlQuery->set($cntrlView->cREATEDBY);
		$sqlQuery->set($cntrlView->lASTUPD);
		$sqlQuery->set($cntrlView->lASTUPDBY);
		$sqlQuery->set($cntrlView->vIEWNAME);
		$sqlQuery->set($cntrlView->vIEWCOMMENT);

		$sqlQuery->setNumber($cntrlView->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cntrl_view';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cntrl_view WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cntrl_view WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cntrl_view WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cntrl_view WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWNAME($value){
		$sql = 'SELECT * FROM cntrl_view WHERE VIEW_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVIEWCOMMENT($value){
		$sql = 'SELECT * FROM cntrl_view WHERE VIEW_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cntrl_view WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cntrl_view WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cntrl_view WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cntrl_view WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWNAME($value){
		$sql = 'DELETE FROM cntrl_view WHERE VIEW_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVIEWCOMMENT($value){
		$sql = 'DELETE FROM cntrl_view WHERE VIEW_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CntrlViewMySql 
	 */
	protected function readRow($row){
		$cntrlView = new CntrlView();
		
		$cntrlView->iD = $row['ID'];
		$cntrlView->cREATED = $row['CREATED'];
		$cntrlView->cREATEDBY = $row['CREATED_BY'];
		$cntrlView->lASTUPD = $row['LAST_UPD'];
		$cntrlView->lASTUPDBY = $row['LAST_UPD_BY'];
		$cntrlView->vIEWNAME = $row['VIEW_NAME'];
		$cntrlView->vIEWCOMMENT = $row['VIEW_COMMENT'];

		return $cntrlView;
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
	 * @return CntrlViewMySql 
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