defined('BASEPATH') or exit('No direct script access allowed');

require_once 'PCS_model.php';

class M_ttp_licence extends Da_ttp_licence
{
    public function get_company()
    {
        $sql = "SELECT *
                FROM company";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_supervisor()
    {
        $sql = "SELECT *
                FROM employee";
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_plan()
    {
        $sql = "SELECT * 
                FROM  plant INNER JOIN employee
                ON  plant.Emp_ID = employee.Emp_ID ";
        $query = $this->db->query($sql);
        return $query;
    }
}