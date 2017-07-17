<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface OffrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Offr 
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
 	 * @param offr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Offr offr
 	 */
	public function insert($offr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Offr offr
 	 */
	public function update($offr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByOFFRNAME($value);

	public function queryByOFFRSTAT($value);

	public function queryByOFFRSARTDT($value);

	public function queryByOFFRENDDT($value);

	public function queryByOFFRCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByOFFRNAME($value);

	public function deleteByOFFRSTAT($value);

	public function deleteByOFFRSARTDT($value);

	public function deleteByOFFRENDDT($value);

	public function deleteByOFFRCOMMENT($value);


}
?>