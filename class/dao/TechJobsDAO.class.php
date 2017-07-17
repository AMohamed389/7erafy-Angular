<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechJobsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechJobs 
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
 	 * @param techJob primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechJobs techJob
 	 */
	public function insert($techJob);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechJobs techJob
 	 */
	public function update($techJob);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByJobName($value);


	public function deleteByJobName($value);


}
?>