<?php
/**
 * Class that operate on table 'list_of_values'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class ListOfValuesMySqlDAO implements ListOfValuesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ListOfValuesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM list_of_values WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM list_of_values';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM list_of_values ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param listOfValue primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM list_of_values WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ListOfValuesMySql listOfValue
 	 */
	public function insert($listOfValue){
		$sql = 'INSERT INTO list_of_values (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, PAR_ID, NAME, TYPE, VAL, DESC_TXT, VAL_STAT, CODE, ORDER, HIGH) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($listOfValue->cREATED);
		$sqlQuery->set($listOfValue->cREATEDBY);
		$sqlQuery->set($listOfValue->lASTUPD);
		$sqlQuery->set($listOfValue->lASTUPDBY);
		$sqlQuery->setNumber($listOfValue->pARID);
		$sqlQuery->set($listOfValue->nAME);
		$sqlQuery->set($listOfValue->tYPE);
		$sqlQuery->set($listOfValue->vAL);
		$sqlQuery->set($listOfValue->dESCTXT);
		$sqlQuery->set($listOfValue->vALSTAT);
		$sqlQuery->set($listOfValue->cODE);
		$sqlQuery->set($listOfValue->oRDER);
		$sqlQuery->set($listOfValue->hIGH);

		$id = $this->executeInsert($sqlQuery);	
		$listOfValue->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ListOfValuesMySql listOfValue
 	 */
	public function update($listOfValue){
		$sql = 'UPDATE list_of_values SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, PAR_ID = ?, NAME = ?, TYPE = ?, VAL = ?, DESC_TXT = ?, VAL_STAT = ?, CODE = ?, ORDER = ?, HIGH = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($listOfValue->cREATED);
		$sqlQuery->set($listOfValue->cREATEDBY);
		$sqlQuery->set($listOfValue->lASTUPD);
		$sqlQuery->set($listOfValue->lASTUPDBY);
		$sqlQuery->setNumber($listOfValue->pARID);
		$sqlQuery->set($listOfValue->nAME);
		$sqlQuery->set($listOfValue->tYPE);
		$sqlQuery->set($listOfValue->vAL);
		$sqlQuery->set($listOfValue->dESCTXT);
		$sqlQuery->set($listOfValue->vALSTAT);
		$sqlQuery->set($listOfValue->cODE);
		$sqlQuery->set($listOfValue->oRDER);
		$sqlQuery->set($listOfValue->hIGH);

		$sqlQuery->setNumber($listOfValue->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM list_of_values';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM list_of_values WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM list_of_values WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM list_of_values WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM list_of_values WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPARID($value){
		$sql = 'SELECT * FROM list_of_values WHERE PAR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNAME($value){
		$sql = 'SELECT * FROM list_of_values WHERE NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTYPE($value){
		$sql = 'SELECT * FROM list_of_values WHERE TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVAL($value){
		$sql = 'SELECT * FROM list_of_values WHERE VAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDESCTXT($value){
		$sql = 'SELECT * FROM list_of_values WHERE DESC_TXT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVALSTAT($value){
		$sql = 'SELECT * FROM list_of_values WHERE VAL_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCODE($value){
		$sql = 'SELECT * FROM list_of_values WHERE CODE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByORDER($value){
		$sql = 'SELECT * FROM list_of_values WHERE ORDER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHIGH($value){
		$sql = 'SELECT * FROM list_of_values WHERE HIGH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM list_of_values WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM list_of_values WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM list_of_values WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM list_of_values WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPARID($value){
		$sql = 'DELETE FROM list_of_values WHERE PAR_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNAME($value){
		$sql = 'DELETE FROM list_of_values WHERE NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTYPE($value){
		$sql = 'DELETE FROM list_of_values WHERE TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVAL($value){
		$sql = 'DELETE FROM list_of_values WHERE VAL = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDESCTXT($value){
		$sql = 'DELETE FROM list_of_values WHERE DESC_TXT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVALSTAT($value){
		$sql = 'DELETE FROM list_of_values WHERE VAL_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCODE($value){
		$sql = 'DELETE FROM list_of_values WHERE CODE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByORDER($value){
		$sql = 'DELETE FROM list_of_values WHERE ORDER = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHIGH($value){
		$sql = 'DELETE FROM list_of_values WHERE HIGH = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ListOfValuesMySql 
	 */
	protected function readRow($row){
		$listOfValue = new ListOfValue();
		
		$listOfValue->iD = $row['ID'];
		$listOfValue->cREATED = $row['CREATED'];
		$listOfValue->cREATEDBY = $row['CREATED_BY'];
		$listOfValue->lASTUPD = $row['LAST_UPD'];
		$listOfValue->lASTUPDBY = $row['LAST_UPD_BY'];
		$listOfValue->pARID = $row['PAR_ID'];
		$listOfValue->nAME = $row['NAME'];
		$listOfValue->tYPE = $row['TYPE'];
		$listOfValue->vAL = $row['VAL'];
		$listOfValue->dESCTXT = $row['DESC_TXT'];
		$listOfValue->vALSTAT = $row['VAL_STAT'];
		$listOfValue->cODE = $row['CODE'];
		$listOfValue->oRDER = $row['ORDER'];
		$listOfValue->hIGH = $row['HIGH'];

		return $listOfValue;
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
	 * @return ListOfValuesMySql 
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