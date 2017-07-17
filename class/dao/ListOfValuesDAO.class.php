<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface ListOfValuesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ListOfValues 
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
 	 * @param listOfValue primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ListOfValues listOfValue
 	 */
	public function insert($listOfValue);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ListOfValues listOfValue
 	 */
	public function update($listOfValue);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByPARID($value);

	public function queryByNAME($value);

	public function queryByTYPE($value);

	public function queryByVAL($value);

	public function queryByDESCTXT($value);

	public function queryByVALSTAT($value);

	public function queryByCODE($value);

	public function queryByORDER($value);

	public function queryByHIGH($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByPARID($value);

	public function deleteByNAME($value);

	public function deleteByTYPE($value);

	public function deleteByVAL($value);

	public function deleteByDESCTXT($value);

	public function deleteByVALSTAT($value);

	public function deleteByCODE($value);

	public function deleteByORDER($value);

	public function deleteByHIGH($value);


}
?>