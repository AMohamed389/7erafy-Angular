<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CitiesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Cities 
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
 	 * @param citie primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Cities citie
 	 */
	public function insert($citie);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Cities citie
 	 */
	public function update($citie);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCityName($value);

	public function queryByCityArName($value);


	public function deleteByCityName($value);

	public function deleteByCityArName($value);


}
?>