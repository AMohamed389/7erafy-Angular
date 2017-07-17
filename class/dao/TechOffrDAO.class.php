<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechOffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechOffr 
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
 	 * @param techOffr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechOffr techOffr
 	 */
	public function insert($techOffr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechOffr techOffr
 	 */
	public function update($techOffr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHID($value);

	public function queryByOFFRID($value);

	public function queryBySTARTDT($value);

	public function queryByENDDT($value);

	public function queryByTECHOFFRSTAT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHID($value);

	public function deleteByOFFRID($value);

	public function deleteBySTARTDT($value);

	public function deleteByENDDT($value);

	public function deleteByTECHOFFRSTAT($value);


}
?>