<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CntrlUpldDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CntrlUpld 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param cntrlUpld primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CntrlUpld cntrlUpld
 	 */
	public function insert($cntrlUpld);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CntrlUpld cntrlUpld
 	 */
	public function update($cntrlUpld);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByUPLDNAME($value);

	public function queryByPARVIEWID($value);

	public function queryByCNTRLUPLDCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByUPLDNAME($value);

	public function deleteByPARVIEWID($value);

	public function deleteByCNTRLUPLDCOMMENT($value);


}
?>