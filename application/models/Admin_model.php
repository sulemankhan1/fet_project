<?php

/**
 *
 */
class Admin_model extends CI_Model
{

  // users query start
  public function get_Users()
  {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('role','users.user_role_id=role.role_id','LEFT');
      $this->db->where('users.user_type !=' ,'admin');
      $this->db->order_by("users.id", "DESC");


      $query = $this->db->get();
      $result = $query->result();
      return $result;
  }

  public function users_search($search_val = '')
  {
    $this->db->select('*');
      $this->db->from('users');

      $this->db->join('role','role.role_id = users.user_role_id');

      $this->db->where('users.user_type !=' ,'admin');

      if ($search_val != '') {


        $this->db->like('role.role_name', $search_val);
        $this->db->or_like('users.first_name', $search_val);
        $this->db->or_like('users.last_name', $search_val);
        $this->db->or_like('users.email', $search_val);
        $this->db->or_like('users.username', $search_val);
        $this->db->or_like('users.ph_num', $search_val);
        $this->db->or_like('users.user_type', $search_val);
        $this->db->or_like('users.comission', $search_val);

      }

      $this->db->order_by("users.id", "DESC");

      return $this->db->get()->result();
      // echo "<pre>";print_r($this->db->last_query($query));
      // print_r($query);
      // exit();
      //   return $query;
  }
  // users query end

  //  Stocks query

  public function getStocks($search_val='', $status='')
   {
      $this->db->select('stock.*,items.name as itam_name,warehouse.warehouse_name, users.first_name,users.last_name');
      $this->db->from('stock');
      $this->db->join('items','stock.item_id = items.id');
      $this->db->join('users','users.id = stock.added_by');
      $this->db->join('warehouse','warehouse.id = stock.warehouse_id');

      if (!empty($search_val)) {
        $this->db->or_like('warehouse.warehouse_name', $search_val);
        $this->db->or_like('items.name', $search_val);
      }
      $this->db->order_by("items.id", "DESC");

      $query = $this->db->get();
        $result = $query->result();
        return $result;
   }


   public function getBillData($search_val='', $status='')
   {
      $this->db->select('purchase_bills.*,warehouse.warehouse_name');
      $this->db->from('purchase_bills');
      $this->db->join('warehouse','warehouse.id = purchase_bills.warehouse_id');

      if (!empty($search_val)) {
        $this->db->or_like('warehouse.warehouse_name', $search_val);
        $this->db->or_like('items.name', $search_val);
      }
      $this->db->order_by("purchase_bills.id", "DESC");

      $query = $this->db->get();
        $result = $query->result();
        return $result;
   }

   public function getBillInfo($id)
   {
     $this->db->select('purchase_bills_items.*,items.name as item_name');
      $this->db->from('purchase_bills_items');
      $this->db->join('items','items.id = purchase_bills_items.item_id');
      $this->db->where('purchase_bills_items.bill_id',$id);

      $query = $this->db->get();
        $result = $query->result();
        return $result;
   }

   public function getSupplier($search_val='', $status='')
   {
     $this->db->select('*');
      $this->db->from('suppliers');

      if (!empty($search_val)) {

        $this->db->or_like('supplier_id', $search_val);
        $this->db->or_like('supplier_name', $search_val);
        $this->db->or_like('payment_method', $search_val);
        $this->db->or_like('credit_days', $search_val);
        $this->db->or_like('user_status', $search_val);
        $this->db->or_like('contact_person', $search_val);
        $this->db->or_like('city', $search_val);
        $this->db->or_like('mobile_num', $search_val);
        $this->db->or_like('address', $search_val);
        $this->db->or_like('person_name', $search_val);
        $this->db->or_like('person_designation', $search_val);
        $this->db->or_like('person_number', $search_val);

      }
      $this->db->order_by("supplier_id", "DESC");

      $query = $this->db->get();
        $result = $query->result();
        return $result;
   }
   public function getQuotes($search_val='' , $id='')
   {
     $this->db->select('q.*,c.*,p.name,p.lot_size,p.amountpersquaremeter,p.cost,p.sku,pr.project_name,epi.title,epi.downpayment, users.first_name user_fname, users.last_name user_lanme ');
      $this->db->from('quotes q');
      $this->db->join('customers c','c.customer_id = q.customer_id');
      $this->db->join('properties p','p.id = q.property_id');
      $this->db->join('projects pr','pr.id = q.project_id');
      $this->db->join('extra_properties_info epi','epi.id = q.property_title_id');
      $this->db->join('users','q.added_by = users.id');

      if ($search_val != '') {

        $this->db->or_like('q.quote_numb', $search_val);
        $this->db->or_like('c.first_name', $search_val);
        $this->db->or_like('p.name', $search_val);
        $this->db->or_like('pr.project_name', $search_val);
        $this->db->or_like('q.total_quote_amount', $search_val);
        $this->db->or_like('q.notes', $search_val);
        $this->db->or_like('q.status_of_quote', $search_val);

      }

      if ($id != '') {

          $this->db->where('q.quote_id',$id);

      }

      $this->db->order_by('q.quote_id', 'desc');

      return $this->db->get()->result();

   }

   public function getpaymentscount($id)
   {

      $this->db->select('count(id) as total_payments');
      $this->db->from('quote_payments');
      $this->db->where('quote_id',$id);
      return  $this->db->get()->row();

   }

   public function getPayments($id)
   {
     $this->db->select('*');
     $this->db->from('quote_payments');
     $this->db->where('quote_id',$id);
     return  $this->db->get()->result();

   }

   public function get_quote_data($id)
   {
      $this->db->select('*');
      $this->db->from('quotes q');
      $this->db->join('customers c','q.customer_id=c.customer_id');
      $this->db->join('properties p','p.id=q.property_id');
      $this->db->where('q.quote_id',$id);
      $query = $this->db->get();
      $result = $query->result();
      return $result;
   }

   public function get_payment_details($id)
   {
     $this->db->select('*');
     $this->db->from('payments');
     $this->db->where('quote_id',$id);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
   }

   public function updateOrders($arr, $id) {

     return $this->db->update_batch('payments', $arr,'quote_id');

   }

   public function getProperties($search='',$id='')
   {
      $this->db->select('p.*,pr.project_name as project_name');
      $this->db->from('properties p');
      $this->db->join('projects pr','pr.id = p.project_id');

      if ($search != '') {

        $this->db->or_like('pr.project_name',$search);
        $this->db->or_like('p.name',$search);
        $this->db->or_like('p.lot_size',$search);
        $this->db->or_like('p.amountpersquaremeter',$search);
        $this->db->or_like('p.total_val',$search);
        $this->db->or_like('p.cost',$search);
        $this->db->or_like('p.sku',$search);
        $this->db->or_like('p.payment_terms',$search);

      }

      if ($id != '') {

        $this->db->where('p.id',$id);

      }

      $this->db->order_by('p.id','desc');

      return $this->db->get()->result();

   }

   public function getInvoices($search = '' , $id = '')
   {
      $this->db->select('inv.id as inv_id,inv.*,q.*,c.*,p.name,pr.project_name');
      $this->db->from('invoices inv');
      // $this->db->join('quote_payments qp','qp.id = inv.payment_id');
      $this->db->join('quotes q','q.quote_id = inv.quote_id');
      $this->db->join('customers c','c.customer_id = q.customer_id');
      $this->db->join('properties p','p.id = q.property_id');
      $this->db->join('projects pr','pr.id = q.project_id');

      if ($search != '') {

        $this->db->or_like('inv.invoice_numb', $search);
        $this->db->or_like('q.quote_numb', $search);
        // $this->db->or_like('c.first_name', $search);
        // $this->db->or_like('p.name', $search);
        // $this->db->or_like('pr.project_name', $search);
        // $this->db->or_like('q.total_quote_amount', $search);
        $this->db->or_like('qp.gen_amount', $search);
        $this->db->or_like('inv.pay_method', $search);
        $this->db->or_like('DATE_FORMAT(inv.created_at, "%Y-%m-%d")', $search);


      }

      if ($id != '') {

          $this->db->where('inv.id',$id);

      }

      $this->db->order_by('q.quote_id', 'desc');

      return $this->db->get()->result();
   }

   public function getCurMonthPayments($date)
   {

      $this->db->select('gen_amount as series , pay_date as labels');
      $this->db->from('quote_payments');
      $this->db->where('DATE_FORMAT(pay_date, "%Y-%m") =' , $date);
      return $this->db->get()->result();

   }

   public function getPaymentWithReceiver($id)
   {
     $this->db->select('qp.* , u.first_name , u.last_name');
     $this->db->from('quote_payments qp');
     $this->db->join('users u','u.id = qp.pay_by','left');
     $this->db->where('qp.quote_id',$id);
     return $this->db->get()->result();

   }

}
