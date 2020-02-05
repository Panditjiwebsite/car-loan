<?php
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use DB;
class User_Model extends Model {
    protected $table;
    
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
    
    public function __construct()
    {
        $this->table = config('tables.tblUsers');
        
    }
    
    /**
     * @package Admin
     * @class User_Model
     * @function checkLogin
     * @author Atul Singh Khatri
     * @version 1.0
     * @description Get user details
     */
    public function checkLogin($username, $password)
    {
      $userdata  = DB::table($this->table . ' AS U')->selectRaw('U.*')
                  ->where('U.user_type', 'APP_ADMIN')
                  ->where('U.email', $username)
                  ->where('U.password', getPasswordHashed($password))
                  ->where('U.status', 'ACTIVE')
                  ->first();
      return $userdata;
      
    }
   
    public function getAdminData($email)
    {
      $userdata  = DB::table($this->table . ' AS U')
                  ->selectRaw('U.*')
                  ->where('U.user_type', 'APP_ADMIN')
                  ->where('U.email', $email)
                  ->where('U.status', 'ACTIVE')
                  ->first();
      return $userdata;
    }


    public function getAdminDetailsByUserId($id){
        $userdata = DB::table('users')    
              ->select('users.first_name','users.last_name','users.email','users.phone','users.user_type','users.created_at','users.profile_image')
              ->where('users.user_type', '=', 'APP_ADMIN')
              ->where('users.id', '=', $id)->first();
            return $userdata;
      }


    public function getUserListDatatable($data) {

        $page = !empty($data['pagination']['page']) ? $data['pagination']['page'] : 1;
        $perPage = !empty($data['pagination']['perpage']) ? $data['pagination']['perpage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getUserListDatatableQuery($data);
    
        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getUserListDatatableFilteredCount($data);
        $finalArray['meta'] = array(
            'page' => $page,
            'pages' => ceil($totalRecords / $perPage),
            'perpage' => (int) $perPage,
            'total' => (int) $totalRecords,

        );
        $finalArray['data'] = $items;

        return $finalArray;
 
    }

    private function getUserListDatatableQuery($data) {  

        $query = DB::table('users')
            ->select('users.id as id','users.first_name as first_name','users.last_name as last_name','users.created_at as created_at','users.email as email','users.status as status')
            ->where('users.user_type', '!=', 'APP_ADMIN')
            ->whereNull('users.deleted_at');
              
        $generalSearch = (isset($data['query']['generalSearch']) ? $data['query']['generalSearch'] : '');
        if (!empty($generalSearch)) {

            $columnSearch = array(
                'users.name','users.first_name','users.last_name','users.email'
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
            $query->where('users.status', $data['query']['status']);
        }

       
        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {
            $query->orderBy('id', 'DESC');
        }

        return $query;
    }

    public function getUserListDatatableFilteredCount($data) {
        return $this->getUserListDatatableQuery($data)->count();
    }


      public function getFullDetailsByUserId($id){
      $userdata = DB::table('users')
            ->leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            
            ->select('users.first_name','users.last_name','users.status','users.email','users.phone','users.user_type','users.created_at','user_details.borrow_money','user_details.dob','user_details.vehicle_type','user_details.marital_status','user_details.dl_type','user_details.flat_no',
              'user_details.building_name','user_details.street','user_details.locality','user_details.city','user_details.country','user_details.postal_code','user_details.address_year','user_details.address_month','user_details.rental_status','user_details.employee_status','user_details.notifybyemail','user_details.notifybysms','user_details.financial_info')
            ->where('users.user_type', '!=', 'APP_ADMIN')
            ->where('users.id', '=', $id)->first();
          return $userdata;
         
    }


 /****
 * 
 * MEMBER AREA FUNCTIONS 
 * 
 *****/

    public function checkMemberLogin($username, $password){

     

    $memberdata  = DB::table($this->table . ' AS U')->selectRaw('U.*')
        ->where('U.user_type', 'MEMBER')
        ->where('U.email', $username)
        ->where('U.password', getPasswordHashed($password))
        ->where('U.status', 'ACTIVE')
        ->first();
    return $memberdata;

    }


}
