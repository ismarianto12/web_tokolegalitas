<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    public $CREATE = 1, $UPDATE = 2, $DELETE = 3, $COMPLETE = 4; // action flag
    private $numData = 0; // num of record
    protected $table = '', $isNew = true;
    public $imgFolder = '';
    protected $NewNumber = 0;

    public function __construct() {
        parent::__construct();
    }

    /* ------------------------ SCENARIO - get ------------------------ */
    public function getNumData() { // get num of record
        return $this->numData;
    }

    public function getLastID() { // get 'id' (PK) of last executed query
        return $this->db->insert_id();
    }

    /*
    | ---------- $query is an array ----------
    | key index = table, where, sort, similar
    */
    public function getRecord($query = array()) { // get record
        // print_r($query);
        // die;
        $record = null;

        if (isset($query['table'])) {
            $where = (isset($query['where'])) ? $query['where'] : null;
            $order = (isset($query['sort'])) ? $query['sort'] : null;
            $isLike = (isset($query['similar'])) ? $query['similar'] : false;
            self::_initClause($where, $order, $isLike);
            $data = $this->db->get($query['table']);
            $this->numData = $data->num_rows();
            $record = ($this->numData == 0) ? null : $data->row();
        }

        return $record;
    }

    /*
    | -------------- $query is an array --------------
    | key index = table, where, sort, similar, limits
    */
    public function getList($query = array()) { // get list
        // print_r($query);
        // die;
        $list = array();

        if (isset($query['table'])) {
            $where = (isset($query['where'])) ? $query['where'] : null;
            $order = (isset($query['sort'])) ? $query['sort'] : null;
            $isLike = (isset($query['similar'])) ? $query['similar'] : false;
            self::_initClause($where, $order, $isLike);

            if (isset($query['limits'])) { // $this->db->limit(limit, offset);
                $limits = $query['limits']; // > as array
                $this->db->limit($limits[0]);

                if (isset($limits[1])) {
                    $this->db->limit($limits[0], $limits[1]);
                }
            }

            $data = $this->db->get($query['table']);
            $this->numData = $data->num_rows();
            $list = $data->result();
        }
        // print_r($list);
        // die;
        return $list;
    }

    private function _initClause($where, $order, $isLike) { // run query
        $clause = false; // where or like clause

        if (is_array($where)) {
            $clause = (count($where) > 0);
        } else {
            $clause = ($where != null);
        }

        if ($clause) {
            if ($isLike) {
                $this->db->like($where);
            } else {
                $this->db->where($where);
            }
        }

        if ($order != null) {
            $this->db->order_by($order); // $this->db->order_by('fieldA desc, fieldB asc');
        }
    }

    /* ------------------------ SCENARIO - set/manage ------------------------ */
    /*
    | ------- $query is an array -------
    | key index = table, type, data, at
    */
    public function action($query = array()) { // action record
        $result = false;

        if (isset($query['table']) && isset($query['type'])) {
            switch ($query['type']) {
                case $this->CREATE:
                    if (isset($query['data'])) {
                        $result = $this->db->insert($query['table'], $query['data']);
                        // echo $this->db->last_query();
                    }

                    break;
                case $this->UPDATE:
                    if (isset($query['at']) && isset($query['data'])) {
                        $this->db->where($query['at']); // at is an array
                        $result = $this->db->update($query['table'], $query['data']);
                    } else {
                        $result = false;
                    }

                    break;
                case $this->COMPLETE:
                    if (isset($query['at']) && isset($query['data'])) {
                        $this->db->where($query['at']); // at is an array
                        $result = $this->db->update($query['table'], $query['data']);
                    } else {
                        $result = false;
                    }

                    break;
                case $this->DELETE: // delete ;)
                    $result = $this->db->delete($query['table'], $query['at']); // at is an array
                    break;
            }
        }

        return $result;
    }

    /* ------------------------ SCENARIO - child class implementation ------------------------ */
    public function isNew($value) { // check action is for new input or update
        $this->isNew = $value;
    }

    public function getTable() {
        return $this->table;
    }

    public function getListByQuery($query = null)
    {
        $sql = $this->db->query($query);
        if ($sql->num_rows() > 0) {
            return $sql->result();
        } else {
            return null;
        }
    }
}
