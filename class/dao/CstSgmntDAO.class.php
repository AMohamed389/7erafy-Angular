<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstSgmntDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstSgmnt 
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
 	 * @param cstSgmnt primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstSgmnt cstSgmnt
 	 */
	public function insert($cstSgmnt);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstSgmnt cstSgmnt
 	 */
	public function update($cstSgmnt);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryBySGMNTNAME($value);

	public function queryBySGMNTSTAT($value);

	public function queryBySGMNTSTARTDT($value);

	public function queryBySGMNTENDDT($value);

	public function queryBySGMNTCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteBySGMNTNAME($value);

	public function deleteBySGMNTSTAT($value);

	public function deleteBySGMNTSTARTDT($value);

	public function deleteBySGMNTENDDT($value);

	public function deleteBySGMNTCOMMENT($value);


}
?>