<?php

/**
 * City_Model Class
 *
 * @package Model
 * @author Shailendra Nath
 * @version 1.0
 * @description Driver Model
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use Session;

class Dealer_Model extends Model {
	use SoftDeletes;

    protected $table;
    protected $fillable = [];
    protected $primaryKey = 'id';


    public function __construct() {
        $this->table = config('tables.tbldealers');
      }


    // SITE AJAX LIST

    /*
     * @Class:           <City_Model>
     * @Function:        <getDriverListDatatableQuery>
     * @Author:          Ramayan Prasad
     * @Created On:      <03-09-2018>
     * @Last Modified By:Shailendra Nath
     * @Last Modified:   <03-09-2018>
     * @Description:     <>
     */
    private function getDealerListDatatableQuery($data) {

        $query = DB::table($this->table . ' AS D');
        $query->select(DB::raw("D.*, D.id AS DT_RowId"));
        $query->whereNull('D.deleted_at');

        if (!empty($data['q'])) {
          
        }

                // filter by seach
        $generalSearch = (isset($data['query']['generalSearch']) ? $data['query']['generalSearch'] : '');
        if (!empty($generalSearch)) {

            $columnSearch = array(
              'D.name', 'D.phone',
            );

            $whereSql = '';
            foreach ($columnSearch as $item) {
                $whereSql .= $item . " LIKE '%" . $generalSearch . "%' OR ";
            }

            if (!empty($whereSql)) {
                $whereSql = '(' . rtrim($whereSql, ' OR ') . ')';
                $query->whereRaw($whereSql);
            }
        }

        if (isset($data['query']['status'])) {
            $query->where('D.status', $data['query']['status']);
        }

     
        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {
            $query->orderBy('D.id', 'DESC');
        }
        return $query;
    }

    
     /*
     * @Class:           <City_Model>
     * @Function:        <getDriverListDatatable>
     * @author Shailendra Nath
     * @Created On:      <03-09-2018>
     * @Last Modified By:Shailendra Nath
     * @Last Modified:   <03-09-2018>
     * @Description:     <>
     */

    public function getDealerListDatatable($data) {

        $page = !empty($data['pagination']['page']) ? $data['pagination']['page'] : 1;
        $perPage = !empty($data['pagination']['perpage']) ? $data['pagination']['perpage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getDealerListDatatableQuery($data);

        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getDealerListDatatableFilteredCount($data);
        $finalArray['meta'] = array(
            'page' => $page,
            'pages' => ceil($totalRecords / $perPage),
            'perpage' => (int) $perPage,
            'total' => (int) $totalRecords,
                //'sort' => 'desc',
                //'field' => 'health_tip_id'
        );
        $finalArray['data'] = $items;

        //pr(DB::getQueryLog());exit;
        //pr($items);exit;

        return $finalArray;
    }


    /*
     * @Class:           <City_Model>
     * @Function:        <getDriverListDatatableFilteredCount>
     * @author Shailendra Nath
     * @Created On:      <03-09-2018>
     * @Last Modified By:Shailendra Nath
     * @Last Modified:   <03-09-2018>
     * @Description:     <>
     */

    function getDealerListDatatableFilteredCount($data) {
        return $this->getDealerListDatatableQuery($data)->count();
    }


	}