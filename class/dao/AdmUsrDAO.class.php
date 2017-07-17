<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface AdmUsrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdmUsr 
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
 	 * @param admUsr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdmUsr admUsr
 	 */
	public function insert($admUsr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdmUsr admUsr
 	 */
	public function update($admUsr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByNAME($value);

	public function queryByEMAIL($value);

	public function queryByUSRSTAT($value);

	public function queryByUSRNAME($value);

	public function queryByPSWD($value);

	public function queryByUSRSTATDT($value);

	public function queryByUSRENDDT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByNAME($value);

	public function deleteByEMAIL($value);

	public function deleteByUSRSTAT($value);

	public function deleteByUSRNAME($value);

	public function deleteByPSWD($value);

	public function deleteByUSRSTATDT($value);

	public function deleteByUSRENDDT($value);


}
?>