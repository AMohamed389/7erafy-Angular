<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstOffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstOffr 
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
 	 * @param cstOffr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstOffr cstOffr
 	 */
	public function insert($cstOffr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstOffr cstOffr
 	 */
	public function update($cstOffr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTID($value);

	public function queryByOFFRID($value);

	public function queryBySTARTDT($value);

	public function queryByENDDT($value);

	public function queryByCSTOFFRSTAT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTID($value);

	public function deleteByOFFRID($value);

	public function deleteBySTARTDT($value);

	public function deleteByENDDT($value);

	public function deleteByCSTOFFRSTAT($value);


}
?>